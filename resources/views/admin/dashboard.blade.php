<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<style>
body {
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ69cqX7EQK-5asPFp7ZfjgMmpZ-ggl2szJtVF8FtnAfeX9gN5uIxxcCw83uEeUp7pANGI&usqp=CAU');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<body>
<div class="container">
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <br>
            <h4>Dashboard</h4><br>
            <table class="table table-hover">
            <thead>
            <th>Username</th>
            <th>Email</th>
            <th></th>
            </thead>
                <tbody>
                    <tr>
                    <td>{{ $LoggedUserInfo['Username'] }}</td>
                    <td>{{ $LoggedUserInfo['Email'] }}</td>
                    <td><a href="{{ route('auth.logout')}}">logout</a><td><a href ="/viewservices"  class="btn btn-primary">Book Service</a></td></tr></td>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>
