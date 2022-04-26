<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
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

    public function store(Request $request){
        $this->validate($request, [
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
            'others_degree_institute'=>'required',
            'others_degree_board'=>'required',
            'others_degree_grade'=>'required',
            'others_degree_yaar'=>'required',
            'experience'=>'required',
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
        $candidate = new Candidate();
            $candidate->full_name_bangla = $request->full_name_bangla;
            $candidate->full_name_english = $request->full_name_english;
            $candidate->position_name = $request->position_name;
            $candidate->clo_name_bangla = $request->clo_name_bangla;
            $candidate->clo_name_english = $request->clo_name_english;
            $candidate->mother_name_bangla = $request->mother_name_bangla;
            $candidate->mother_name_english = $request->mother_name_english;
            $candidate->birth_date = $request->birth_date;
            $candidate->age =
                $request->age;
            $candidate->nid_number = $request->nid_number;
            $candidate->parmanet_address_bangla =
                $request->parmanet_address_bangla;
            $candidate->parmanet_address_english =
                $request->parmanet_address_english;
            $candidate->contact_address_bangla = $request->contact_address_bangla;
            $candidate->contact_address_english = $request->contact_address_english;
            $candidate->moblie_number = $request->moblie_number;
            $candidate->email = $request->email;
            $candidate->married = $request->married;
            $candidate->religion = $request->religion;
            $candidate->nationality = $request->nationality;
            $candidate->employment = $request->employment;
            $candidate->ssc =
                $request->ssc;
            $candidate->hsc =
                $request->hsc;
            $candidate->diploma =
                $request->diploma;
            $candidate->bsc =
                $request->bsc;
            $candidate->others_degree =
                $request->others_degree;
            $candidate->experience = $request->experience;
            $candidate->reg_number = $request->reg_number;
            $candidate->reg_date = $request->reg_date;
            $candidate->reference_1 =
                $request->reference_1;
            $candidate->reference_2 =
                $request->reference_2;
            $candidate->bank_draft_number = $request->bank_draft_number;
            $candidate->bank_name = $request->bank_name;
            $candidate->bank_branch = $request->bank_branch;
            $candidate->bank_draft_date = $request->bank_draft_date;
            $candidate->save();
            return redirect()->back()->with('messege', 'success');
    }
}
