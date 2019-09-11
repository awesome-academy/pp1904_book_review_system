<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FavoriteDetail;
use App\Models\Comment;
use App\Models\Rate;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'user_id',
        'image',
        'slug',
        'title',
        'rate_average',
        'user_rate_total',
        'content',
        'short_desc',
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

    public function scopeCreateBlog($query, $request, $user_id)
    {
        $image = $request->file('image');
        $name = Str::slug($request->get('title'), '-').'_'.time();
        $folder = 'img/blog/';
        $path = $folder . $name. '.' . $image->getClientOriginalExtension();
        $request->file('image')->move($folder, $name.'.'.$image->getClientOriginalExtension());

        return $query->create([
            'user_id' => $user_id,
            'slug' => Str::slug($request->get('title'), '-'),
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'image' => $path,
            'short_desc' => $request->get('short_desc'),
            'category_id' => $request->get('category_id'),
        ]);
    }
}
