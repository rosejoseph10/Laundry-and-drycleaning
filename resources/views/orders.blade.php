<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
</head>
<body>
<form action="/" method="post">
{{csrf_field()}}
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KWIK WASH</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/about">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/viewservices">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/vieworders">Contact Us</a>
        </li>
      </ul>
    </div>
    
    </nav>
    <style>
body {
  background-image: url('https://cdn.wallpapersafari.com/27/91/sv7ZAy.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
    
    <div class="container">
    <div class="row">
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3"></div>
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
    <h2><centre>Order Here...</centre></h2> 

    <form action="#" method="post">
   
     <tbody>
     <tr>
     <td>
     
     <div class="form-group">
        
          <strong>Name</strong>
            <input type="text" class="form-control"  name="Name" >
            <div class="controls">
            
     </div>
     </td>
     </tr>
     </tbody>
     <br>
    
     <tbody>
     <tr>
     <td>
     <div class="form-group">
   <strong>Address</strong> <input type="text" class="form-control"   name="Address">
            <div class="controls">
            </div>
     
     </td>
     </tr>
     </tbody>

     <br>
   
    
     <tbody>
     <tr>
     <td>        
     <strong>Pincode</strong><input type="text" class="form-control" name="Pincode">
            <div class="controls">
     </div>
     </td>
     </tr>
     </tbody>
     <br>


    
     <tbody>
     <tr>
     <td>
           
     <strong>city</strong><input type="text" class="form-control" name="city">
            <div class="controls">
     </div>
     </td>
     </tr>
     </tbody>
  
    <br>
    
    
     <tbody>
     <tr>
     <td>
          
     <strong>Mobile</strong><input type="text" class="form-control" name="Mobile">
            <div class="controls">
     </div>
     </td>
     </tr>
     </tbody>
    
<br>
    
<tbody>
     <tr>
     <td>
           
           <strong>Item_name</strong><input type="text" class="form-control" name="Item_name">
            <div class="controls">
     </div>
     </td>
     </tr>
     </tbody>
   
    
<br>


   
     <tbody>
     <tr>
     <td>
           
           <strong>Item_quantity</strong><input type="text" class="form-control" name="Item_quantity">
            <div class="controls">
     </div>
     </td>
     </tr>
     </tbody>
   <br>
   

   <tbody>
     <tr>
     <td>
           
           <strong>Service</strong><input type="text" class="form-control" name="Service">
            <div class="controls">
     </div>
     </td>
     </tr>
     </tbody>
   <br>


   <tbody>
     <tr>
     <td>
           
           <strong>Amount</strong><input type="text" class="form-control" name="Amount">
            <div class="controls">
     </div>
     </td>
     </tr>
     </tbody>
   <br>


              <tbody>
              <tr>
              <td>
                                   
                     <strong>Order_date</strong><input type="text" class="form-control" name="Order_date">
                                   <div class="controls">
                            </div>
                            </td>
                            </tr>
                            </tbody>
                            <br>
    <tr>
    <button class="btn btn-primary" onclick="Thanks()">Submit</button>
    </tr>
     </form>
    </div>
    </div>
    </div>
   
 <script>
 
 function Thanks(){
   alert("Order Placed");
 }
 </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</html>
