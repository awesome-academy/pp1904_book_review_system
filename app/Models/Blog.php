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

    public function scopeUpdateRateAverage($query, $request)
    {
        $blog = Blog::whereId($request->get('post_id'))->firstOrFail();
        $rate_average = $blog->rates()->avg('rate_point');
        $user_rate_total = $blog->rates()->count();

        return $query->whereId($request->get('post_id'))->update([
            'rate_average' => isset($rate_average) ? $rate_average : 0,
            'user_rate_total' => isset($user_rate_total) ? $user_rate_total : 0,
        ]);
    }

    public function scopeBlogSearch($query, $request)
    {
        return $query->where('title', 'like', "%".$request->get('search')."%")->with(['user', 'book']);
    }
}
