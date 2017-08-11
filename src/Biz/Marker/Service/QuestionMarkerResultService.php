<?php

namespace Biz\Marker\Service;

interface QuestionMarkerResultService
{
    public function getQuestionMarkerResult($id);

    public function addQuestionMarkerResult($result);

    public function updateQuestionMarkerResult($id, $result);

    public function deleteByQuestionMarkerId($questionMarkerId);

    public function finishCurrentQuestion($markerId, $userId, $questionMarkerId, $answer, $type);

    public function findByUserIdAndMarkerId($userId, $markerId);

    public function findByUserIdAndQuestionMarkerId($userId, $questionMarkerId);
}
