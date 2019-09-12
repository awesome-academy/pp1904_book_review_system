<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\FavoriteDetail;
class Favorite extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'book_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
     {
         return $this->belongsTo(Book::class);
     }
}
