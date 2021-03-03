<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identification Card</title>
    <style>
       *{
           box-sizing:border-box;
           position: center;
       }
      .container{
          position: center;
          left: 5%;
          right:15px;
          top:15%;
          padding-bottom:5px;
      }
      .card{
          height:5.375in;
          width:7.657in;
          padding:1.3rem 0 1.3rem 0;
          background-size:200.4px 310px;
          border-radius: 20px;
          border:2px solid black;
      }
      .name{
          position:absolute;
          font-weight:500;
          font-size:2rem;
          margin-top:.5rem;
          top:4.3%;
          left:16%;
      }
      .img{
        float:left;
        width:110px;
        height: auto;
        padding-left:0%;
      }
      .Pimg{
        position: absolute;
        right: 20px;
        top:15%;
        width: 130px;
        height:150px;
        padding: 10px;
        border-radius:10%;
      }
      .details{
        top:15%;
        position: absolute;
        font-weight:200;
        font-size:1.5rem;
        margin-top:.5rem;
        left:3%;
        width:900px;
      }
      .details b{
       width: 200px;
       display:inline-block;
       margin-left:3px ;
       font-size: 20px;
    
      }
      .Authority{
        position: absolute;
        right: 0px;
        top:45%;
        width: 200px;
        padding: 10px;
      }
      .Authority1{
        position: absolute;
        right: 10px;
        top:48%;
        width: 150px;
        padding: 10px;
      }
      h2{
        font-size:15px;
        top:10%;
      }
      form{
       text-align:center;
       padding-top:30px;
       padding-bottom:50px;

    }
      button{
       text-align:center;
       color:red:
       font-size:80px;
       padding:15px;
       border:center;
       text:50px;
     
    </style>
</head>
<body>
<div class="container">
 <div class="row">
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card">
        <div class="text-xenter">
          <div class="pp">
            <h3 class="name">EMPLOYMENT REGISTRATION CARD</h3>
             <img class="img" src="{{public_path('/image/govtLogo.png')}}" alt="">
             <h3 class="Authority">Registering Authority </h3>
             <h3 class="Authority1">Aizawl: Mizoram </h3>
          </div>
          <div class="details">
          <h3 class="dt"><b>Registration No. :</b><b>{{$single_record->registration_id}}</b></h3>
          <h3 class="dt"><b>Name :</b><b>{{$single_record->Name}}</b></h3>
          <h3 class="dt"><b>D.O.B :</b><b>{{$single_record->DateOfBirth}}</b></h3>
          <h3 class="dt"><b>Father's Name :</b><b>{{$single_record->FatherName}}</b></h3>
          <h3 class="dt"><b>NCO Code :</b><b>{{$single_record->NCO_code}}</b></h3>
          <h3 class="dt"><b>Address :</b><b>{{$single_record->Location}}</b></h3>
          <h3 class="dt"><b>Date :</b><b>{{$single_record->ApplicationDate}}</b></h3>
        </div>
     </div>
    </div>
  </div>
</div>
</div>
</body>
</html>