<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ReportDetail;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'issue',
    ];

    public function reportDetails()
    {
        return $this->hasMany(ReportDetail::class, 'report_id');
    }
}
