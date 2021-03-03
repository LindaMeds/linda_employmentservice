<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class liveSearch extends Controller
{
  function index()
  {
   return view('EOapplicant');
  }

  function action(Request $request)
  {
   if($request->ajax())
   {
    $output = '';
    $query = $request->get('query');
    if($query != '')
    {
     $data = DB::table('applicants')
       ->where('Name', 'like', '%'.$query.'%')
       ->orWhere('DateOfBirth', 'like', '%'.$query.'%')
       ->orWhere('registration_id', 'like', '%'.$query.'%')
       ->orWhere('Email', 'like', '%'.$query.'%')
       ->orWhere('ContectNo', 'like', '%'.$query.'%')
       ->orWhere('status', 'like', '%'.$query.'%')
       ->orderBy('Name', 'desc')
       ->get();
       
    }
    else
    {
     $data = DB::table('applicants')
       ->orderBy('Name', 'desc')
       ->get();
    }
    //dd($data);
    $total_row = $data->count();
    if($total_row > 0)
    {
     foreach($data as $row)
     {
      $output .= '
      <tr>
      <td><a href="/Eoview/'.$row->id.'">'.$row->Name.'</a></td>
      <td>'.$row->DateOfBirth.'</td>
      <td>'.$row->registration_id.'</td>
      <td>'.$row->Email.'</td>
      <td>'.$row->ContectNo.'</td>
      <td>'.$row->status.'</td>
      </tr>
      ';
     }
    }
    else
    {
     $output = '
     <tr>
      <td align="center" colspan="5">No Data Found</td>
     </tr>
     ';
    }
    $data = array(
     'table_data'  => $output,
     'total_data'  => $total_row
    );

    echo json_encode($data);
   }
  }
}
