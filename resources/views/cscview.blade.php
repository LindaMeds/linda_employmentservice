@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CSC Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>The form has been successfully submitted!!!</h2>

                  <p>If you want to resubmit your Application <a href="/csc">Click Here</a></p>
                   @if ( Session::has('success'))
             <p class="alert alert-success">{{session('success')}}</p>
             <p><a href="/download1/{{session('user')}}">Click here to download the Application details</a></p>
              @endif


            <p> Download the Applicants Registration Card Here<a href="/eodownload/{{'$single_record->id'}}">  Download</a></p>   
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection