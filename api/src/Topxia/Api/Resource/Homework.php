<?php

namespace Topxia\Api\Resource;

use Silex\Application;
use AppBundle\Common\ArrayToolkit;
use Symfony\Component\HttpFoundation\Request;

class Homework extends BaseResource
{
    public function get(Application $app, Request $request, $id)
    {
        $idType = $request->query->get('_idType');
        if ('lesson' == $idType) {
            $task = $this->getTaskService()->getTask($id);
            $course = $this->getCourseService()->getCourse($task['courseId']);

            if (!$course['isDefault']) {
                return $this->error('404', '该作业不存在!');
            }
            
            //只为兼容移动端学习引擎2.0以前的版本，之后需要修改
            $conditions = array(
                'categoryId' => $task['categoryId'],
                'status' => 'published',
                'type' => 'homework',
            );
            $homeworkTasks = $this->getTaskService()->searchTasks($conditions, null, 0, 1);
            if (!$homeworkTasks) {
                return $this->error('404', '该作业不存在!');
            }
            $homeworkTask = $homeworkTasks[0];

            $activity = $this->getActivityService()->getActivity($homeworkTask['activityId']);
            $homework = $this->getTestpaperService()->getTestpaperByIdAndType($activity['mediaId'], $activity['mediaType']);
        } else {
            $homework = $this->getTestpaperService()->getTestpaperByIdAndType($id, 'homework');
        }

        if (empty($homework)) {
            return $this->error('404', '该作业不存在!');
        }

        $canTakeCourse = $this->getCourseService()->canTakeCourse($homework['courseId']);
        if (!$canTakeCourse) {
            return $this->error('500', '无权限访问!');
        }

        $course = $this->getCourseService()->getCourse($homework['courseId']);
        $homework['courseTitle'] = $course['title'];
        $homework['lessonTitle'] = $homework['name'];
        $homework['lessonId'] = $id;

        if ('lesson' != $idType) {
            $items = $this->getTestpaperService()->findItemsByTestId($homework['id']);
            $indexdItems = ArrayToolkit::column($items, 'questionId');
            $questions = $this->getQuestionService()->findQuestionsByIds($indexdItems);
            $homework['items'] = $this->filterItem($questions, null, 0, 0);
        }

        return $this->filter($homework);
    }

    public function result(Application $app, Request $request, $id)
    {
        $currentUser = $this->getCurrentUser();
        $homeworkResult = $this->getTestpaperService()->getTestpaperResult($id);

        if (empty($homeworkResult)) {
            return $this->error('404', '作业结果不存在！');
        }

        $activity = $this->getActivityService()->getActivity($homeworkResult['lessonId']);
        if (empty($activity)) {
            return $this->error('404', '作业任务不存在！');
        }

        $homework = $this->getTestpaperService()->getTestpaperByIdAndType($homeworkResult['testId'], $activity['mediaType']);

        if (empty($homework)) {
            return $this->error('404', '作业不存在！');
        }

        $canTakeCourse = $this->getCourseService()->canTakeCourse($homework['courseId']);
        if (!$canTakeCourse) {
            return $this->error('500', '无权限访问!');
        }

        $canCheckHomework = $this->getTestpaperService()->canLookTestpaper($homeworkResult['id']);
        if (empty($currentUser) || (!$canCheckHomework && $homeworkResult['userId'] != $currentUser['id'])) {
            return $this->error('500', '不能查看该作业结果');
        }

        if ($homeworkResult['status'] != 'finished') {
            return $this->error('500', '作业还未批阅');
        }

        $course = $this->getCourseService()->getCourse($homework['courseId']);
        $homework['courseTitle'] = $course['title'];
        $homework['lessonTitle'] = $homework['name'];

        $items = $this->getTestpaperService()->findItemsByTestId($homework['id']);
        $indexdItems = ArrayToolkit::column($items, 'questionId');
        $questions = $this->getQuestionService()->findQuestionsByIds($indexdItems);

        $itemSetResults = $this->getTestpaperService()->findItemResultsByResultId($homeworkResult['id']);
        $itemSetResults = ArrayToolkit::index($itemSetResults, 'questionId');
        $homework['items'] = $this->filterItem($questions, $itemSetResults, $homework['id'], $homeworkResult['id']);

        return $this->filter($homework);
    }

    private function filterItem($items, $itemSetResults,$homeworkId, $resultId)
    {
        $newItmes = array();
        $materialMap = array();
        foreach ($items as $item) {
            $item = ArrayToolkit::parts($item, array('id', 'type', 'stem', 'answer', 'analysis', 'metas', 'difficulty', 'parentId'));
            if (empty($item['metas'])) {
                $item['metas'] = array();
            }
            if (isset($item['metas']['choices'])) {
                $metas = array_values($item['metas']['choices']);
                $item['metas'] = $metas;
            }

            $item['answer'] = $this->filterAnswer($item, $itemSetResults);

            if ('material' == $item['type']) {
                $materialMap[$item['id']] = array();
            }

            if ($itemSetResults && !empty($itemSetResults[$item['id']])) {
                $item['result'] = $itemSetResults[$item['id']];
            } else {
                $item['result'] = array(
                    'id' => '0',
                    'itemId' => '0',
                    'testId' => $homeworkId,
                    'resultId' => $resultId,
                    'answer' => null,
                    'questionId' => $item['id'],
                    'status' => 'noAnswer',
                    'score' => '0',
                    'resultId' => $resultId,
                    'teacherSay' => null,
                    'type' => $item['type']
                );
            }

            $item['stem'] = $this->coverDescription($item['stem']);
            if ($item['parentId'] != 0 && isset($materialMap[$item['parentId']])) {
                $materialMap[$item['parentId']][] = $item;
                continue;
            }

            $item['items'] = array();
            $newItmes[$item['id']] = $item;
        }

        foreach ($materialMap as $id => $material) {
            $newItmes[$id]['items'] = $material;
        }

        return array_values($newItmes);
    }

    public function filter($res)
    {
        $res = ArrayToolkit::parts($res, array('id', 'courseId', 'lessonId', 'description', 'itemCount', 'items', 'courseTitle', 'lessonTitle'));

        return $res;
    }

    private function filterAnswer($item, $itemSetResults)
    {
        if (empty($itemSetResults)) {
            if ('fill' == $item['type']) {
                return array_map(function ($answer) {
                    return '';
                }, $item['answer']);
            }

            return;
        }

        return $this->coverAnswer($item['answer']);
    }

    private function coverAnswer($answer)
    {
        if (is_array($answer)) {
            $answer = array_map(function ($answerValue) {
                if (is_array($answerValue)) {
                    return implode('|', $answerValue);
                }

                return $answerValue;
            }, $answer);

            return $answer;
        }

        return array();
    }

    private function coverDescription($stem)
    {
        $ext = $this;
        $stem = preg_replace_callback('/\[image\](.*?)\[\/image\]/i', function ($matches) use ($ext) {
            $url = $ext->getFileUrl($matches[1]);

            return "<img src='{$url}' />";
        }, $stem);

        return $stem;
    }

    protected function canCheckHomework($homework)
    {
        try {
            $this->getCourseService()->tryManageCourse($homework['courseId']);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    protected function getQuestionService()
    {
        return $this->getServiceKernel()->createService('Question:QuestionService');
    }

    protected function getTestpaperService()
    {
        return $this->getServiceKernel()->createService('Testpaper:TestpaperService');
    }

    protected function getCourseService()
    {
        return $this->getServiceKernel()->createService('Course:CourseService');
    }

    protected function getTaskService()
    {
        return $this->getServiceKernel()->createService('Task:TaskService');
    }

    protected function getActivityService()
    {
        return $this->getServiceKernel()->createService('Activity:ActivityService');
    }
}
