<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PublishingCompany;

class PublishingCompany extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    public function books()
    {
        return $this->hasMany(Book::class, 'publishing_company_id');
    }
}
