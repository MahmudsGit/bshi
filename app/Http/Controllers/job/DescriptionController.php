<?php

namespace App\Http\Controllers\job;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobDescription;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        return view('backend.job.description.description',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNew($id)
    {
        $jobDescriptions = JobDescription::where('job_id', $id)->get();
        $job = Job::find($id);
        return view('backend.job.description.create',compact('job','jobDescriptions'));
    }
    public function view($id)
    {
        $jobDescriptions = JobDescription::where('job_id', $id)->get();
        $job = Job::find($id);
        return view('backend.job.description.index',compact('job','jobDescriptions'));

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
           'description.*'=>'required',
        ]);

        $allDescription = $request->description;

        if ($allDescription){
            for ($i=0; $i<count($allDescription); $i++){
                $description = new JobDescription();
                $description->description = $allDescription[$i];
                $description->job_id = $request->job_id;
                $description->save();
            }
            return redirect()->back()->with('alert-green', 'description Create Successfully');
        }
        return redirect()->back();

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
        $jobDescriptions = JobDescription::find($id);
        return view('backend.job.description.edit',compact('jobDescriptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateDescription(Request $request, $id)
    {
        $this->validate($request,[
            'description'=>'required',
        ]);

        $description = JobDescription::find($id);
        $description->description = $request->description;
        $description->job_id = $request->job_id;
        $description->save();

        return redirect()->back()->with('alert-green', 'description Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobDescription = JobDescription::find($id);
        $jobDescription->delete();
        return redirect()->back()->with('alert-green', 'Job Description Delete Successfully');
    }
}
