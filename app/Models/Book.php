<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FavoriteDetail;
use App\Models\Comment;
use App\Models\Rate;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Book extends Model
{
    protected $fillable = [
        'title',
        'rate_average',
        'user_rate_total',
        'slug',
        'category_id',
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

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'book_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeCreateBook($query, $request)
    {
        return $query->create([
            'category_id' => $request->get('category_id'),
            'title' => $request->get('title'),
            'slug' => Str::slug($request->get('title'), '-'),
            'detail' => $request->get('detail'),
            'image' => $request->get('image'),
            'public_date' => Carbon::parse($request->get('public_date'))->format('Y-m-d'),
            'author' => $request->get('author'),
            'publishing_company' => $request->get('publishing_company'),
        ]);
    }
}
