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
       }
      .container{
          position: absolute;
          left: 25%;
          top:15%;
          padding-bottom:10px;
      }
      .card{
          height:7.375in;
          width:10.357in;
          padding:1.3rem 0 1.3rem 0;
          background-image: url(/image/id.jpg);

          background-size:218.4px 324px;
          border-radius: 20px;
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
        padding-left:3%;
      }
      .Pimg{
        position: absolute;
        right: 20px;
        top:15%;
        width: 150px;
        height:200px;
        padding: 10px;
        border-radius:10%;
      }
      .details{
         
          top:25%;
          position: absolute;
          font-weight:500;
          font-size:1.5rem;
          margin-top:.5rem;
          left:6%;
      }
      .details .dt b{
        width: 400px;
     display:inline-block;
     margin-left:3px ;
     font-size: 30px;
    
      }
      .Authority{
        position: absolute;
        right: 0px;
        top:70%;
        width: 300px;
        padding: 10px;
      }
      .Authority1{
        position: absolute;
        right: 0px;
        top:75%;
        width: 300px;
        padding: 10px;
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
            <h1 class="name">EMPLOYMENT REGISTRATION CARD</h1>
             <img class="img" src="/image/govtLogo.png" alt="">
             <img class="Pimg" style="width:20%" src="/storage/Voters_ID/{{$single_record->Voters_ID}}">
             <h3 class="Authority">Registering Authority </h3>
             <h3 class="Authority1">Aizawl: Mizoram </h3>
          </div>
          <div class="details">
          <h3 class="dt"><b>Registration No. :</b><td>{{$single_record->registration_id}}</td></h3>
          <h3 class="dt"><b>Name :</b><td>{{$single_record->Name}}</td></h3>
          <h3 class="dt"><b>D.O.B :</b><td>{{$single_record->DateOfBirth}}</td></h3>
          <h3 class="dt"><b>Father's Name :</b><td>{{$single_record->FatherName}}</td></h3>
          <h3 class="dt"><b>NCO Code :</b><td>{{$single_record->NCO_code}}</td></h3>
          <h3 class="dt"><b>Address :</b><td>{{$single_record->Location}}</td></h3>
          <h3 class="dt"><b>Date :</b><td>{{$single_record->ApplicationDate}}</td></h3>
        </div>
     </div>
    </div>
  </div>
</div>
</body>
</html>