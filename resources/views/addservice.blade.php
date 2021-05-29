<!DOCTYPE html>
<html lang="en">
   <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kwik Wash</title>
    <!-- Latest compiled and minified CSS -->

<div class="bg-image"
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 ">
 </div>
 <div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 ">
 <br><br>
 
 <form action="/addservice/add" method="post" enctype="multipart/form-data">
   @csrf
    <br>

 <table class="table table-dark table-borderless "id="ip3" >
<tr><td></td><td><h2><b>Add Service</b></h2> </td></tr>

 
 <tr>
     <td><center> service</center></td>
     <td><input name="service"   type="text" class="form-control"  placeholder="service " required>
  </td>
 </tr>
 <tr>
     <td><center>features</center></td>
     <td><input name="features"   type="text" class="form-control"  placeholder="features" required>
     </td>
 
 
 </tr>
 <tr>
     <td><center>unit</center></td>
     <td><input name="unit"   type="text" class="form-control" placeholder=" unit" required>

     </td>
 </tr>
 <tr>
     <td><center>Price</center></td>
     <td><input name="price"   type="text" class="form-control" placeholder=" Price" required>

     </td>
 </tr>
 <tr>
    <td><center>gallery</center></td>
    <td><input type="text" name="gallery" class="form-control" placeholder=" gallery" required></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" value="add" /> </td>
    
 </tr>
 </form>
 </table>
 </div>
 </div>
 <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">

 
</div>
<style>
   body {
  background-image: url('https://c0.wallpaperflare.com/preview/415/627/603/clothes-line-clothes-pins.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  height: 10vh;
}
</style>
          
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
</html>