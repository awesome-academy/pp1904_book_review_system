<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ReportDetail;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'content',
        'post_id',
        'post_type',
        'parent_id',
    ];

    public function post()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reportDetails()
    {
        return $this->hasMany(ReportDetail::class, 'comment_id');
    }

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function child()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
