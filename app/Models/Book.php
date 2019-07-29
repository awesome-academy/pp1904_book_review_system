<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FavoriteDetail;
use App\Models\Comment;
use App\Models\Rate;
use App\Models\Blog;

class Book extends Model
{
    protected $fillable = [
        'title',
        'rate_average',
        'user_rate_total',
        'slug',
        'type',
        'detail',
        'image',
        'public_date',
        'author',
        'publishing_company',
    ];

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
}
