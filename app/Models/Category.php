<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class Category extends Model
{
    protected $fillable = [
        'name',
        'id',
    ];

    public function books()
    {
        return $this->hasMany(Book::class, 'category_id');
    }
}
