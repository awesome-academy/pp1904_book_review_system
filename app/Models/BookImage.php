<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookImage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'book_id',
        'image',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function scopeAddImage($query, $book_id, $image)
    {
        return $query->create([
            'book_id' => $book_id,
            'image' => $image,
        ]);
    }
}
