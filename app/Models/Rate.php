<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Rate extends Model
{
    protected $fillable = [
        'user_id',
        'rate_point',
        'post_id',
        'post_type',
    ];

    public function post()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
