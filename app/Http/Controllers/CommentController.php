<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFormRequest;
use App\Models\Comment;
use App\Models\ReportDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function newComment(CommentFormRequest $request)
    {
        $user_id = Auth::user()->id;
        Comment::createComment($request, $user_id);

        return redirect()->back()->with('status', 'Your comment has been created!');
    }

    public function editComment(CommentFormRequest $request)
    {
        Comment::editComment($request);

        return redirect()->back();
    }

    public function deleteComment(Request $request)
    {
        $comment = Comment::whereId($request->get('comment_id'));
        $comment->delete();

        return redirect()->back();
    }

    public function reportComment(Request $request)
    {
        $user_id = Auth::user()->id;
        ReportDetail::createReport($request, $user_id);

        return redirect()->back();
    }
}
