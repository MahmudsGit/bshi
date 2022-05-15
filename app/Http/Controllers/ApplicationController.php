<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Job;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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
            'email'=>'required',
            'married'=>'required',
            'religion'=>'required',
            'nationality'=>'required',
            'employment'=>'required',
            'ssc_institute'=>'required',
            'ssc_board'=>'required',
            'ssc_grade'=>'required',
            'ssc_yaar'=>'required',
            'hsc_institute'=>'required',
            'hsc_board'=>'required',
            'hsc_grade'=>'required',
            'hsc_yaar'=>'required',
            'diploma_institute'=>'required',
            'diploma_board'=>'required',
            'diploma_grade'=>'required',
            'diploma_yaar'=>'required',
            'bsc_institute'=>'required',
            'bsc_board'=>'required',
            'bsc_grade'=>'required',
            'bsc_yaar'=>'required',
            'reg_number'=>'required',
            'reg_date'=>'required',
            'reference_1_name'=>'required',
            'reference_1_occupation'=>'required',
            'reference_1_address'=>'required',
            'reference_2_name'=>'required',
            'reference_2_occupation'=>'required',
            'reference_2_address'=>'required',
            'bank_draft_number'=>'required',
            'bank_name'=>'required',
            'bank_branch'=>'required',
            'bank_draft_date'=>'required',
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

            $values = [
                'full_name_bangla' => $request->full_name_bangla,
                'full_name_english' => $request->full_name_english,
                'position_name' => $request->position_name,
                'clo_name_bangla' => $request->clo_name_bangla,
                'clo_name_english' => $request->clo_name_english,
                'mother_name_bangla' => $request->mother_name_bangla,
                'mother_name_english' => $request->mother_name_english,
                'birth_date' => date("Y-m-d", strtotime($request->birth_date)),
                'age' => $age,
                'nid_number' => $request->nid_number,
                'parmanet_address_bangla' => $parmanet_address_bangla,
                'parmanet_address_english' => $parmanet_address_english,
                'contact_address_bangla' => $request->contact_address_bangla,
                'contact_address_english' => $request->contact_address_english,
                'moblie_number' => $request->moblie_number,
                'email' => $request->email,
                'married' => $request->married,
                'religion' => $request->religion,
                'nationality' => $request->nationality,
                'employment' => $request->employment,
                'ssc' => $ssc,
                'hsc' => $hsc,
                'diploma' =>$diploma,
                'bsc' => $bsc,
                'others_degree' => $others_degree,
                'experience' => $request->experience,
                'reg_number' => $request->reg_number,
                'reg_date' => date("Y-m-d", strtotime($request->reg_date)),
                'reference_1' => $reference_1,
                'reference_2' => $reference_2,
                'bank_draft_number' => $request->bank_draft_number,
                'bank_name' => $request->bank_name,
                'bank_branch' => $request->bank_branch,
                'bank_draft_date' => date("Y-m-d", strtotime($request->bank_draft_date)),

            ];

            $query = DB::table('candidates')->insert($values);
            if( $query ){
                return response()->json(['status'=>1, 'id'=>1, 'redirect_url'=>url('confirmation')]);
            }
        }
    }
    public function confirmation($id){
        $candidate = Candidate::find(1);
        return view('frontend.confirmation',compact('candidate'));

    }


}
