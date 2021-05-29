<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KWIK WASH</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      </ul>
    </div>
    <ul class="nav navbar-nav navbar-right">
    
    <a class="btn btn-success" href="/auth/login" type="button"> SIGN IN</a>
    <a class="btn btn-success" href="/auth/register" type="button"> SIGN UP</a>
    </ul>
    
  </div>
  </div>
</nav>
<div class="container">
   <div class="row"><br>
   
   <center>
   @if(Session::get('success'))
    <div class="alert alert-success">
    {{ Session::get('success')}}
    </div>
    @endif
       <div class="col-sm-6">
       <img class="detail-img" src="{{$viewservices['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
           <a href="/viewservices">Go Back</a>
       <h2>{{$viewservices ['service']}}</h2>
       <h3>features: {{$viewservices['features']}}</h3>
       <h3>unit: {{$viewservices['unit']}}</h3>
       <h3>price: {{$viewservices['price']}}</h3>
       </center>
       

       <br><br>
       <style>
       .detail-img{
        height:250px;
        }
        </style>
      <input type="hidden" name="service_id" value="{{$viewservices['id']}}">
        <center><a  class="btn btn-primary" href="/booknow{{$viewservices['id']}}" >BOOK NOW</a></center>
  
       <br><br>
       
    </div>
   </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>   
</body>
</html>