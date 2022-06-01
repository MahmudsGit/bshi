<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examination extends Model
{
    use HasFactory;

    protected $fillable = [
      'job_id',
      'exam_date',
      'exam_time',
      'admit',
    ];

    public function Job()
    {
        return $this->belongsTo(Job::class);
    }
}
