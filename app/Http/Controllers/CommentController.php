<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFormRequest;
use App\Models\Comment;
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
}
