<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FavoriteDetail;
use App\Models\Comment;
use App\Models\Rate;
use App\Models\Blog;
use App\Models\User;

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

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
