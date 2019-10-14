<?php

namespace App\Repositories\Contracts;

interface ReportInterface {

    public function getAll();

    public function show($comment_id);

    public function deleteByCommentId($comment_id);
}
