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

class eo extends Controller
{
    //
    function index(){
        return view('eo');
    }
}
