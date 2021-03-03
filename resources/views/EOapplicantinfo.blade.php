@extends('layouts.master')

@section('content')

<div class="row">
   <div class="col-md-12">
     <br/>
    <h2 align="center"> Applicants Data</h2>
    <!-- <table class="table table-bordered"> -->
    @if (count($persons) > 0)
    <table border="1px" style="width:100%">
    <tr>
        <th>Applicantion date</th>
        <th>Applicants Name</th>
        <th>Date Of Birth</th>
        <th>Caste</th>
        <th>Email id</th>
        <th>Contect number</th>
        <th>Status</th>
        <th>Action</th>

    </tr>

    @foreach($persons as $person)
    
       <tr>
         <td><a href="/Eoview/{{$person->id}}">
         {{$person->ApplicationDate}}</a></td>
         <td>{{$person->Name}}</td>
         <td>{{$person->DateOfBirth}}</td>
         <td>{{$person->Caste}}</td>
         <td>{{$person->Email}}</td>
         <td>{{$person->ContectNo}}</td> 
         <td>{{$person->status}}</td>
       <td>
      <form method="post" class="delete_form" action="{{route('Applicant.destroy', $person->id)}}">
        {{ @csrf_field() }}
        {{ method_field('DELETE') }} 
        <input type="submit" class="btn btn-danger delete-user" value="delete">
        </form>
    </td>
    @endforeach
       
    </table>
    @else
      Nothing here
    @endif
</div>
</div>

