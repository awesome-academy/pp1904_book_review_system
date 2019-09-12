<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FavoriteDetail;
use App\Models\Comment;
use App\Models\Rate;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Author;
use App\Models\Favorite;
use App\Models\PublishingCompany;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

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
        'rate',
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

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function publishingCompany()
    {
        return $this->belongsTo(PublishingCompany::class);
    }

    public function favoriteDetail()
    {
        return $this->belongsTo(FavoriteDetail::class, 'book_id');
    }

    public function bookImages()
    {
        return $this->hasMany(BookImage::class, 'book_id');
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'book_id');
    }

    public function scopeUpdateRateAverage($query, $request)
    {
        $book = Book::whereId($request->get('post_id'))->firstOrFail();
        $rate_average = $book->rates()->avg('rate_point');
        $user_rate_total = $book->rates()->count();

        return $query->whereId($request->get('post_id'))->update([
            'rate_average' => isset($rate_average) ? $rate_average : 0,
            'user_rate_total' => isset($user_rate_total) ? $user_rate_total : 0,
        ]);
    }

    public function scopeCreateBook($query, $request)
    {
        return $query->create([
            'category_id' => $request->get('category_id'),
            'title' => $request->get('title'),
            'slug' => Str::slug($request->get('title'), '-'),
            'detail' => $request->get('detail'),
            'image' => $request->get('image-1'),
            'public_date' => Carbon::parse($request->get('public_date'))->format('Y-m-d'),
            'author_id' => $request->get('author_id'),
            'publishing_company_id' => $request->get('publishing_company_id'),
        ]);
    }

    public function scopeUpdateBook($query, $request, $slug)
    {
        return $query->whereSlug($slug)->update([
            'category_id' => $request->get('category_id'),
            'title' => $request->get('title'),
            'slug' => Str::slug($request->get('title'), '-'),
            'detail' => $request->get('detail'),
            'image' => $request->get('image-1'),
            'public_date' => Carbon::parse($request->get('public_date'))->format('Y-m-d'),
            'author_id' => $request->get('author_id'),
            'publishing_company_id' => $request->get('publishing_company_id'),
        ]);
    }
}
