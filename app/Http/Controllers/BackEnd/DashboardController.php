<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Examination;
use App\Models\Job;
use App\Models\JobDescription;
use App\Models\order;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class DashboardController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        $descriptions = JobDescription::all();
        $candidates = Candidate::all();
        $transactions = order::all();
        $examinations = Examination::all();
        return view('BackEnd.dashboard', compact('jobs','descriptions','candidates','transactions','examinations'));
    }
}
