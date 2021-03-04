<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use session;


class ApplicantController extends Controller
{

  
   public function EO()
   {
      $person = DB::select('select * from applicants where status = ? or status = ?',['none','forwarded']);
      return view('SCapplicantinfo')->with('persons',$persons);
   }

    
   public function index()
      {
       $persons = Applicant::All();
        return view('applicantinfo')->with('persons',$persons);
     // return view('applicantinfo',compact('applicants'));
       
     }


     public function index2()
      {
       $persons = Applicant::All();
        return view('SCapplicantinfo')->with('persons',$persons);
      }
      public function index3()
      {
       $persons = Applicant::All();
        return view('EOapplicantinfo')->with('persons',$persons);
      }



   function index1(){
      return view('csc');
   }
    


    public function store(Request $request)
    {  
        $this->validate($request,[
           'Voters_ID' => 'image|nullable|max:1999'  
        ]);
        $validated = $request->validate([
         'Voters_ID' => 'image|nullable|max:1999',
         'Photo' => 'image|nullable|max:1999',
         'DOBcertificate' => 'image|nullable|max:1999',
         'PassCertificate' => 'image|nullable|max:1999',
        // 'AddProve' => 'image|nullable|max:1999',
         'WorkEx' => 'image|nullable|max:1999',
         'Medical' => 'image|nullable|max:1999',
         'Email' => 'required |email',
         'Name' => 'required',
         'DateOfBirth' => 'required',
         'ContectNo' => 'required|number|max:10 digit',


        ]);

      //handle file upload
      if($request->hasFile('Voters_ID')){
         //get filename with the extention
         $filenameWithExt=$request->file('Voters_ID')->getClientOriginalName();
         //get just filename
         $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
         //GET just ext
         $extention=$request->file('Voters_ID')->getClientOriginalExtension();
         //filename to store
         $fileNameToStore=$filename.'_'.time().'.'.$extention;
         //upload image
         $path = $request->file('Voters_ID')->storeAs('public/Voters_ID',$fileNameToStore);
      }else{
         $fileNameToStore = 'noimage.jpg';
      }
      
      
      if($request->hasFile('Photo')){
         $filenameWithExt=$request->file('Photo')->getClientOriginalName();
         $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
         $extention=$request->file('Photo')->getClientOriginalExtension();
         $fileNameToStore1=$filename.'_'.time().'.'.$extention;
         $path = $request->file('Photo')->storeAs('public/Photo',$fileNameToStore1);
      }else{
         $fileNameToStore1 = 'noimage.jpg';
      }

      if($request->hasFile('DOBcertificate')){
         $filenameWithExt=$request->file('DOBcertificate')->getClientOriginalName();
         $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
         $extention=$request->file('DOBcertificate')->getClientOriginalExtension();
         $fileNameToStore2=$filename.'_'.time().'.'.$extention;
         $path = $request->file('DOBcertificate')->storeAs('public/DOBcertificate',$fileNameToStore2);
      }else{
         $fileNameToStore2 = 'noimage.jpg';
      }
      if($request->hasFile('PassCertificate')){
         $filenameWithExt=$request->file('PassCertificate')->getClientOriginalName();
         $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
         $extention=$request->file('PassCertificate')->getClientOriginalExtension();
         $fileNameToStore3=$filename.'_'.time().'.'.$extention;
         $path = $request->file('PassCertificate')->storeAs('public/image',$fileNameToStore3);
      }else{
         $fileNameToStore3 = 'noimage.jpg';
      }
      // if($request->hasFile('AddProve')){
      //    $filenameWithExt=$request->file('AddProve')->getClientOriginalName();
      //    $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
      //    $extention=$request->file('AddProve')->getClientOriginalExtension();
      //    $fileNameToStore4=$filename.'_'.time().'.'.$extention;
      //    $path = $request->file('AddProve')->storeAs('public/AddProve',$fileNameToStore4);
      // }else{
      //    $fileNameToStore4 = 'noimage.jpg';
      // }
      if($request->hasFile('WorkEx')){
         $filenameWithExt=$request->file('WorkEx')->getClientOriginalName();
         $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
         $extention=$request->file('WorkEx')->getClientOriginalExtension();
         $fileNameToStore5=$filename.'_'.time().'.'.$extention;
         $path = $request->file('WorkEx')->storeAs('public/WorkEx',$fileNameToStore5);
      }else{
         $fileNameToStore5 = 'noimage.jpg';
      }
      if($request->hasFile('Medical')){
         $filenameWithExt=$request->file('Medical')->getClientOriginalName();
         $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
         $extention=$request->file('Medical')->getClientOriginalExtension();
         $fileNameToStore6=$filename.'_'.time().'.'.$extention;
         $path = $request->file('Medical')->storeAs('public/Medical',$fileNameToStore6);
      }else{
         $fileNameToStore6 = 'noimage.jpg';
      }
     


       $Name = $request->Name;
      $registration_id = Helper::IDGenerator(new Applicant,'registration_id',5,'APC');

      $Name = $request->Name;
      $NCO_code = Helper2::NCOGenerator(new Applicant,'NCO_code',4,'XO01');
      
       $data = new Applicant();
   
         $data ->registration_id = $registration_id;
         $data ->NCO_code = $NCO_code;
         $data ->ApplicationDate = request('ApplicationDate');
         $data ->Name = request('Name');
         $data ->Appelation=request('Appelation');
         $data ->DateOfBirth=request('DateOfBirth');
         $data ->Religion = request('Religion');
         $data ->Caste = request('Caste');
         $data ->Email=request('Email');
         $data ->ContectNo=request('ContectNo');
         $data ->Gender = request('Gender');

         $data ->FatherName=request('FatherName');
         $data ->Appelation1=request('Appelation1');
         $data ->FatherDateOfBirth= request('FatherDateOfBirth');
         $data ->MotherName = request('MotherName');
         $data ->MotherDateOfBirth=request('MotherDateOfBirth');
         $data ->SpouseName=request('SpouseName');

         $data ->HighestExamPassed = request('HighestExamPassed');
         $data ->SubjectTaken = request('SubjectTaken');
         $data ->Rank=request('Rank');
         $data ->InstituteName=request('InstituteName');
         $data ->YearOfpassing = request('YearOfpassing');
         $data ->Remarks = request('Remarks');

         $data ->IDmark=request('IDmark');
         $data ->PresentHouseNumber=request('PresentHouseNumber');
         $data ->PresentSubLocality1 = request('PresentSubLocality1');
         $data ->PresentSubLocality2 = request('PresentSubLocality2');
         $data ->Location=request('Location');
         $data ->PresenttSubDistrict = request('PresentSubDistrict');
         $data ->PresentState = request('PresentState');
         $data ->PresentPINcode = request('PresentPINcode');
         $data ->PresentCountry=request('PresentCountry');
         $data ->PrePoliceStation=request('PrePoliceStation');
         $data ->PrePostOffice = request('PrePostOffice');

         $data ->PermanentHouseNumber = request('PermanentHouseNumber');
         $data ->PermanentSubLocality1=request('PermanentSubLocality1');
         $data ->PermanentSubLocality2=request('PermanentSubLocality2');
         $data ->PermanentLocation = request('PermanentLocation');
         $data ->PermanentSubDistrict = request('PermanentSubDistrict');
         $data ->PermanentState=request('PermanentState');
         $data ->PermanentPINcode=request('PermanentPINcode');
         $data ->PermanentCountry = request('PermanentCountry');
         $data ->PerPoliceStation=request('PerPoliceStation');
         $data ->PerPostOffice=request('PerPostOffice');

         $data ->MeritalStatus = request('MeritalStatus');
         $data ->Bussiness = request('Bussiness');
         $data ->OtherBussiness=request('OtherBussiness');
         $data ->EmployerDetails=request('EmployerDetails');
         $data ->JobDescription = request('JobDescription');
         $data ->DateOfEmployment = request('DateOfEmployment');
         $data ->LastSalary = request('LastSalary');
         $data ->Remarks1 = request('Remarks1');
         $data ->Preferenceofjob = request('PreferenceOfJob');

         $data ->SpecialTalent = request('SpecialTalent');
         $data ->LanguageKnown = request('LanguageKnown');
         $data ->PhysicalWeakness = request('PhysicalWeakness');
         $data ->physicalweakness1 = request('physicalweakness1');
         $data ->EyesightProblem = request('EyesightProblem');
         $data ->EyesightProblemtype = request('EyesightProblemtype');
         $data ->HeightWeightChest = request('HeightWeightChest');
         $data ->nemberofunion = request('nemberofunion');
         $data ->detailsunion = request('detailsunion');
         $data ->Salaryexpected = request('Salaryexpected');
         $data ->Army = request('Army');

         $data ->NameOfEmployer = request('NameOfEmployer');
         $data ->Position = request('Position');
         $data ->regiment = request('regiment');
         $data ->DateOfJoining = request('DateOfJoining');
         $data ->DateOfLeaving = request('DateOfLeaving');
         $data ->reasonsforleaving = request('reasonsforleaving');
        
        $data->Voters_ID=$fileNameToStore;
        $data->Photo=$fileNameToStore1;
        $data->DOBcertificate=$fileNameToStore2;
        $data->PassCertificate=$fileNameToStore3;
       // $request->AddProve=$fileNameToStore4;
        $data->WorkEx=$fileNameToStore5;
        $data->Medical=$fileNameToStore6;

         $data ->comments = request('comments'); 
         

         $data -> save();
         $user = $data->id;
         $success = "Successfully submitted Application";
        return redirect('cscview')->with(compact('user','success'));
     }
  // else{
   //       return redirect('csc')->with('msg','Please choose file.');
   //   }  
    
    public function show($id)
   {  
        $single_record = Applicant::find($id);
        return view('applicantdetails')->with('single_record',  $single_record);
      // return Applicant::find($id);
   }
   public function show1($id)
   {  
        $single_record = Applicant::find($id);
        return view('SCapplicantdetails')->with('single_record',  $single_record);
   }

   
    public function destroy(Applicant $person)
    {
        $person->delete();
        return redirect('applicantinfo')->with('success','Data Deleted');
    }
   



public function approved(Request $request, $id)
{
   $applicant = Applicant:: find($id);
  if ($request->has('Approve')){
   
      $applicant->status = "pending signature";
      $applicant->save();
   

   return redirect('/clerk') ->with('success',"Successfully approve  Application form ");
  }
  else if($request->has('sign')){
     $applicant->status = "Approved";
     $applicant->save();
     Mail::to($applicant['Email'])->send(new Approved($applicant));
    return redirect('/eopage') ->with('success',"Successfully approve  Application form ");
  }
}




  
public function download($id)
{
    $single_record = Applicant::find($id);
    $pdf = PDF::loadView('download1',compact('single_record'));
    $filename = $single_record->id;
    //return $pdf->stream();
    return $pdf->download($filename.'.pdf');

}

public function eoview($id)
{  
     $single_record = Applicant::find($id);
     return view('Eoview')->with('single_record',  $single_record);
}

public function dload(Request $request)
  {
    $single_record=request('registration_id');
    $find=Applicant::where('registration_id','=',$single_record)->first();
    return view('/dlSearch')->with('single_record',$find);
  }


}