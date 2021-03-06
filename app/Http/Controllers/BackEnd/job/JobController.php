<?php

namespace App\Http\Controllers\BackEnd\job;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        return view('BackEnd.job.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'job_name' =>'required',
           'open_date' =>'required',
           'expired_date' =>'required|',
           'minimum_age' =>'required|integer',
           'maximum_age' =>'required|integer',
           'quota_age' =>'required|integer',
           'registration_fee' =>'required|integer',
        ]);

        $job = new Job();
        $job->job_name = $request->job_name;
        $job->open_date = Carbon::createFromFormat('m/d/Y', $request->open_date)->format('Y/m/d');
        $job->expired_date = Carbon::createFromFormat('m/d/Y', $request->expired_date)->format('Y/m/d');
        $job->minimum_age = $request->minimum_age;
        $job->maximum_age = $request->maximum_age;
        $job->quota_age = $request->quota_age;
        $job->registration_fee = $request->registration_fee;
        $job->save();

        return redirect()->route('job.create')->with('alert-green', 'Job Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        return view('BackEnd.job.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'job_name' =>'required',
            'open_date' =>'required',
            'expired_date' =>'required|',
            'minimum_age' =>'required|integer',
            'maximum_age' =>'required|integer',
            'quota_age' =>'required|integer',
            'registration_fee' =>'required',
        ]);

        $job = Job::find($id);
        $job->job_name = $request->job_name;
        $job->open_date =Carbon::createFromFormat('m/d/Y', $request->open_date)->format('Y/m/d');
        $job->expired_date = Carbon::createFromFormat('m/d/Y', $request->expired_date)->format('Y/m/d');
        $job->minimum_age = $request->minimum_age;
        $job->maximum_age = $request->maximum_age;
        $job->quota_age = $request->quota_age;
        $job->registration_fee = $request->registration_fee;
        $job->save();

        return redirect()->route('job.edit',$id)->with('alert-green', 'Job Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();
        return redirect()->back()->with('alert-green', 'Job Delete Successfully');
    }
}
