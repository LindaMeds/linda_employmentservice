<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Database extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('applicants', function(Blueprint $table){
            $table->id();
            $table->string('registration_id')->unique();
            $table->string('NCO_code')->unique();

            $table->date('ApplicationDate')->nullable();
            $table->string('Name')->default(0);
            $table->string('Appelation')->nullable();
            $table->date('DateOfBirth')->nullable();
            $table->string('Religion')->nullable();
            $table->string('Caste')->nullable();
            $table->string('Email')->unique()->nullable();
            $table->biginteger('ContectNo')->unique()->nullable();
            $table->string('Gender')->nullable();
            
            $table->string('FatherName')->nullable();
            $table->string('Appelation1')->nullable();
            $table->date('FatherDateOfBirth')->nullable();
            $table->string('MotherName')->nullable();
            $table->date('MotherDateOfBirth')->nullable();
            $table->string('SpouseName')->nullable();

            $table->string('HighestExamPassed')->nullable();
            $table->string('SubjectTaken')->nullable();
            $table->biginteger('Rank')->nullable();
            $table->string('InstituteName')->nullable();
            $table->date('YearOfpassing')->nullable();
            $table->longtext('Remarks')->nullable();
            

            $table->string('IDmark')->nullable();
            $table->string('PresentHouseNumber')->nullable();
            $table->string('PresentSubLocality1')->nullable();
            $table->string('PresentSubLocality2')->nullable();
            $table->string('Location')->nullable();
            $table->string('PresenttSubDistrict')->nullable();
            $table->string('PresentState')->nullable();
            $table->biginteger('PresentPINcode')->nullable();
            $table->string('PresentCountry')->nullable();
            $table->string('PrePoliceStation')->nullable();
            $table->string('PrePostOffice')->nullable();


            $table->string('PermanentHouseNumber')->nullable();
            $table->string('PermanentSubLocality1')->nullable();
            $table->string('PermanentSubLocality2')->nullable();
            $table->string('PermanentLocation')->nullable();
            $table->string('PermanentSubDistrict')->nullable();
            $table->string('PermanentState')->nullable();
            $table->string('PermanentPINcode')->nullable();
            $table->string('PermanentCountry')->nullable();
            $table->string('PerPoliceStation')->nullable();
            $table->string('PerPostOffice')->nullable();


            $table->string('MeritalStatus')->nullable();
            $table->string('Bussiness')->nullable();
            $table->string('OtherBussiness')->nullable();
            $table->string('EmployerDetails')->nullable();
            $table->string('JobDescription')->nullable();
            $table->date('DateOfEmployment')->nullable();
            $table->biginteger('LastSalary')->nullable();
            $table->string('Remarks1')->nullable();
            $table->string('PreferenceOfJob')->nullable();


            $table->string('SpecialTalent')->nullable();
            $table->string('LanguageKnown')->nullable();
            $table->string('PhysicalWeakness')->nullable();
            $table->string('physicalweakness1')->nullable();
            $table->string('EyesightProblem')->nullable();
            $table->string('EyesightProblemtype')->nulllable();
            $table->string('HeightWeightChest')->nullable();
            $table->string('nemberofunion')->nullable();
            $table->string('detailsunion')->nullable();
            $table->biginteger('Salaryexpected')->nullable();
            $table->string('Army')->nullable();
            

            $table->string('NameOfEmployer')->nullable();
            $table->string('Position')->nullable();
            $table->string('regiment')->nullable();
            $table->date('DateOfJoining')->nullable();
            $table->date('DateOfLeaving')->nullable();
            $table->string('reasonsforleaving')->nullable();;


            $table->string('Voters_ID')->nullable();
           $table->string('Photo')->nullable();
            $table->string('DOBcertificate')->nullable();
            $table->string('PassCertificate')->nullable();
            $table->string('WorkEx')->nullable();
            $table->string('Medical')->nullable();
            $table->string('Comments')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('applicants');
    }
}