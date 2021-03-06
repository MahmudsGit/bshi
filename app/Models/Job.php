<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable=[
        'job_name',
        'open_date',
        'expired_date',
        'minimum_age',
        'maximum_age',
        'quota_age',
        'registration_fee',
    ];

    public function jobDescription()
    {
        return $this->hasMany(jobDescription::class);
    }
    public function Candidate()
    {
        return $this->hasMany(Candidate::class);
    }
    public function Examination()
    {
        return $this->hasOne(Examination::class);
    }
}
