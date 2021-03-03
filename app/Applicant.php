<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Applicant extends Model
{
    protected $fillable = ['ApplicationDate','Name','Appletion','DateOfBirth','Religion','Caste',
    'Email','ContectNo','Gender','FatherName','Appletion1','FatherDateOfBirth','MotherName','MotherDateOfBirth',
    'SpouseName','HighestExamPassed','SubjectTaken','Rank','InstituteName','YearOfpassing','Remarks',
    'IDmarks','PresentHouseNumber','PresentSubLocality1','PresentSubLocality2','Location',
    'PresentSubDistrict','PresentState','PresentPINcode','PresentCountry','PrePoliceStation',
    'PrePostOffice','PermanentHouseNumber','PermanentSubLocality1','PermanentSubLocality2','PermanentLocation',
    'PermanentSubDistrict','PermanentState','PermanentPINcode','ApplicationDate','PermanentCountry',
    'PerPoliceStation','PerPostOffice','MeritalStatus','Bussiness','OtherBussiness','EmployerDetails',
    'JobDescription','DateOfEmployment','LastSalary ','Remarks1','Preferenceofjob','SpecialTalent',
    'LanguageKnown','PhysicalWeakness','physicalweakness1','EyesightProblem','EyesightProblemtype',
    'HeightWeightChest','nemberofunion','detailsunion','Salaryexpected','Army','NameOfEmployer',
'Position','regiment','DateOfJoining','DateOfLeaving','reasonsforleaving','Voters_ID','comments',
'created_at','updated_at'  ];   

protected $table = "applicants";
public $timestamps=true;
}
