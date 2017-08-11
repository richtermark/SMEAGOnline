<?php

namespace Biz\Course\Copy\Impl;

use Biz\Task\Dao\TaskDao;
use Biz\Activity\Config\Activity;
use Biz\Activity\Dao\ActivityDao;
use Biz\Course\Dao\CourseChapterDao;
use Biz\Course\Dao\CourseMaterialDao;
use Biz\Course\Copy\AbstractEntityCopy;

class TaskCopy extends AbstractEntityCopy
{
    /**
     * 复制链说明：
     * Task 任务信息
     * - Chapter 多级章节信息
     * - Activity 活动信息
     *   - ActivityConfig 活动自定义信息
     *   - Material 关联到activity的Material
     *   - Testpaper 关联到Activity的testpaper.
     *
     * @param $biz
     */
    public function __construct($biz)
    {
        parent::__construct($biz, 'task');
    }

    /*
     * 这里同时处理task和chapter
     * $source = $originalCourse
     * $config = $newCourse, $modeChange
     * isCopy 表示是否是班级复制
     */
    protected function _copy($source, $config = array())
    {
        $user = $this->biz['user'];
        $tasks = $this->getTaskDao()->findByCourseId($source['id']);
        if (empty($tasks)) {
            return array();
        }

        $modeChange = $config['modeChange'];

        $newCourse = $config['newCourse'];
        $newCourseSetId = $newCourse['courseSetId'];
        $newTasks = array();
        $chapterMap = $this->doCopyChapters($source['id'], $newCourse['id'], $config['isCopy']);
        $activityMap = $this->doCopyActivities($source['id'], $newCourse['id'], $newCourseSetId, $config['isCopy']);
        //task orderd by seq
        usort($tasks, function ($t1, $t2) {
            return $t1['seq'] - $t2['seq'];
        });
        //sort tasks
        $num = 1;
        foreach ($tasks as $task) {
            $newTask = $this->doCopyTask($task, $config['isCopy']);
            $newTask['courseId'] = $newCourse['id'];
            //number 代表任务的次序，默认教学计划 和 自由式与解锁式的设置方法不同
            //对于默认教学计划，跟lesson同级的五个任务拥有相同的number，
            //对于自由式和解锁式，则每个任务按照seq次序依次排列
            //因此，当从默认教学计划复制为自由式/解锁式的时候需要重新计算number
            if ($modeChange && !$newTask['isOptional']) {
                $newTask['number'] = $num++;
            }
            $newTask['fromCourseSetId'] = $newCourseSetId;
            if (!empty($task['categoryId'])) {
                $newChapter = $chapterMap[$task['categoryId']];
                //如果是从默认教学计划复制，则删除type=lesson的chapter，并将对应task的categoryId指向该chapter的父级
                if ($modeChange && $newChapter['type'] == 'lesson') {
                    $this->getChapterDao()->delete($newChapter['id']);
                    $newTask['categoryId'] = $newChapter['parentId'];
                    $newTask['mode'] = 'default';
                } else {
                    $newTask['categoryId'] = $newChapter['id'];
                }
            }
            $newTask['activityId'] = $activityMap[$task['activityId']];
            $newTask['createdUserId'] = $user['id'];
            $newTasks[] = $this->getTaskDao()->create($newTask);
        }

        return $newTasks;
    }

    private function doCopyChapters($courseId, $newCourseId, $isCopy)
    {
        //查询出course下所有chapter，新增并保留新旧chapter id，用于填充newTask的categoryId
        $chapters = $this->getChapterDao()->findChaptersByCourseId($courseId);
        $chapterMap = array(); // key=oldChapterId,value=newChapter
        if (!empty($chapters)) {
            //order by parentId
            usort($chapters, function ($a, $b) {
                if ($a['parentId'] < $b['parentId']) {
                    return -1;
                }

                if ($a['parentId'] == $b['parentId']) {
                    return $a['id'] > $b['id'];
                }

                return 1;
            });

            foreach ($chapters as $chapter) {
                $newChapter = array(
                    'courseId' => $newCourseId,
                    'type' => $chapter['type'],
                    'number' => $chapter['number'],
                    'seq' => $chapter['seq'],
                    'title' => $chapter['title'],
                    'copyId' => $isCopy ? $chapter['id'] : 0,
                );
                if ($chapter['parentId'] > 0) {
                    $newChapter['parentId'] = $chapterMap[$chapter['parentId']]['id'];
                }
                $newChapter = $this->getChapterDao()->create($newChapter);
                $chapterMap[$chapter['id']] = $newChapter;
            }
        }

        return $chapterMap;
    }

    private function doCopyActivities($courseId, $newCourseId, $courseSetId, $isCopy)
    {
        // 查询出course下所有activity，新增并保留新旧activity id，用于填充newTask的activityId
        $activities = $this->getActivityDao()->findByCourseId($courseId);
        $activityMap = array();

        if (!empty($activities)) {
            $fields = array(
                'mediaType',
                'title',
                'remark',
                'content',
                'length',
                'startTime',
                'endTime',
            );
            foreach ($activities as $activity) {
                $newActivity = array(
                    'fromUserId' => $this->biz['user']['id'],
                    'fromCourseId' => $newCourseId,
                    'fromCourseSetId' => $courseSetId,
                    'copyId' => $isCopy ? $activity['id'] : 0,
                );
                foreach ($fields as $field) {
                    if (!empty($activity[$field]) || $activity[$field] == 0) {
                        $newActivity[$field] = $activity[$field];
                    }
                }

                //create testpaper
                $testId = 0;
                if (in_array($activity['mediaType'], array('testpaper'))) {
                    $activityTestpaperCopy = new ActivityTestpaperCopy($this->biz);

                    $testpaper = $activityTestpaperCopy->copy($activity, array(
                        'newCourseId' => $newCourseId,
                        'newCourseSetId' => $courseSetId,
                        'isCopy' => $isCopy,
                    ));
                    $testId = $testpaper['id'];
                }

                //create activity config
                $config = $this->getActivityConfig($activity['mediaType']);

                $ext = $config->copy($activity, array(
                    'refLiveroom' => $activity['fromCourseSetId'] != $courseSetId,
                    'testId' => $testId,
                    'newActivity' => $newActivity,
                ));
                //对于testpaper，mediaId指向testpaper_activity.id
                if (!empty($ext)) {
                    $newActivity['mediaId'] = $ext['id'];
                }

                if ($newActivity['mediaType'] == 'live' && !$isCopy) { // 教学计划复制
                    // unset($newActivity['startTime']);
                    // unset($newActivity['endTime']);
                    $newActivity['startTime'] = time();
                    $newActivity['endTime'] = $newActivity['startTime'] + $newActivity['length'] * 60;
                } elseif ($newActivity['mediaType'] == 'live' && $isCopy) { // 班级课程复制
                    $newActivity['startTime'] = $activity['startTime'];
                    $newActivity['endTime'] = $activity['endTime'];
                }
                $newActivity = $this->getActivityDao()->create($newActivity);

                $this->doCopyMaterial($activity, $newActivity, array('newCourseId' => $newCourseId, 'newCourseSetId' => $courseSetId), $isCopy);
                $activityMap[$activity['id']] = $newActivity['id'];
            }
        }

        return $activityMap;
    }

    private function doCopyMaterial($activity, $newActivity, $config, $isCopy)
    {
        $source = $activity['mediaType'] == 'download' ? 'coursematerial' : 'courseactivity';
        $materials = $this->getMaterialDao()->findMaterialsByLessonIdAndSource($activity['id'], $source);
        if (empty($materials)) {
            return;
        }

        $fields = array(
            'title',
            'description',
            'link',
            'fileId',
            'fileUri',
            'fileMime',
            'fileSize',
            'type',
        );

        foreach ($materials as $material) {
            $newMaterial = array(
                'courseSetId' => $config['newCourseSetId'],
                'courseId' => $config['newCourseId'],
                'lessonId' => $newActivity['id'],
                'source' => $source,
                'userId' => $this->biz['user']['id'],
                'copyId' => $isCopy ? $material['id'] : 0,
            );
            foreach ($fields as $field) {
                if (!empty($material[$field])) {
                    $newMaterial[$field] = $material[$field];
                }
            }
            $this->getMaterialDao()->create($newMaterial);
        }
    }

    private function doCopyTask($task, $isCopy)
    {
        $fields = array(
            'seq',
            'activityId',
            'title',
            'isFree',
            'isOptional',
            'startTime',
            'endTime',
            'mode',
            'number',
            'type',
            'mediaSource',
            'status',
            'length',
        );

        $new = array(
            'copyId' => $isCopy ? $task['id'] : 0,
        );

        foreach ($fields as $field) {
            if (isset($task[$field])) {
                $new[$field] = $task[$field];
            }
        }

        if ($task['type'] == 'live' && !$isCopy) {
            $new['status'] = 'create';
        }

        return $new;
    }

    /**
     * @param  $type
     *
     * @return Activity
     */
    private function getActivityConfig($type)
    {
        return $this->biz["activity_type.{$type}"];
    }

    /**
     * @return TaskDao
     */
    protected function getTaskDao()
    {
        return $this->biz->dao('Task:TaskDao');
    }

    /**
     * @return ActivityDao
     */
    protected function getActivityDao()
    {
        return $this->biz->dao('Activity:ActivityDao');
    }

    /**
     * @return CourseChapterDao
     */
    protected function getChapterDao()
    {
        return $this->biz->dao('Course:CourseChapterDao');
    }

    /**
     * @return CourseMaterialDao
     */
    protected function getMaterialDao()
    {
        return $this->biz->dao('Course:CourseMaterialDao');
    }
}
