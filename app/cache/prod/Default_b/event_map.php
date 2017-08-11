<?php return array (
  'article.liked' => 
  array (
    0 => 
    array (
      0 => 'article_article_event_subscriber',
      1 => 'onArticleLike',
    ),
  ),
  'article.delete' => 
  array (
    0 => 
    array (
      0 => 'article_article_event_subscriber',
      1 => 'onArticleDelete',
    ),
    1 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onArticleDelete',
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onArticleDelete',
    ),
  ),
  'article.cancelLike' => 
  array (
    0 => 
    array (
      0 => 'article_article_event_subscriber',
      1 => 'onArticleCancelLike',
    ),
  ),
  'article.post_create' => 
  array (
    0 => 
    array (
      0 => 'article_article_event_subscriber',
      1 => 'onPostCreate',
    ),
  ),
  'article.post_delete' => 
  array (
    0 => 
    array (
      0 => 'article_article_event_subscriber',
      1 => 'onPostDelete',
    ),
  ),
  'live.replay.generate' => 
  array (
    0 => 
    array (
      0 => 'activity_live_replay_event_subscriber',
      1 => 'onLiveReplayGenerate',
    ),
    1 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onLiveReplayGenerate',
    ),
  ),
  'classroom.update' => 
  array (
    0 => 
    array (
      0 => 'course_classroom_course_expiry_date_event_subscriber',
      1 => 'onClassroomUpdate',
    ),
    1 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onClassroomUpdate',
    ),
    2 => 
    array (
      0 => 'classroom_event_subscriber',
      1 => 'onClassroomUpdate',
    ),
  ),
  'classroom.member.deadline.update' => 
  array (
    0 => 
    array (
      0 => 'course_classroom_course_expiry_date_event_subscriber',
      1 => 'onClassroomMemberDeadlineUpdate',
    ),
  ),
  'coupon.use' => 
  array (
    0 => 
    array (
      0 => 'card_event_subscriber',
      1 => 'onCouponUsed',
    ),
  ),
  'order.service.paid' => 
  array (
    0 => 
    array (
      0 => 'card_event_subscriber',
      1 => 'onOrderPaid',
    ),
    1 => 
    array (
      0 => 'orderrefererlog_event_subscriber',
      1 => 'onOrderPaid',
    ),
  ),
  'user.register' => 
  array (
    0 => 
    array (
      0 => 'card_event_subscriber',
      1 => 'onUserRegister',
    ),
  ),
  'course.note.create' => 
  array (
    0 => 
    array (
      0 => 'course_note_event_subscriber',
      1 => 'onCourseNoteCreate',
    ),
  ),
  'course.note.update' => 
  array (
    0 => 
    array (
      0 => 'course_note_event_subscriber',
      1 => 'onCourseNoteUpdate',
    ),
  ),
  'course.note.delete' => 
  array (
    0 => 
    array (
      0 => 'course_note_event_subscriber',
      1 => 'onCourseNoteDelete',
    ),
  ),
  'course.note.liked' => 
  array (
    0 => 
    array (
      0 => 'course_note_event_subscriber',
      1 => 'onCourseNoteLike',
    ),
  ),
  'course.note.cancelLike' => 
  array (
    0 => 
    array (
      0 => 'course_note_event_subscriber',
      1 => 'onCourseNoteCancelLike',
    ),
  ),
  'course.join' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onCourseJoin',
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseJoin',
    ),
  ),
  'course.quit' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onMemberDelete',
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseQuit',
    ),
  ),
  'course.view' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onCourseView',
    ),
  ),
  'task.view' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onTaskView',
    ),
  ),
  'classroom.course.join' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onClassroomCourseJoin',
    ),
  ),
  'classroom.course.copy' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onClassroomCourseCopy',
    ),
  ),
  'course.task.delete' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onTaskDelete',
    ),
    1 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onTaskDelete',
    ),
    2 => 
    array (
      0 => 'task_sync_event_subscriber',
      1 => 'onCourseTaskDelete',
    ),
    3 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseLessonDelete',
    ),
    4 => 
    array (
      0 => 'sms_task_event_subscriber',
      1 => 'onTaskDelete',
    ),
  ),
  'course.task.finish' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onTaskFinish',
    ),
    1 => 
    array (
      0 => 'status_event_subscriber',
      1 => 'onCourseTaskFinish',
    ),
    2 => 
    array (
      0 => 'classroom_member_event_subscriber',
      1 => 'onTaskFinish',
    ),
  ),
  'content.delete' => 
  array (
    0 => 
    array (
      0 => 'content_event_subscriber',
      1 => 'onContentDelete',
    ),
  ),
  'content.create' => 
  array (
    0 => 
    array (
      0 => 'content_event_subscriber',
      1 => 'onContentCreate',
    ),
  ),
  'content.update' => 
  array (
    0 => 
    array (
      0 => 'content_event_subscriber',
      1 => 'onContentUpdate',
    ),
  ),
  'course.thread.post.create' => 
  array (
    0 => 
    array (
      0 => 'user_course_thread_event_subscriber',
      1 => 'onThreadPostCreate',
    ),
    1 => 
    array (
      0 => 'activity_event_subscriber',
      1 => 'onPostCreate',
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadPostCreate',
    ),
    3 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'incrToken',
    ),
  ),
  'classroom.join' => 
  array (
    0 => 
    array (
      0 => 'user_classroom_event_subscriber',
      1 => 'onClassroomJoin',
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onClassroomJoin',
    ),
  ),
  'classroom.auditor_join' => 
  array (
    0 => 
    array (
      0 => 'user_classroom_event_subscriber',
      1 => 'onClassroomGuest',
    ),
  ),
  'user.registered' => 
  array (
    0 => 
    array (
      0 => 'user_user_event_subscriber',
      1 => 'onUserRegistered',
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onUserCreate',
    ),
  ),
  'user.follow' => 
  array (
    0 => 
    array (
      0 => 'user_user_event_subscriber',
      1 => 'onUserFollowed',
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onUserFollow',
    ),
  ),
  'user.unfollow' => 
  array (
    0 => 
    array (
      0 => 'user_user_event_subscriber',
      1 => 'onUserUnfollowed',
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onUserUnFollow',
    ),
  ),
  'admin.operate.vip_member' => 
  array (
    0 => 
    array (
      0 => 'user_vip_member_event_subscriber',
      1 => 'onOperateVipMember',
    ),
  ),
  'activity.start' => 
  array (
    0 => 
    array (
      0 => 'task_event_subscriber',
      1 => 'onActivityStart',
    ),
    1 => 
    array (
      0 => 'video_task_event_subscriber',
      1 => 'onVideoView',
    ),
  ),
  'activity.doing' => 
  array (
    0 => 
    array (
      0 => 'task_event_subscriber',
      1 => 'onActivityDoing',
    ),
  ),
  'article.create' => 
  array (
    0 => 
    array (
      0 => 'taxonomy_article_event_subscriber',
      1 => 'onArticleCreate',
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onArticleCreate',
    ),
  ),
  'article.update' => 
  array (
    0 => 
    array (
      0 => 'taxonomy_article_event_subscriber',
      1 => 'onArticleUpdate',
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onArticleUpdate',
    ),
  ),
  'course.thread.create' => 
  array (
    0 => 
    array (
      0 => 'activity_event_subscriber',
      1 => 'onThreadCreate',
    ),
    1 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onCourseThreadChange',
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadCreate',
    ),
    3 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'incrToken',
    ),
  ),
  'course.task.create' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onTaskCreate',
    ),
    1 => 
    array (
      0 => 'task_sync_event_subscriber',
      1 => 'onCourseTaskCreate',
    ),
  ),
  'course.task.update' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onTaskUpdate',
    ),
    1 => 
    array (
      0 => 'task_sync_event_subscriber',
      1 => 'onCourseTaskUpdate',
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseLessonUpdate',
    ),
    3 => 
    array (
      0 => 'sms_task_event_subscriber',
      1 => 'onTaskUpdate',
    ),
  ),
  'course.task.publish' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onPublishTaskNumberChange',
    ),
    1 => 
    array (
      0 => 'task_sync_event_subscriber',
      1 => 'onCourseTaskPublish',
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseLessonCreate',
    ),
    3 => 
    array (
      0 => 'sms_task_event_subscriber',
      1 => 'onTaskPublish',
    ),
  ),
  'course.task.unpublish' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onPublishTaskNumberChange',
    ),
    1 => 
    array (
      0 => 'task_sync_event_subscriber',
      1 => 'onCourseTaskUnpublish',
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseLessonDelete',
    ),
    3 => 
    array (
      0 => 'sms_task_event_subscriber',
      1 => 'onTaskUnpublish',
    ),
  ),
  'course.thread.delete' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onCourseThreadChange',
    ),
    1 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onCourseThreadDelete',
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadDelete',
    ),
  ),
  'course.review.add' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onReviewNumberChange',
    ),
    1 => 
    array (
      0 => 'course_set_statistics_event_subscriber',
      1 => 'onReviewNumberChange',
    ),
  ),
  'course.review.update' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onReviewNumberChange',
    ),
    1 => 
    array (
      0 => 'course_set_statistics_event_subscriber',
      1 => 'onReviewNumberChange',
    ),
  ),
  'course.review.delete' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onReviewNumberChange',
    ),
    1 => 
    array (
      0 => 'course_set_statistics_event_subscriber',
      1 => 'onReviewNumberChange',
    ),
  ),
  'course.marketing.update' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onCourseMarketingChange',
    ),
  ),
  'course.publish' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onCourseStatusChange',
    ),
  ),
  'course.close' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onCourseStatusChange',
    ),
  ),
  'course.create' => 
  array (
    0 => 
    array (
      0 => 'course_set_teacher_event_subscriber',
      1 => 'calculateCourseTeacher',
    ),
  ),
  'course.delete' => 
  array (
    0 => 
    array (
      0 => 'course_set_teacher_event_subscriber',
      1 => 'calculateCourseTeacher',
    ),
    1 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onCourseDelete',
    ),
    2 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onCourseDelete',
    ),
    3 => 
    array (
      0 => 'conversation_event_subscriber',
      1 => 'onCourseDelete',
    ),
  ),
  'course.teachers.update' => 
  array (
    0 => 
    array (
      0 => 'course_set_teacher_event_subscriber',
      1 => 'calculateCourseTeacher',
    ),
    1 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseTeachersChange',
    ),
  ),
  'courseSet.maxRate.update' => 
  array (
    0 => 
    array (
      0 => 'course_set_event_subscriber',
      1 => 'onCourseSetMaxRateUpdate',
    ),
  ),
  'courseSet.recommend' => 
  array (
    0 => 
    array (
      0 => 'course_set_event_subscriber',
      1 => 'onCourseSetRecommend',
    ),
  ),
  'courseSet.recommend.cancel' => 
  array (
    0 => 
    array (
      0 => 'course_set_event_subscriber',
      1 => 'onCourseSetCancelRecommend',
    ),
  ),
  'course-set.update' => 
  array (
    0 => 
    array (
      0 => 'course_set_event_subscriber',
      1 => 'onCourseSetUpdate',
    ),
    1 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseSetUpdate',
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseUpdate',
    ),
    3 => 
    array (
      0 => 'tag_course_set_event_subscriber',
      1 => 'onCourseSetUpdate',
    ),
  ),
  'question.create' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onQuestionCreate',
    ),
    1 => 
    array (
      0 => 'question_sync_event_subscriber',
      1 => 'onQuestionCreate',
    ),
    2 => 
    array (
      0 => 'question_event_subscriber',
      1 => 'onQuestionCreate',
    ),
  ),
  'question.update' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onQuestionUpdate',
    ),
    1 => 
    array (
      0 => 'question_sync_event_subscriber',
      1 => 'onQuestionUpdate',
    ),
    2 => 
    array (
      0 => 'question_event_subscriber',
      1 => 'onQuestionUpdate',
    ),
  ),
  'question.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onQuestionDelete',
    ),
    1 => 
    array (
      0 => 'question_sync_event_subscriber',
      1 => 'onQuestionDelete',
    ),
    2 => 
    array (
      0 => 'question_event_subscriber',
      1 => 'onQuestionDelete',
    ),
  ),
  'course.lesson.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onCourseLessonDelete',
    ),
  ),
  'course.material.create' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onMaterialCreate',
    ),
    1 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onMaterialCreate',
    ),
    2 => 
    array (
      0 => 'course_material_event_subscriber',
      1 => 'onCourseMaterialCreate',
    ),
  ),
  'course.material.update' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onMaterialUpdate',
    ),
    1 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseMaterialUpdate',
    ),
    2 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onMaterialUpdate',
    ),
    3 => 
    array (
      0 => 'course_material_event_subscriber',
      1 => 'onCourseMaterialUpdate',
    ),
  ),
  'course.material.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onMaterialDelete',
    ),
    1 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseMaterialDelete',
    ),
    2 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onMaterialDelete',
    ),
    3 => 
    array (
      0 => 'course_material_event_subscriber',
      1 => 'onCourseMaterialDelete',
    ),
  ),
  'open.course.lesson.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onOpenCourseLessonDelete',
    ),
    1 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onOpenCourseLessonDelete',
    ),
    2 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onLessonDelete',
    ),
  ),
  'open.course.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onOpenCourseDelete',
    ),
    1 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onOpenCourseDelete',
    ),
    2 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onCourseDelete',
    ),
  ),
  'group.thread.post.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onGroupThreadPostDelete',
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onGroupThreadPostDelete',
    ),
  ),
  'group.thread.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onGroupThreadDelete',
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onGroupThreadDelete',
    ),
  ),
  'course.thread.post.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onCourseThreadPostDelete',
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadPostDelete',
    ),
  ),
  'thread.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onThreadDelete',
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onThreadDelete',
    ),
    2 => 
    array (
      0 => 'thread_event_subscriber',
      1 => 'onThreadDelete',
    ),
  ),
  'thread.post.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onThreadPostDelete',
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onThreadPostDelete',
    ),
    2 => 
    array (
      0 => 'thread_event_subscriber',
      1 => 'onPostDelete',
    ),
  ),
  'course.update' => 
  array (
    0 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseUpdate',
    ),
  ),
  'course.chapter.create' => 
  array (
    0 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseChapterCreate',
    ),
  ),
  'course.chapter.update' => 
  array (
    0 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseChapterUpdate',
    ),
  ),
  'course.chapter.delete' => 
  array (
    0 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseChapterDelete',
    ),
  ),
  'exam.update' => 
  array (
    0 => 
    array (
      0 => 'testpaper_sync_event_subscriber',
      1 => 'onTestpaperUpdate',
    ),
  ),
  'exam.delete' => 
  array (
    0 => 
    array (
      0 => 'testpaper_sync_event_subscriber',
      1 => 'onTestpaperDelete',
    ),
  ),
  'testpaper.item.create' => 
  array (
    0 => 
    array (
      0 => 'testpaper_sync_event_subscriber',
      1 => 'onTestpaperItemCreate',
    ),
  ),
  'testpaper.item.update' => 
  array (
    0 => 
    array (
      0 => 'testpaper_sync_event_subscriber',
      1 => 'onTestpaperItemUpdate',
    ),
  ),
  'testpaper.item.delete' => 
  array (
    0 => 
    array (
      0 => 'testpaper_sync_event_subscriber',
      1 => 'onTestpaperItemDelete',
    ),
  ),
  'course-set.delete' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onCourseSetDelete',
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseDelete',
    ),
  ),
  'course.activity.create' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onCourseActivityCreate',
    ),
  ),
  'course.activity.delete' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onCourseActivityDelete',
    ),
  ),
  'course.activity.update' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onCourseActivityUpdate',
    ),
  ),
  'upload.file.delete' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onUploadFileDelete',
    ),
  ),
  'upload.file.finish' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onUploadFileFinish',
    ),
  ),
  'open.course.lesson.create' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onOpenCourseLessonCreate',
    ),
    1 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onLessonCreate',
    ),
  ),
  'open.course.lesson.update' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onOpenCourseLessonUpdate',
    ),
  ),
  'open.course.lesson.generate.video.replay' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onLiveOpenFileReplay',
    ),
  ),
  'classroom.delete' => 
  array (
    0 => 
    array (
      0 => 'conversation_event_subscriber',
      1 => 'onClassroomDelete',
    ),
    1 => 
    array (
      0 => 'classroom_event_subscriber',
      1 => 'onClassroomDelete',
    ),
  ),
  'user.unlock' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onUserCreate',
    ),
  ),
  'user.lock' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onUserDelete',
    ),
  ),
  'user.update' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onUserUpdate',
    ),
  ),
  'user.change_nickname' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onUserUpdate',
    ),
  ),
  'classroom.quit' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onClassroomQuit',
    ),
  ),
  'article.publish' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onArticleCreate',
    ),
  ),
  'article.trash' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onArticleDelete',
    ),
  ),
  'article.unpublish' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onArticleDelete',
    ),
  ),
  'thread.create' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onThreadCreate',
    ),
    1 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'incrToken',
    ),
    2 => 
    array (
      0 => 'thread_event_subscriber',
      1 => 'onThreadCreate',
    ),
  ),
  'thread.update' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onThreadUpdate',
    ),
  ),
  'course.thread.update' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadUpdate',
    ),
  ),
  'group.thread.create' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onGroupThreadCreate',
    ),
    1 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'incrToken',
    ),
  ),
  'group.thread.open' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onGroupThreadOpen',
    ),
  ),
  'group.thread.update' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onGroupThreadUpdate',
    ),
  ),
  'thread.post.create' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onThreadPostCreate',
    ),
    1 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'incrToken',
    ),
    2 => 
    array (
      0 => 'thread_event_subscriber',
      1 => 'onPostCreate',
    ),
  ),
  'course.thread.post.update' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadPostUpdate',
    ),
  ),
  'group.thread.post.create' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onGroupThreadPostCreate',
    ),
    1 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'incrToken',
    ),
  ),
  'announcement.create' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onAnnouncementCreate',
    ),
  ),
  'course-set.publish' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseCreate',
    ),
  ),
  'course-set.close' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseDelete',
    ),
  ),
  'open.course.update' => 
  array (
    0 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onCourseUpdate',
    ),
  ),
  'open.course.member.create' => 
  array (
    0 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onMemberCreate',
    ),
  ),
  'order.service.created' => 
  array (
    0 => 
    array (
      0 => 'orderrefererlog_event_subscriber',
      1 => 'onOrderCreated',
    ),
  ),
  'thread.before_create' => 
  array (
    0 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'before',
    ),
  ),
  'thread.post.before_create' => 
  array (
    0 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'before',
    ),
  ),
  'course.thread.before_create' => 
  array (
    0 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'before',
    ),
  ),
  'course.thread.post.before_create' => 
  array (
    0 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'before',
    ),
  ),
  'group.thread.before_create' => 
  array (
    0 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'before',
    ),
  ),
  'group.thread.post.before_create' => 
  array (
    0 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'before',
    ),
  ),
  'exam.reviewed' => 
  array (
    0 => 
    array (
      0 => 'sms_testpaper_event_subscriber',
      1 => 'onExamReviewed',
    ),
    1 => 
    array (
      0 => 'testpaper_event_subscriber',
      1 => 'onTestpaperReviewd',
    ),
    2 => 
    array (
      0 => 'status_event_subscriber',
      1 => 'onTestpaperReviewed',
    ),
  ),
  'order.pay.success' => 
  array (
    0 => 
    array (
      0 => 'sms_pay_center_event_subscriber',
      1 => 'onPaySuccess',
    ),
  ),
  'thread.nice' => 
  array (
    0 => 
    array (
      0 => 'thread_event_subscriber',
      1 => 'onThreadNice',
    ),
  ),
  'thread.sticky' => 
  array (
    0 => 
    array (
      0 => 'thread_event_subscriber',
      1 => 'onThreadSticky',
    ),
  ),
  'thread.post.vote' => 
  array (
    0 => 
    array (
      0 => 'thread_event_subscriber',
      1 => 'onPostVote',
    ),
  ),
  'classroom.course.create' => 
  array (
    0 => 
    array (
      0 => 'classroom_event_subscriber',
      1 => 'onClassroomCourseChange',
    ),
  ),
  'classroom.course.delete' => 
  array (
    0 => 
    array (
      0 => 'classroom_event_subscriber',
      1 => 'onClassroomCourseChange',
    ),
  ),
  'classroom.course.update' => 
  array (
    0 => 
    array (
      0 => 'classroom_event_subscriber',
      1 => 'onClassroomCourseChange',
    ),
  ),
  'classReview.add' => 
  array (
    0 => 
    array (
      0 => 'classroom_event_subscriber',
      1 => 'onReviewCreate',
    ),
  ),
  'exam.finish' => 
  array (
    0 => 
    array (
      0 => 'testpaper_event_subscriber',
      1 => 'onTestpaperFinish',
    ),
  ),
  'course.task.start' => 
  array (
    0 => 
    array (
      0 => 'status_event_subscriber',
      1 => 'onCourseTaskStart',
    ),
  ),
);