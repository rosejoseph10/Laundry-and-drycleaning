<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KWIK WASH</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav navbar-left">
      </ul>
  </div>
</nav>
<br>
<div class="container">
   <h3><center><u><b>FEEDBACK DETAILS</center></u></h3><button id="hide" class="btn btn-dark"onclick="window.print()">Print</button></b><br>
      <div id="hide">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
  </div>

</nav>

<style>
body {
  background-image: url('https://cdn5.vectorstock.com/i/1000x1000/01/99/wooden-table-against-a-bokeh-lights-background-vector-21570199.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</div>

    <table class="table">
    <tr>

        <th style="background-color:black ; color:white;"><center>name</center></th>
        <th style="background-color:black ; color:white;"><center>email</center></th>
        <th style="background-color:black ; color:white;"><center>subject</center></th>
        <th style="background-color:black ; color:white;"><center>message</center></th>


    </tr>

    @foreach($viewfeedback as  $viewfeedback )
            <tr>

                <td><center>{{ $viewfeedback->name }}</center></td>
                <td><center>{{ $viewfeedback->email }}</center></td>
                <td><center>{{ $viewfeedback->subject }}</center></td>
                <td><center>{{ $viewfeedback->message }}</center></td>

            </tr>
            @endforeach

            </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>
