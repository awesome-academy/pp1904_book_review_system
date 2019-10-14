<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\CommentInterface as CommentInterface;
use App\Models\Comment;
use App\Models\ReportDetail;
use Illuminate\Support\Facades\Auth;

class CommentRepositoryEloquent implements CommentInterface
{
    public function find($id)
    {
        return Comment::whereId($id);
    }

    public function delete($id)
    {
        return Comment::whereId($id)->delete();
    }

    public function create($request)
    {

        return Comment::create([
            'post_id' => $request->get('post_id'),
            'content' => $request->get('content'),
            'post_type' => $request->get('post_type'),
            'user_id' => Auth::user()->id,
            'parent_id' => isset($request->parent_id) ? $request->get('parent_id') : '0',
        ]);
    }

    public function update($request)
    {
        return Comment::whereId($request->get('comment_id'))->update([
            'content' => $request->get('content'),
        ]);
    }

    public function report($request)
    {
        return ReportDetail::create([
            'user_id' => Auth::user()->id,
            'report_id' => $request->get('report_id'),
            'content' => $request->get('content'),
            'comment_id' => $request->get('comment_id'),
        ]);
    }
}
