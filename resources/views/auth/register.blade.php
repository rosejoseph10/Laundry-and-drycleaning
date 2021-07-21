<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KWIK WASH</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/ ">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>

  </div>
</nav>
<style>
body {
  background-image: url('https://th.bing.com/th/id/OIP.NL8RgBj6CfF_qM1vI7fGAgHaDO?pid=ImgDet&w=2200&h=960&rs=1');
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
    <h4><centre><b>REGISTER</h4>
    <form action="{{ route('auth.save') }}" method="post">
    @if(Session::get('Success'))
    <div class="alert alert-success">
    {{ Session::get('Success')}}
    </div>
    @endif
    @if(Session::get('Fail'))
    <div class="alert alert-danger">
    {{ Session::get('Fail')}}
    </div>
    @endif
    @csrf
    <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" name="Username" placeholder=" Enter  username" value="{{ old('Username') }}">
    <span class="text-danger">@error('Username') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="Email" placeholder=" Enter your Email" value="{{ old('Email') }}">
    <span class="text-danger">@error('Email') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Phnno</label>
    <input type="number" class="form-control" name="Phnno" placeholder=" Enter your Phnno" value="{{ old('Phnno') }}">
    <span class="text-danger">@error('Phnno') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="Password" placeholder=" Enter the Password">
    <span class="text-danger">@error('Password') {{ $message }} @enderror</span>
    </div>
    <br>
    <button type="submit" class="btn btn-block btn-success">Sign Up</button>
    <br>
    <a href="{{ route('auth.login') }}">i already have an account, Sign in</a>
    </form>
    </div></div>
    </div>
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
