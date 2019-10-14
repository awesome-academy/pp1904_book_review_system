<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ReportInterface as ReportInterface;
use App\Models\ReportDetail;
use Illuminate\Support\Facades\DB;

class ReportRepositoryEloquent implements ReportInterface
{
    public function getAll()
    {
        return ReportDetail::whereNull('deleted_at')
                ->groupBy('comment_id')
                ->select('*', DB::raw('count(comment_id) as total'))
                ->with(['report', 'user', 'comment'])->get();
    }

    public function show($comment_id)
    {
        return ReportDetail::whereCommentId($comment_id)->with(['report', 'user', 'comment'])->get();
    }

    public function deleteByCommentId($comment_id)
    {
        return ReportDetail::whereCommentId($comment_id)->delete();
    }
}
