<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewservices</title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KWIK WASH</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <a class="btn btn-success" href="/orderplace" type="button"> MY BOOKINGS</a>
      </ul>
    </div>
    <a class="btn btn-success" href="/auth/login" type="button"> SIGN IN</a>
<a class="btn btn-success" href="/auth/register" type="button"> SIGN UP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
  </div>
</nav>
<body>
<style>
body {
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKqSA9GEC8jLXm7No-OzvqStkrUrkK-UJNnsynk26zpDTtpkD1wvDzhpgn3xvHCFg6D0U&usqp=CAU');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<div class="trending-wrapper">
        <i><h2><b>Our Services</b></h2></i>
        @foreach($viewservices as $servicedetails)
        <div class="new-services">
        <a href="detail/{{$servicedetails['id']}}">
         
          <img class="Our-Services" src="{{$servicedetails['gallery']}}">
          <div class="">
            <h4>{{$servicedetails['service']}}</h4>
          </div>
        </a>
        </div>

        @endforeach
      </div>
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>   
</body>
<style>
.Our-Services{
  height:140px;
}
</style>
<style>
.new-services{
  float:left;
  width:40%;
}
</style>
<style>
.trending-wrapper{
  margin:60px;
}
</style>
</html>