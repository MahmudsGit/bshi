<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable=[
        'job_id',
        'candidate_id',
        'amount',
        'payment_via',
        'payment_status',
        'reviewed_by',
    ];
}
