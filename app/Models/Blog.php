<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\FavoriteDetail;
use App\Models\Comment;
use App\Models\Rate;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Blog extends Model
{
    use SoftDeletes, Searchable;

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

    public function toSearchableArray()
    {
      $array = $this->toArray();

      return array('id' => $array['id'],'title' => $array['title']);
    }
}
