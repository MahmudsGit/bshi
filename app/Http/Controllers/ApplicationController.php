<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function application(){
        $jobs = Job::all();
        return view('frontend.application', compact('jobs'));
    }
    public function showForm(){
        return view('frontend.form');
    }
}
