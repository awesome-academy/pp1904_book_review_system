<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ReportDetail;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\CommentInterface as CommentInterface;

class ReportDetailController extends Controller
{
    protected $commentRepository;

    public function __construct(CommentInterface $comment)
    {
        $this->commentRepository = $comment;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report_details = ReportDetail::whereNull('deleted_at')
                ->groupBy('comment_id')
                ->select('*', DB::raw('count(comment_id) as total'))
                ->with(['report', 'user', 'comment'])->get();

        return view('admin.reports.index', compact('report_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($comment_id)
    {
        $report_details = ReportDetail::whereCommentId($comment_id)->with(['report', 'user', 'comment'])->get();

        return view('admin.reports.show', compact('report_details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($comment_id)
    {
        $this->commentRepository->delete
        $report_details = ReportDetail::whereCommentId($comment_id);
        $report_details->delete();

        return redirect('/manager/reportdetails');
    }

}
