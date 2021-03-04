<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>download Page</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   Registration ID: {{$single_record->registration_id}}<br>
                   Name: {{$single_record->Name}}<br>
                   NCO_Code: {{$single_record->NCO_code}}<br>
                   Status : {{$single_record->status}}<br>
                   <a href="/eodownload/{{$single_record->id}}">Download</a>
                </div>

            </div>
        </div>
    </div>                         
</body>
</html>