<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Linda</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="/css/style1.css" rel="stylesheet">
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('home') }}">Home</a>                       
                    @else
                        <a href="{{ route('login') }}">Login</a>
                       

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <div class="content">
            <img src="/image/lin1.jpg" alt="Cover Image">
                <div class="title m-b-md">
                   EMPLOYMENT SERVICE
                  
                </div>

                <div class="links">
                    <a href="/ui"><i class="fa fa-users"></i> About us</a>
                   <!-- <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->

                    <header>
                    </div>
        <div class="main">
            <div class="logo">
            
                <img src="/image/logo2.jpg" alt="Cover Image">
            </div>
            <ul>
               <li class="active"><a href="#">Home</a></li>
               <li><a href="/register">New Registration</a></li>
               <li><a href="/login">Department Login</a></li>
               <!-- <li><a href="#">User Login</a></li>
               <li><a href="#">Services</a></li> -->
            </ul>
        </div>
        <div class="title">
           <!-- <h2>EMPLOYMENT SERVICE</h2>-->
            <h4>Goverment of Mizoram</h4>
            <h3>ENROLLMENT IN EMPLAYMENT EXCHANGE</h3>
        </div>

        <div class="bottomright">
            <a href="#" class="btn">LEARN MORE</a>
          <p>Check Applicants Status  <a href="/searchView"  class="btn">CHECK</a></p>

        </div>
    </header>
            
            </div>
        </div>
    </body>
</html>
