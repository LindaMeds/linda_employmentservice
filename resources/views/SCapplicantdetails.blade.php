@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">APPLICANT INFORMATIONS</div>

                <div class="form">
    <table style  ="width:100%">
    <tr>
    <th>Unique Registration Number</th>
    <td>{{$single_record->registration_id}}</td>
     <tr>
     <tr>
    <th>NCO Code</th>
    <td>{{$single_record->NCO_code}}</td>
      <tr>
     <th>Application date</th>
    <td><a href="/applicant/{{$single_record->id}}">
    {{$single_record->ApplicationDate}}</a></td> 
     </tr> 

     <tr>
       <th>Applicant Name</th>
       <td>{{$single_record->Name}}</td>
    </tr>
    <tr>
      <th>Date of Birth</th>
      <td>{{$single_record->DateOfBirth}}</td>
    </tr>
    <tr>
      <th>Religion</th>
      <td>{{$single_record->Religion}}</td>
    </tr>
    <tr>
      <th>Caste</th>
      <td>{{$single_record->Caste}}</td>
    </tr>
    <tr>
      <th>Email id</th>
      <td>{{$single_record->Email}}</td>
    </tr>
    <tr>
      <th>Contect number</th>
      <td>{{$single_record->ContectNo}}</td>
    </tr>
    <tr>
      <th>Gender</th>
      <td>{{$single_record->Gender}}</td>
    </tr>
    <tr>
      <th>Father Name</th>
      <td>{{$single_record->FatherName}}</td>
    </tr>
    <tr>
      <th>Father's DOB</th>
      <td>{{$single_record->FatherDateOfBirth}}</td>
    </tr>
    <tr>
      <th>Mother Name</th>
      <td>{{$single_record->MotherDateOfBirth}}</td>
    </tr>
    <tr>
      <th>Mother's DOB</th>
      <td>{{$single_record->MotherDateOfBirth}}</td>
    </tr>
    <tr>
      <th>Hightest exam passed</th>
      <td>{{$single_record->HighestExamPassed}}</td>
    </tr>
    <tr>
      <th>Subject Taken</th>
      <td>{{$single_record->SubjectTaken}}</td>
    </tr>
    <tr>
      <th>Rank</th>
      <td>{{$single_record->Rank}}</td>
    </tr>
    <tr>
      <th>Institute Name</th>
      <td>{{$single_record->InstituteName}}</td>
    </tr>
    <tr>
      <th>Year of Passing</th>
      <td>{{$single_record->YearOfpassing}}</td>
    </tr>
    <tr>
      <th>Remarks</th>
      <td>{{$single_record->Remarks}}</td>
    </tr>
    <tr>
      <th>Present house No</th>
      <td>{{$single_record->PresentHouseNumber}}</td>
    </tr>
    <tr>
      <th>Present Sub_Locality</th>
      <td>{{$single_record->PresentSubLocality1}}</td>
    </tr>
    <tr>
      <th>Location</th>
      <td>{{$single_record->Location}}</td>
    </tr>
    <tr>
      <th>Present sub_district</th>
      <td>{{$single_record->PresentSubDistrict}}</td>
    </tr>
    <tr>
      <th>Present PIN code</th>
      <td>{{$single_record->PresentPINcode}}</td>
    </tr>
    <tr>
      <th>Nearest Police Station</th>
      <td>{{$single_record->PrePoliceStation}}</td>
    </tr>
    <tr>
      <th>Nearest Post Office</th>
      <td>{{$single_record->PrePostOffice}}</td>
    </tr>
    <tr>
      <th>Premanent house number</th>
      <td>{{$single_record->PermanentHouseNumber}}</td>
    </tr>
    <tr>
      <th>Permanent sub_locality</th>
      <td>{{$single_record->PermanentSubLocality1}}</td>
    </tr>
    <tr>
      <th>Permanent Location</th>
      <td>{{$single_record->PermanentLocation}}<td>
    </tr>
    <tr>
      <th>Permanent Sub-District</th>
      <td>{{$single_record->PermanentSubDistrict}}</td>
    </tr>
    <tr>
      <th>Permanemt State</th>
      <td>{{$single_record->PermanentState}}</td>
    </tr>
    <tr>
      <th>Permanent PIN code</th>
      <td>{{$single_record->PermanentPINcode}}</td>
    </tr>
    <tr>
      <th>Permanent Country</th>
      <td>{{$single_record->PermanentCountry}}</td>
    </tr>
    <tr>
      <th>Police Station</th>
      <td>{{$single_record->PerPoliceStation}}</td>
    </tr>
    <tr>
      <th>Post Office</th>
      <td>{{$single_record->PerPostOffice}}</td>
    </tr>
    <tr>
      <th>Merital Status</th>
      <td>{{$single_record->MeritalStatus}}</td>
    </tr>
    <tr>
      <th>Main Bussiness</th>
      <td>{{$single_record->Bussiness}}</td>
    </tr>
    <tr>
      <th>Date Of Employment</th>
      <td>{{$single_record->DateOfEmployment}}</td>
    </tr>
    <tr>
      <th>Last Drown Salary</th>
      <td>{{$single_record->LastSalary}}</td>
    </tr>
    <tr>
      <th>Preferense Of job</th>
      <td>{{$single_record->Preferenceofjob}}</td>
    </tr>
    <tr>
      <th>Language Known</th>
      <td>{{$single_record->LanguageKnown}}</td>
    </tr>
    <re>
      <th>Physical Weakness</th>
      <td>{{$single_record->PhysicalWeakness}}</td>
    </tr>
    <tr>
      <th>Eye Sight Problem</th>
      <td>{{$single_record->EyesightProblem}}</td>
    </tr>
    <tr>
      <th>Height weight Chest</th>
      <td>{{$single_record->HeightWeightChest}}</td>
    </tr>
    <tr>
      <th>Have u ever work on Army?</th>
      <td>{{$single_record->Army}}</td>
    </tr>
    <tr>
      <th>Name of Employer</th>
      <td>{{$single_record->NameOfEmployer}}</tr>
    </tr>
    <tr>
      <th>Position</th>
      <td>{{$single_record->Position}}</td>
    </tr>
    <tr>
      <th>Regiment</th>
      <td>{{$single_record->regiment}}</td>
    </tr>
    <tr>
      <th>Date of Joining</th>
      <td>{{$single_record->DateOfJoining}}</td>
    </tr>
    <tr>
      <th>Date of Leaving</th>
      <td>{{$single_record->DateOfLeaving}}</td>
    </tr>
    <tr>
      <th>Reason For Leaving</th>
      <td>{{$single_record->reasonsforleaving}}</td>
    </tr>
    <tr>
      <th>Voters_ID</th>
      <td><a href = "/storage/Voters_ID/{{$single_record->Voters_ID}}">Click me to view ID</td>
    </tr>
    <tr>
      <th>Photo</th>
      <td><a href = "/storage/Photo/{{$single_record->Photo}}">Click me to view Photo</td>
    </tr>
     <tr>
      <th>DOBcertificate</th>
      <td><a href = "/storage/DOBcertificate/{{$single_record->DOBcertificate}}">Click me</td>
    </tr>
    <tr>
      <th>PassCertificate</th>
      <td><a href = "/storage/image/{{$single_record->PassCertificate}}">Click me</td>
    </tr>
    <tr>
      <th>Medical_certificate</th>
      <td><a href = "/storage/Medical/{{$single_record->Medical}}">Click me</td>
    </tr>
    <tr>
      <th>WorkExperience</th>
      <td><a href = "/storage/WorkEx/{{$single_record->WorkEx}}">Click me</td>
    </tr>
    </tr> 
    </table>
    </div>
     
     <form action="/applicant/{{$single_record->id}}" class="reject" method="post" enctype="multipart/form-data">
       @csrf
         <div class="layout">
            <fieldset>
               <legend>NOTESHEET</legend><br>
               <label for="Reject-comments">Reason of Rejection</label>
               <textarea name="forwaderRemarks" id="forwaderRemarks" cols="30" rows="3" pleceholder="Comment the reason of Rejected"></textarea>
            </fieldset>
         </div>
         <div class="wrapper1">
        <input type="submit" class="btn btn-danger delete-use" value="Reject">
      </div>
     </form>

  <div class="wrapper2">
    <form method="post"  action="{{route('Applicant.approved', $single_record->id)}}" enctype = "multipart/form-data">
        {{ @csrf_field() }}
        <button type="submit" name="Approve" class="btn btn-success btn-lg" id="button">Approve</botton>
        </form>
  </div>

              

            </div>
        </div>
    </div>
</div>
@endsection