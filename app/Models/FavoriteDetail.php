<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Favorite;
use App\Models\Book;

class FavoriteDetail extends Model
{
    protected $fillable = [
        'favorite_id',
        'book_id',
    ];

    public function favorite()
    {
        return $this->belongsTo(Favorite::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
