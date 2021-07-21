<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry and Dry cleaning</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KWIK WASH</a>
        <!-- <li class="nav-item">
        <a class="btn btn-success" href="/adminreg" type="button">REGISTER</a>
        </li>  -->
  </div>
</nav>

<style>

body {
  background-image: url('https://ak4.picdn.net/shutterstock/videos/1008749414/thumb/1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
    <div class="container">
    <div class="row" style ="margin-top:150px">
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
    <br> <br> <br>
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    <h4><centre><b>ADMIN</h4>
    <form action="{{route('adminregister')}}" method="post">
    @if(Session::get('fail'))
    <div class="alert alert-danger">
    {{ Session::get('fail')}}
    </div>
    @endif
    @csrf
    <div class="form-group">
        <label>	Email</label>
    <input type="text" class="form-control" name="Email" placeholder=" Enter Email" value="{{ old ('Email') }}">
    <span class="text-danger">@error('Email') {{ $message }} @enderror</span>
    </div> <br>
    <div class="form-group">

        <label>Password</label>
    <input type="Password" class="form-control" name="Password" placeholder=" Enter Password">
    <span class="text-danger">@error('Password') {{ $message }} @enderror</span>   </div> <br>
    <button type="submit" class=" btn btnblock btn-success"> Login</button>
    <br>
    </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>
