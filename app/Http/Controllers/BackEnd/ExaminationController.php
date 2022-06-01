<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Examination;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ExaminationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $exams = Examination::pluck('id')->toArray();
        $jobs = Job::whereNotIn('id', $exams)->get();
        $examinations = Examination::all();
        return view('BackEnd.examination.index', compact('jobs','examinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'job_id' =>'required',
            'exam_date' =>'required',
            'exam_time' =>'required',
        ]);

        $examination = new Examination();
        $examination->job_id = $request->job_id;
        $examination->exam_date = date("Y-m-d", strtotime($request->exam_date));
        $examination->exam_time = $request->exam_time;
        $examination->admit = $request->admit;
        $examination->save();

        return redirect()->back()->with('alert-green', 'Examination information Save Successfully');

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
        //
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
