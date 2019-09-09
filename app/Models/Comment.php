<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Comment extends Model
{
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

    public function scopeCreateComment($query, $request, $user_id)
    {
        return $query->create([
            'post_id' => $request->get('post_id'),
            'content' => $request->get('content'),
            'post_type' => $request->get('post_type'),
            'user_id' => $user_id,
            'parent_id' => isset($request->parent_id) ? $request->get('parent_id') : '0',
        ]);
    }

    public function scopeEditComment($query, $request)
    {
        return $query->whereId($request->get('comment_id'))->update([
            'content' => $request->get('content'),
        ]);
    }
}
