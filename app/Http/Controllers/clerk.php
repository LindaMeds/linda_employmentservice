<?php

namespace App\Http\Controllers;
use App\Applicant;
use App\User;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Mail;
use App\Helpers\Helper;
use App\Helpers\Helper2;
use App\Mail\Approved;
use App\Mail\Reject;
use App\Mail\RequestForSign;
use PDF;

use Illuminate\Http\Request;

class clerk extends Controller
{
    
    function index(){
        return view('clerk');
    }

    public function Signview($id)
    {
        //$applicant = Applicant::find($id);
        return view ('Remarks')->with('id', $id);
    }

    public function rejStore(Request $request, $id)
{
   $applicant = Applicant:: find($id);
   $applicant->delete();
   $applicant->Remarks = request('Sign');
   $applicant->save();

   Mail::to($applicant['Email'])->send(new Reject($applicant));

   return redirect('/SCapplicantinfo') ->with('success',"Successfully rejected Application form ");
}

public function download($id)
{
    $single_record = Applicant::find($id);
    $pdf = PDF::loadView('eodownload',compact('single_record'));
   // $pdf->setOrientation('landscape');
    $filename = $single_record->id;
    //return $pdf->stream();

    if($single_record->status == 'Approved')
     {
        return $pdf->download($filename.'.pdf');
     }

     else
     {
         return response("Nothing to download!! ");
     }
}

}
