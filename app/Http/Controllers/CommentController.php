<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFormRequest;
use Illuminate\Http\Request;
use App\Repositories\Contracts\CommentInterface as CommentInterface;

class CommentController extends Controller
{
    protected $commentRepository;

    public function __construct(CommentInterface $comment)
    {
        $this->commentRepository = $comment;
    }

    public function newComment(CommentFormRequest $request)
    {
        $this->commentRepository->create($request);

        return redirect()->back()->with('status', 'Your comment has been created!');
    }

    public function editComment(CommentFormRequest $request)
    {
        $this->commentRepository->update($request);

        return redirect()->back();
    }

    public function deleteComment(Request $request)
    {
        $this->commentRepository->delete($request->get('comment_id'));

        return redirect()->back();
    }

    public function reportComment(Request $request)
    {
        $this->commentRepository->report($request);

        return redirect()->back();
    }
}
