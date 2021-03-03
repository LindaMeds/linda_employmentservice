<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Controllers\eDA;
use App\Http\Controllers\clerk;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
 });
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/eDA', 'eDA@index');
Route::get('/eo', 'eo@index');
Route::get('/clerk', 'clerk@index');


//Route::get('/applicantinfo','ApplicantController@index');
//Route::get('/SCapplicantinfo', [ApplicantController::class,'index2']);
//Route::get('/EOapplicantinfo','ApplicantController@index3');

Route::get('/applicants/{id}','ApplicantController@show');
Route::get('/SCview/{id}','ApplicantController@show1');

Route::delete('/Applicant/{person}','ApplicantController@destroy')->name('Applicant.destroy');
Route::post('/applicant/{id}/remarks','clerk@rejStore');


Route::post('/approved/{id}','ApplicantController@approved')->name('Applicant.approved');


Route::get('/csc',[ApplicantController::class,'index1']);
Route::post('/submit', [ApplicantController::class,'store'])->name('Applicant.store');

Route::post('/users/{id}', [eDA::class,'issue'])->name('User.issue');
Route::get('/cscview', function () {
       return view('cscview');
     });

Route::get('/download1/{id}','ApplicantController@download')->name('Applicant.download');
Route::get('/eodownload/{id}','clerk@download')->name('clerk.download');

Route::get('/eopage', function () {
    return view('eopage');
  });
Route::get('/edaview', function () {
    return view('edaview');
  });

Route::get('/remarks/{id}','clerk@Signview')->name('Applicant.Signview');
Route::get('/Eoview/{id}','ApplicantController@eoview');

Route::get('/EOapplicant', 'LiveSearch@index');
Route::get('/EOapplicant/action', 'LiveSearch@action')->name('live_search.action');

Route::get('/applicantinfo', 'csc@index1');
Route::get('/applicantinfo/action', 'csc@action')->name('csc.action');

Route::get('/SCapplicantinfo', 'scSearch@index2');
Route::get('/SCapplicantinfo/action', 'scSearch@action')->name('scSearch.action');

//Route::get('/searchView', 'searchController@index2');
//Route::get('/SCapplicantinfo/action', 'searchController@action')->name('searchController.action');

Route::get('/count/action', 'HomeController@count')->name('HomeController.count');
