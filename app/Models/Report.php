<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ReportDetail;

class Report extends Model
{
    protected $fillable = [
        'issue',
    ];

    public function reportDetails()
    {
        return $this->hasMany(ReportDetail::class, 'report_id');
    }
}
