<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Job;
use App\Models\JobApply;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use function GuzzleHttp\Promise\all;

class ApplicationController extends Controller
{
    public function application(){
        $jobs = Job::all();
        return view('frontend.application', compact('jobs'));
    }

    public function showForm($id){
        $job = Job::find($id);
        return view('frontend.form',compact('job'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'full_name_bangla'=>'required',
            'full_name_english'=>'required',
            'position_name'=>'required',
            'clo_name_bangla'=>'required',
            'clo_name_english'=>'required',
            'mother_name_bangla'=>'required',
            'mother_name_english'=>'required',
            'birth_date'=>'required',
            'age_day'=>'required',
            'age_month'=>'required',
            'age_year'=>'required',
            'nid_number'=>'required',
            'village_bangla'=>'required',
            'post_office_bangla'=>'required',
            'thana_bangla'=>'required',
            'district_bangla'=>'required',
            'village_english'=>'required',
            'post_office_english'=>'required',
            'thana_english'=>'required',
            'district_english'=>'required',
            'contact_address_bangla'=>'required',
            'contact_address_english'=>'required',
            'moblie_number'=>'required',
            'married_status'=>'required',
            'nationality'=>'required',
            'religion'=>'required',
            'sex'=>'required',
            'ssc_institute'=>'required',
            'ssc_board'=>'required',
            'ssc_grade'=>'required',
            'ssc_yaar'=>'required',
            'reg_number'=>'required',
            'reg_date'=>'required',
        ]);

        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{

            $age = json_encode([
                $request->age_day,
                $request->age_month,
                $request->age_year,
            ]);
            $parmanet_address_bangla = json_encode([
                $request->village_bangla,
                $request->post_office_bangla,
                $request->thana_bangla,
                $request->district_bangla,
            ]);
            $parmanet_address_english = json_encode([
                $request->village_english,
                $request->post_office_english,
                $request->thana_english,
                $request->district_english,
            ]);
            $ssc = json_encode([
                $request->ssc_institute,
                $request->ssc_board,
                $request->ssc_grade,
                $request->ssc_yaar,
            ]);
            $hsc = json_encode([
                $request->hsc_institute,
                $request->hsc_board,
                $request->hsc_grade,
                $request->hsc_yaar,
            ]);
            $diploma = json_encode([
                $request->diploma_institute,
                $request->diploma_board,
                $request->diploma_grade,
                $request->diploma_yaar,
            ]);
            $bsc = json_encode([
                $request->bsc_institute,
                $request->bsc_board,
                $request->bsc_grade,
                $request->bsc_yaar,
            ]);
            $others_degree = json_encode([
                $request->others_degree_institute,
                $request->others_degree_board,
                $request->others_degree_grade,
                $request->others_degree_yaar,
            ]);
            $reference_1 = json_encode([
                $request->reference_1_name,
                $request->reference_1_occupation,
                $request->reference_1_address,
            ]);
            $reference_2 = json_encode([
                $request->reference_2_name,
                $request->reference_2_occupation,
                $request->reference_2_address,
            ]);

            $candidate = new Candidate();
            $candidate->full_name_bangla = $request->full_name_bangla;
            $candidate->full_name_english = $request->full_name_english;
            $candidate->position_name = $request->position_name;
            $candidate->job_id = $request->job_id;
            $candidate->clo_name_bangla = $request->clo_name_bangla;
            $candidate->clo_name_english = $request->clo_name_english;
            $candidate->mother_name_bangla = $request->mother_name_bangla;
            $candidate->mother_name_english = $request->mother_name_english;
            $candidate->birth_date = date("Y-m-d", strtotime($request->birth_date));
            $candidate->age =$age;
            $candidate->nid_number = $request->nid_number;
            $candidate->parmanet_address_bangla =$parmanet_address_bangla;
            $candidate->parmanet_address_english =$parmanet_address_english;
            $candidate->contact_address_bangla = $request->contact_address_bangla;
            $candidate->contact_address_english = $request->contact_address_english;
            $candidate->moblie_number = $request->moblie_number;
            $candidate->email = $request->email;
            $candidate->married_status = $request->married_status;
            $candidate->nationality = $request->nationality;
            $candidate->religion = $request->religion;
            $candidate->sex = $request->sex;
            $candidate->employment = $request->employment;
            $candidate->ssc = $ssc;
            $candidate->hsc =$hsc;
            $candidate->diploma =$diploma;
            $candidate->bsc =$bsc;
            $candidate->others_degree = $others_degree;
            $candidate->experience = $request->experience;
            $candidate->reg_number = $request->reg_number;
            $candidate->reg_date = date("Y-m-d", strtotime($request->reg_date));
            $candidate->reference_1 = $reference_1;
            $candidate->reference_2 = $reference_2;
            $query = $candidate->save();

            if( $query ){
                $jobApply = new JobApply();
                $jobApply->applied_by = $candidate->id;
                $jobApply->job_id = $candidate->job_id;
                $jobApply->identification_number = $candidate->id;
                $jobApply->identification_password = $candidate->id;
                $jobApply->payment_status = 0;
                $jobApply->reviewed_by = 1;
                $jobApply->status = 'applied';
                $jobApply->save();

                return response()->json(['status'=>1, 'id'=>$candidate->id, 'redirect_url'=>url('confirmation')]);
            }

        }
    }


    public function update(Request $request, $id){
        $validator = Validator::make($request->all(),[
            'full_name_bangla'=>'required',
            'full_name_english'=>'required',
            'position_name'=>'required',
            'clo_name_bangla'=>'required',
            'clo_name_english'=>'required',
            'mother_name_bangla'=>'required',
            'mother_name_english'=>'required',
            'birth_date'=>'required',
            'age_day'=>'required',
            'age_month'=>'required',
            'age_year'=>'required',
            'nid_number'=>'required',
            'village_bangla'=>'required',
            'post_office_bangla'=>'required',
            'thana_bangla'=>'required',
            'district_bangla'=>'required',
            'village_english'=>'required',
            'post_office_english'=>'required',
            'thana_english'=>'required',
            'district_english'=>'required',
            'contact_address_bangla'=>'required',
            'contact_address_english'=>'required',
            'moblie_number'=>'required',
            'married_status'=>'required',
            'nationality'=>'required',
            'religion'=>'required',
            'sex'=>'required',
            'ssc_institute'=>'required',
            'ssc_board'=>'required',
            'ssc_grade'=>'required',
            'ssc_yaar'=>'required',
            'reg_number'=>'required',
            'reg_date'=>'required',
        ]);

        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{

            $age = json_encode([
                $request->age_day,
                $request->age_month,
                $request->age_year,
            ]);
            $parmanet_address_bangla = json_encode([
                $request->village_bangla,
                $request->post_office_bangla,
                $request->thana_bangla,
                $request->district_bangla,
            ]);
            $parmanet_address_english = json_encode([
                $request->village_english,
                $request->post_office_english,
                $request->thana_english,
                $request->district_english,
            ]);
            $ssc = json_encode([
                $request->ssc_institute,
                $request->ssc_board,
                $request->ssc_grade,
                $request->ssc_yaar,
            ]);
            $hsc = json_encode([
                $request->hsc_institute,
                $request->hsc_board,
                $request->hsc_grade,
                $request->hsc_yaar,
            ]);
            $diploma = json_encode([
                $request->diploma_institute,
                $request->diploma_board,
                $request->diploma_grade,
                $request->diploma_yaar,
            ]);
            $bsc = json_encode([
                $request->bsc_institute,
                $request->bsc_board,
                $request->bsc_grade,
                $request->bsc_yaar,
            ]);
            $others_degree = json_encode([
                $request->others_degree_institute,
                $request->others_degree_board,
                $request->others_degree_grade,
                $request->others_degree_yaar,
            ]);
            $reference_1 = json_encode([
                $request->reference_1_name,
                $request->reference_1_occupation,
                $request->reference_1_address,
            ]);
            $reference_2 = json_encode([
                $request->reference_2_name,
                $request->reference_2_occupation,
                $request->reference_2_address,
            ]);

            $candidate = Candidate::find($id);
            $candidate->full_name_bangla = $request->full_name_bangla;
            $candidate->full_name_english = $request->full_name_english;
            $candidate->position_name = $request->position_name;
            $candidate->job_id = $request->job_id;
            $candidate->clo_name_bangla = $request->clo_name_bangla;
            $candidate->clo_name_english = $request->clo_name_english;
            $candidate->mother_name_bangla = $request->mother_name_bangla;
            $candidate->mother_name_english = $request->mother_name_english;
            $candidate->birth_date = date("Y-m-d", strtotime($request->birth_date));
            $candidate->age =$age;
            $candidate->nid_number = $request->nid_number;
            $candidate->parmanet_address_bangla =$parmanet_address_bangla;
            $candidate->parmanet_address_english =$parmanet_address_english;
            $candidate->contact_address_bangla = $request->contact_address_bangla;
            $candidate->contact_address_english = $request->contact_address_english;
            $candidate->moblie_number = $request->moblie_number;
            $candidate->email = $request->email;
            $candidate->married_status = $request->married_status;
            $candidate->nationality = $request->nationality;
            $candidate->religion = $request->religion;
            $candidate->sex = $request->sex;
            $candidate->employment = $request->employment;
            $candidate->ssc = $ssc;
            $candidate->hsc =$hsc;
            $candidate->diploma =$diploma;
            $candidate->bsc =$bsc;
            $candidate->others_degree = $others_degree;
            $candidate->experience = $request->experience;
            $candidate->reg_number = $request->reg_number;
            $candidate->reg_date = date("Y-m-d", strtotime($request->reg_date));
            $candidate->reference_1 = $reference_1;
            $candidate->reference_2 = $reference_2;
            $query = $candidate->save();
            if( $query ){
                return response()->json(['status'=>1, 'id'=>$candidate->id, 'redirect_url'=>url('confirmation')]);
            }


        }
    }
    public function confirmation($id){
        $candidate = Candidate::find($id);
        return view('frontend.confirmation',compact('candidate'));

    }
    public function edit($id){
        $candidate = Candidate::find($id);
        return view('frontend.edit_application',compact('candidate'));

    }


}
