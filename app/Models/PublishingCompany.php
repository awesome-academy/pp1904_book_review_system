<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PublishingCompany;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Book;

class PublishingCompany extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function books()
    {
        return $this->hasMany(Book::class, 'publishing_company_id');
    }
}
