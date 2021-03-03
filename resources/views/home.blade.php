@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    You are logged in!
                    @if ( auth()->user()->role == 1)
                        <p><a href = "/csc">CONTINUE TO FORM</a></p>


                    @elseif ( auth()->user()->role == 2)
                        <p><a href = "/eDA">CONTINUE </p>
                    @elseif ( auth()->user()->role == 3)
                        <p><a href = "/SCapplicantinfo">CONTINUE </p> 
                        @elseif ( auth()->user()->role == 4)
                        <p><a href = "/live_search">CONTINUE </p> 
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>
@endsection