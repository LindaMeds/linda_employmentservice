<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>{{$single_record->register_no}} details</title> -->
    <title> details</title> 
  <style>
    table, th, td{
      border:1px solid black;
      border collapse:collapse;
    }
    th, td{
      padding:10px;
      text-align:left;
      font-size:40px;
      font-weight:200;
    }
    h2{
      text-align:center;
      color:solid black;
      font-size:40px;
    }
    button{
      text-align:center;
      color:red:
      font-size:60px;
      padding:15px;
      border:center;
      text:30px;
    }
    form{
      text-align:center;
    }
  </style>
</head>
<body>


    <h2>APPLICANT INFORMATIONS EDITS</h2>
  <div class="row">
  <form action="{{route('Applicant.update',$person->id) }}" method="post">
   @csrf
    <table style  ="width:100%">
     <tr>
     <th>Application date</th>
    <td><a href="/applicants/{{$single_record->id}}">
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
      <td><a href = "/storage/Voters_ID/{{$single_record->Voters_ID}}">Click me</td>
    </tr>
    <tr>
      <th>Comments</th>
      <td>{{$single_record->Comments}}</td>
    </tr>
    </table>
    </form>
 </div>
</body>
</html>