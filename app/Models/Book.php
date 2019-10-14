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
use Laravel\Scout\Searchable;

class Book extends Model
{
    use SoftDeletes, Searchable;

    protected $fillable = [
        'title',
        'rate_average',
        'user_rate_total',
        'slug',
        'category_id',
        'detail',
        'image',
        'public_date',
        'author_id',
        'publishing_company_id',
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

    public function toSearchableArray()
    {
      $array = $this->toArray();

      return array('id' => $array['id'],'title' => $array['title']);
    }
}
