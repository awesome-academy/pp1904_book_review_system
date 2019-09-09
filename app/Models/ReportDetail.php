<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Report;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReportDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'report_id',
        'content',
        'comment_id',
        'user_id',
    ];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function scopeCreateReport($query, $request, $user_id)
    {
        return $query->create([
            'user_id' => $user_id,
            'report_id' => $request->get('report_id'),
            'content' => $request->get('content'),
            'comment_id' => $request->get('comment_id'),
        ]);
    }
}
