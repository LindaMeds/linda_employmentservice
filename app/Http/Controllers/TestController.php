<?php

namespace App\Http\Controllers;

use App\test;
use Illuminate\Http\Request;

class TestController extends Controller
{
 
    public function index()
    {
        return "i am in index";
    }

  
    public function create()
    {

        return view('test');

    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show(test $test)
    {
        //
    }


    public function edit(test $test)
    {
        //
    }

  
    public function update(Request $request, test $test)
    {
        //
    }

   
    public function destroy(test $test)
    {
        //
    }
}
