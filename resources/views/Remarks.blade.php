<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remarks</title>
    <style>
      .subs{
          text-align:center;

      }
    </style>
</head>
@section ('content')
<body>
<form action="/applicant/{{$applicant->id}}/remarks/action" method="POST" enctype = "multipart/form-data">
    @csrf
    <div class="subs">
           <textarea id="Sign" name="Sign" row="5" column="50" required></textarea>
           <button type="submit">Submit</button>
         </div>

</form>
</body>
</html>