<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use Illuminate\Support\Facades\Mail;
use App\Mail\formApproved;
use App\User;

class eDA extends Controller
{
    
     function index(){
         return view('eDA');
     }
    

    public function notify(Applicant $person)
    {
        $person->notify();
        return redirect('applicantinfo')->with('success','Notification is succesfully send to Section clerk');
    }
   
    


public function issue(Request $request,$id)
{
   $users = User:: find($id);
   $applicant = Applicant:: find($id);
   if ($request->has('issue')){
   
    $applicant->status = "forwaded";
    $applicant->save();
   
   Mail::to($users['email'])->send(new formApproved($users));
  // Mail::to($applicant['Email'])->send(new Approved($applicant));

   return redirect('/edaview') ->with('success',"Successfully forwaded Application form ");
}
}



}
