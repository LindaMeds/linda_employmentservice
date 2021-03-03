@extends('layouts.applicant')

@section('content')
<div class="row">
<div class="col-md-10">
  <br />
  <h1 aling="center">Application Form</h1>
  <br/>
 
     @if(\Session::has('success'))
    <p class="text-success">
    {{\Session('success')}}</p>
  
    @endif
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!--Form-->
    <form action="{{ route('Applicant.store') }}" method="POST" enctype = "multipart/form-data">
    @csrf
        <br />
        <div>
          <fieldset>
           <legend>APPLICANT INFO</legend>
           <div>
          <label>Application Date:</label>
          <input type="date" name="ApplicationDate" required />
        </div>
        <br />
        <div>
          <label>Applicant Name:</label>
          <input type="text" name="Name" class="form-control" id="Name" size="30" required/>
        </div>
        <br />
        <div>
          <label>Appelation:</label>
          <select name="Appelation" >
          <option> </option>
            <option>Dr</option>
            <option>Er</option>
            <option>Rev</option>
          </select>
        </div>
        <br />
        <div>
          <label>Date of Birth:</label>
          <input type="date" name="DateOfBirth" required />
        </div>
        <br />
        <div>
          <label>Religion:</label>
          <select name="Religion" required>
              <option> </option>
            <option>Christianity</option>
            <option>Hinduism</option>
            <option>Sikhism</option>
            <option>Islam</option>
            <option>Jainism</option>
            <option>Buddhism</option>
          </select>
          </div>
          <br />
        <div>
          <label>Caste:</label required>
          <select name="Caste">
              <option> </option>
            <option>Schedule tribe</option>
            <option>Schedule caste</option>
            <option>General</option>
            <option>OBC</option>
          </select>
          </div>
        <br />
        <div>
          <label>Email:</label>
          <input type="text" size="30" name="Email" required />
        </div>
        <br />
        <div>
          <label>Contect Number:</label>
          <input type="number" size="30" name="ContectNo" required>
        </div>
  
        <br />
        <div>
          <label> Gender:</label>
          <select name="Gender">
            <option> </option>
            <option>male</option>
            <option>female</option>
            <option>others</option>
          </select>
        </div>
        <br />
        <div>
          <label>Father Name:</label>
          <input type="text"  size= "30" name="FatherName" required />
        </div>
        <br />
        <div>
          <label>Appelation:</label>
          <select name="Appelation1">
          <option> </option>
            <option>Dr</option>
            <option>Er</option>
            <option>Rev</option>
          </select>
        </div>
        <br />
        <div>
          <label>Father's Date of Birth:</label>
          <input type="date" name="FatherDateOfBirth" required />
        </div><br />
        <div>
          <label>Mother's Name:</label>
          <input type="text" size="30" name="MotherName" required />
        </div><br />
        <div>
          <label>Appelation:</label>
          <select name="Appelation">
            <option> </option>
            <option>Dr</option>
            <option>Er</option>
            <option>Rev</option>
          </select>
        </div><br />
        <div>
          <label>Mother's Date of Birth:</label>
          <input type="date" name="MotherDateOfBirth" required />
        </div><br />
        <div>
          <label>Husband/Wife Name:</label>
          <input type="text" size="30" name="SpouseName" />
        </div><br />

      </fieldset>
    </div>
 <div> 
   <fieldset>
          <legend>QUALIFICATION</legend>
          <div>
          <label>Hightest Exam Passed:</label>
          <select name="HighestExamPassed" required>
            <option>Select here</option>
            <option>Class 10</option>
            <option>Class 12</option>
            <option>B.A/B.Com</option>
            <option>B.E/B.tech</option>
            <option>B.Sc</option>
            <option>M.A/M.Com</option>
            <option>M.E/M.tech</option>
            <option>M.Sc</option>
            <option>Phd</option>
          </select>
        </div><br />
        <div>
          <label>Subject taken:</label>
          <select name="SubjectTaken" required>
            <option> </option>
            <option>Arts</option>
            <option>Science</option>
            <option>Commerce</option>
            </select>
        </div>
        <br />
        <div>
          <label>Rank:</label>
          <input type="number" size="30" name="Rank" />
        </div><br /><br />
        <div>
          <label>Institute Name:</label>
          <input type="text" size="30" name="InstituteName" required />
        </div><br /><br />
        <div>
          <label>Year of Passing:</label>
          <input name="YearOfPassing" size="30" Type="date" required="">
        </div><br /><br />
        <div>
          <label>Remarks:</label>
          <textarea name="Remarks" size="30" required></textarea>
        </div>
      </fieldset>
    </div>

    <div>
      <fieldset>
          <legend>PRESENT ADDRESS</legend>
          <div>
          <label>Identification Mark:</label>
          <textarea name="IDmark" size="30" required></textarea>
        </div><br /><br />
        <div>
          <label>Present Address House No:</label>
          <input type="alphanumeric" name="PresentHouseNumber" size="60" placeholder="A-32" required>
  
        </div><br /><br />
        <div>
          <label>Present Address Sub-locality_1:</label>
          <input type="alphanumeric" name="PresentSubLocality1" size="60" placeholder="Near Basketball court" required />
        </div><br /><br />
        <div>
          <label>Present Address sub-locality_2:</label>
          <input type="alphanumeric" name="PresentSubLocality2" size="60" placeholder="opposite to LRM hospital"  />
        </div><br /><br />
        <div>
          <label>Address Location:</label>
          <input type="alphanumeric" name="Location" size="60" placeholder="Aizawl,Chanmary west" required />
        </div><br /><br />
        <div>
          <label>Present Address Sub-District:</label>
          <select name="PresentSubDistrict" required>
            <option> </option>
            <option>Aizawl</option>
            <option>Lunglei</option>
            <option>Champhai</option>
            <option>Kolasib</option>
            <option>siaha</option>
            <option>Mamit</option>
            <option>serchip</option>
            <option>Lawngtlai</option>
            </select>
        </div><br /><br />
        <div>
          <label>Present State:</label>
          <select name="PresentState" required>
            <option> </option>
            <option>Mizoram</option>
            <option>Tripura</option>
            <option>Assam</option>
            <option>Manipur</option>
            <option>Others</option>
            </select>
        </div><br /><br />
        <div>
          <label>PIN Code:</label>
          <input type="numeric" size="30" name="PresentPINcode" required />
        </div><br /><br />
        <div>
          <label>Present Address Country:</label>
          <select name="PresentCountry" required>
            <option> </option>
            <option>India</option>
            <option>US</option>
            <option>Canada</option>
            <option>Affrica</option>
            <option>Others</option>
            </select>
        </div><br /><br />
        <div>
          <label>Nearest Police station:</label>
          <input type="alphanumeric" name="PrePoliceStation" size="60" required />
        </div><br /><br />
        <div>
          <label>Nearest Post Office:</label>
          <input type="alphanumeric" name="PrePostOffice" size="60" required />
        </div><br /><br />
      </fieldset>
    </div>
      
    <div>
      <fieldset>
        <legend>PERMANENT ADDRESS</legend>
        <div>
          <label>Permanent Address-DoorNumber:</label>
          <input type="numeric" size="60" name="PermanentHouseNumber" placeholder="Y-32" required />
        </div><br /><br />
        <div>
          <label>Permanent Address Sub-locality_1:</label>
          <input type="alphanumeric" name="PermanentSubLocality1" size="60" placeholder="Near middle school" required />
        </div><br /><br />
        <div>
          <label>Permanent Address sub-locality_2:</label>
          <input type="alphanumeric" name="PermanentSubLocality2" size="60" placeholder="opposite Hrangbana College"  />
        </div><br /><br />
        <div>
          <label>Permanent Address Location:</label>
          <input type="alphanumeric" name="PermanentLocation" size="60" placeholder="Chanmary" required />
        </div><br /><br />
        <div>
          <label>Permanent Address Sub-District:</label>
          <select name="PermanentSubdistrict" required>
            <option> </option>
            <option>Aizawl</option>
            <option>Lunglei</option>
            <option>Champhai</option>
            <option>Kolasib</option>
            <option>siaha</option>
            <option>Mamit</option>
            <option>serchip</option>
            <option>Lawngtlai</option>
            </select>
        </div><br /><br />
        <div>
          <label>Permanent State:</label>
          <select name="PermanentState" required>
            <option> </option>
            <option>Mizoram</option>
            <option>Tripura</option>
            <option>Assam</option>
            <option>Manipur</option>
            <option>Others</option>
            </select>
        </div><br /><br />
        <div>
          <label>PIN Code:</label>
          <input type="numeric" size="30" name="PermanentPINcode" required />
        </div><br /><br />
        <div>
          <label>Permanent Address Country:</label>
          <select name="PermanentCountry" required>
            <option> </option>
            <option>India</option>
            <option>US</option>
            <option>Canada</option>
            <option>Affrica</option>
            <option>Others</option>
            </select>
        </div><br />v<br />
        <div>
          <label>Permanent Nearest Police station:</label>
          <input type="alphanumeric" name="PerPoliceStation" size="60" required />
        </div><br /><br />
        <div>
          <label>Permanent Nearest Post Office:</label>
          <input type="alphanumeric" name="PerPostOffice" size="60" required />
        </div><br /><br />

      </fieldset>
    </div>

    <div>
      <fieldset>
        <legend>PERSONAL DETAILS</legend>
        <div>
          <label>Merital status:</label>
          <select name="MeritalStatus" required>
            <option> </option>
            <option>Married</option>
            <option>Widow</option>
            <option>Widower</option>
            <option>Divorced</option>
            <option>Single</option>
            </select>
        </div><br /><br />
        <div>
          <label>Main Bussiness:</label>
          <input type="alphabetic" name="Bussiness" size="30" />
        </div><br /><br />
        <div>
          <label>Any other bussiness:</label>
          <input type="alphabetic" name="OtherBussiness" size="30" />
        </div><br /><br />
        <br />
        <h3>Previous employment details:</h3>
        <br />
        <div>
          <label>Employer's details:</label>
          <input type="alphabetic" name="EmployerDetails" size="60" />
        </div>
        <br />
        <div>
          <label>Job description:</label>
          <textarea name="JobDescription" size="30"></textarea>
        </div>
        <br />
        <div>
          <label>Date of Employment:</label>
          <input type="date" size="30" name="DateOfEmployment">
        </div>
        <br />
        <div>
          <label>Last Drawn Salary:</label>
          <input type="numeric" size="30" name="LastSalary">
        </div>
        <br/>
        <div>
        <label>Remarks:</label>
        <textarea name="remarks" size="30" name="Remarks1"></textarea>
        </div>


        <div>
          <label>Any preference for a place of job:</label>
          <input type="text" size="30" name="PreferenceOfJob" required>
            
        </div><br /><br />
        <div>
          <label>Special Talent:</label>
          <textarea name="Special-Talent" size="30" placeholder="If there any special talent please type here"></textarea>
        </div>
          <br/>
        <div>
        <label>Language Known:</label>
        <select name="LanguageKnown" required>
          <option> </option>
          <option>Mizo</option>
          <option>English</option>
          <option>Spanish</option>
          <option>French</option>
          <option>Hindi</option>
          </select>
        </div>
        <div>
          <label>Any Physical weakness:</label>
          <select name="PhysicalWeakness" required>
          <option> </option>
            <option>Yes</option>
            <option>No</option>
            </select>
          <br/>
          <br/>
            <div>
            <textarea name="physicalweakness1" size="30" placeholder="If Yes,please type the details here "></textarea>
            </div>
            <br/>
            <br/>
            <div>
              <label>Any EyeSight problem:</label>
              <select name="EyesightProblem" required>
              <option> </option>
                <option>Yes</option>
                <option>No</option>
                </select>
            </div>
                <div>
                <label>Type:</label>
                <select name="EyesightProblemtype" >
                  <option> </option>
                  <option>Miopia</option>
                  <option>Hyperopia</option>
                  <option>Astigmatism</option>
                  <option>Presbiopia</option>
                  </select>
            </div>
            <br/>
           <div>
             <label>Height/Weight/Chest:</label>
             <input type="text" name="HeightWeightChest" size="60" placeholder="175cm/61kg/12cm">
           </div>
            <br/>
            <label>If any member of Union:</label>
            <select name="nemberofunion" required>
            <option> </option>
              <option>Yes</option>
              <option>No</option>
              </select>
              <textarea name="detailsunion" placeholder="If yes, Please type Name of Union and Branch of which is in a member"></textarea>
        </div>
        <br/>
        <div>
          <label>Minimum Salary expected:</label>
          <input type="munber" name="Salaryexpected" size="30" />
        </div><br /><br />
        <div>
          <label>Do you want to work in Army?</label>
          <select name="Army" required>
          <option> </option>
            <option>Yes</option>
            <option>No</option>
            </select>
        </div><br /><br />
      </fieldset>
    </div>
    <div>
      <fieldset>
        <legend>Only For People Who Have Previously served in the Army</legend>
        <div>
         <label>Name of Employer:</label>
         <input type="text" name="NameOfEmployer" size="30" >
         </div>
         <div>
         <label>Position:</label>
         <input type="text" size="30" name="Position" >
        </div>
        <div>
         <label>Regiment:</label>
         <input type="text" name="regiment" size="30">
        <div>
         <label>Date Of Joining:</label>
         <input type="date" name="DateOfJoining" >
        </div>
        <div>
         <label>Date Of Leaving:</label>
         <input type="date" name="DateOfLeaving" >
        </div>
        <div>
         <label>reasons for Leaving:</label>
         <textarea name="reasonsforleaving" size="30"></textarea>
        </div>
        </fieldset>
         <fieldset>
          <legend>Document Upload</legend>
          <br/>
          <label>Electoral ID card</label>
          <input Type="file" name="Voters_ID" required>
          <br/>
          <label>Applicants Photo</label>
          <input Type="file" name="Photo">
          <br/>
          <label>Birth Certificate</label>
          <input Type="file" name="DOBcertificate">
          <br/>
          <label>Educational Certificate</label>
          <input Type="file" name="PassCertificate">
          <br/>
          <!-- <label>Address Prove letter</label>
          <input Type="file" name="AddProve">
          <br/> -->
          <label>Work experiance Certificate</label>
          <input Type="file" name="WorkEx">
          <br/>
          <label>Medical Certificate</label>
          <input Type="file" name="Medical">
         <div>
           <br/>
           <label>Remarks/Commment:</label>
           <textarea name="Comments" size="255" required></textarea>
         </div>
         <br/>
         <div>
           <input type="checkbox" id="check" name="check" value="check">
           <label for="check">I hereby declare that all the documents atteched are verified with originals.</label>
           </div>
          </fieldset>
        </div>
        
           <br/>
           <div class="butt">
             <input type="Submit" >
           </div>
      </form>

      <script>
        var form = document.getElementById('check')
        form.onsubmit = function(){
          if(!form.agreement.checked)
            {
                alert("checkbox unchecked");
                return false;
            }
            return true;
           
        }
        </script>
        </div>
        </div>
   @endsection
