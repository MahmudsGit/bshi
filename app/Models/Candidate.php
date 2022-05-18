<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
            'full_name_bangla',
            'full_name_english',
            'position_name',
            'job_id',
            'clo_name_bangla',
            'clo_name_english',
            'mother_name_bangla',
            'mother_name_english',
            'birth_date',
            'age',
            'nid_number',
            'parmanet_address_bangla',
            'parmanet_address_english',
            'contact_address_bangla',
            'contact_address_english',
            'moblie_number',
            'email',
            'married_status',
            'religion',
            'nationality',
            'sex',
            'employment',
            'ssc',
            'hsc',
            'diploma',
            'bsc',
            'others_degree',
            'experience',
            'reg_number',
            'reg_date',
            'reference_1',
            'reference_2',
    ];
    public function JobApply()
    {
        return $this->belongsTo(JobApply::class);
    }

}
