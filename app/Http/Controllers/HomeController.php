<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    function count(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      ($query != '');
      {
       $data = DB::table('applicants')
         ->orderBy('Name', 'desc')
         ->get();
         
      }
      //dd($data);
      $total_row = $data->count();
      ($total_row > 0);
      
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
    
}
