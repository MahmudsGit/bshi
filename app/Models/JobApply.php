<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    use HasFactory;

    protected $fillable =[
        'candidate_id',
        'job_id',
        'identification_number',
        'identification_password',
        'payment_status',
        'reviewed_by',
        'status',
    ];
    public function Candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
