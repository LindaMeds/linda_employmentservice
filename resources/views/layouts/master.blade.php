<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Applicants Data</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
     rel="stylesheet" 
    integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <!-- Styles -->
    <style>
      table, th, td{
      border:2px solid black;
      border-collapse:collapse;
      padding-bottom: 50px;
    }
     td{
      padding:10px;
      text-align:left;
      font-size:15px;
      font-weight:100;
    }
    th{
        border:4px solid black;
      padding:10px;
      text-align:left;
      font-size:25px;
      font-weight:100;
    }
    h2{
      text-align:center;
      color:solid black;
      font-size:40px;
    }
    </style>
</head>
<body>



        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
                       
                    
</body>
</html>



