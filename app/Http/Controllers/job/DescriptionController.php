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

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
           'description[]'=>'required',
        ]);

        $allDescription = $request->description;
        $job_id = $request->job_id;

        for ($i=0; $i<count($allDescription); $i++){
            $description = new JobDescription();
            $description->description = $allDescription[$i];
            $description->job_id = $job_id[$i];
            $description->save();
        }
        return redirect()->back()->with('alert-green', 'description Create Successfully');

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
        $jobDescriptions = JobDescription::where('job_id', $id)->get();
        $job = Job::find($id);
        return view('backend.job.description.edit',compact('job','jobDescriptions'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
