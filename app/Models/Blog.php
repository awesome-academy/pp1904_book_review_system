<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'user_id',
        'book_id',
        'slug',
        'title',
        'rate_average',
        'user_rate_total',
        'content',
    ];

    public function favoriteDetail()
    {
        return $this->belongsTo(FavoriteDetail::class, 'book_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'post');
    }

    public function rates()
    {
        return $this->morphMany(Rate::class, 'post');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'book_id');
    }
}
