<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\JobApply;
use PDF;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{

    public function ApplicantsCopy(){
        return view('frontend.applicants_copy.login');
    }

    public function ApplicantsCopyDownload(Request $request){
        $request->validate([
            'identification_number' => 'required',
            'identification_password' => 'required',
        ]);

        if (!empty($request->identification_number) && !empty($request->identification_password)){

            $jobApply = JobApply::where('identification_number', $request->identification_number)->where('identification_password', $request->identification_password)->first();

            if ($jobApply){
                $candidate= Candidate::find($jobApply->id);

                $pdf = PDF::loadView('FrontEnd.pdf.applicants_copy',compact('candidate'))->setOptions(['defaultFont' => 'sans-serif']);;
                return $pdf->download($candidate->JobApply->identification_number.'.pdf');
            }
            else{
                return redirect()->back()->with('alert-green', 'Credintial did not match');
            }
        }else{
            return redirect()->back()->with('alert-green', 'Credintial did not match');
        }

    }


    public function OnlinePay(){
        return view('frontend.pay_later.login');
    }

    public function OnlinePayLater(Request $request){
        $request->validate([
            'identification_number' => 'required',
            'identification_password' => 'required',
        ]);

        if (!empty($request->identification_number) && !empty($request->identification_password)){

            $jobApply = JobApply::where('identification_number', $request->identification_number)->where('identification_password', $request->identification_password)->first();

            if ($jobApply){
                $candidate= Candidate::find($jobApply->id);
                session()->put('myId',$candidate->id);
                return view('FrontEnd.application.confirmation',compact('candidate'));
            }
            else{
                return redirect()->back()->with('alert-green', 'Credintial did not match');
            }
        }else{
            return redirect()->back()->with('alert-green', 'Credintial did not match');
        }
    }
    public function AdmitDownload(){
        return view('frontend.admit_card.login');
    }
    public function admitCardDownload(Request $request){

        $request->validate([
            'identification_number' => 'required',
            'identification_password' => 'required',
        ]);

        if (!empty($request->identification_number) && !empty($request->identification_password)){

            $jobApply = JobApply::where('identification_number', $request->identification_number)->where('identification_password', $request->identification_password)->first();

            if ($jobApply){
                $candidate= Candidate::find($jobApply->id);

                if (isset($candidate->Job->Examination->admit)){
                    if ($candidate->Job->Examination->admit == 'admit_card'){
                        if ($candidate->JobApply->status == 'paid'){
                            $pdf = PDF::loadView('FrontEnd.pdf.admit_card',compact('candidate'))->setOptions(['defaultFont' => 'sans-serif']);;
                            return $pdf->download($candidate->JobApply->identification_number.'.pdf');
                        }else{
                            return redirect()->back()->with('alert-green', 'Your Payment is Incomplete');
                        }
                    }else{
                        return redirect()->back()->with('alert-green', 'Admit Card not publish yet');
                    }
                }else{
                    return redirect()->back()->with('alert-green', 'Admit Card not publish yet');
                }


            }
            else{
                return redirect()->back()->with('alert-green', 'Credintial did not match');
            }
        }else{
            return redirect()->back()->with('alert-green', 'Please Input a Valid Credintial');
        }
    }
}
