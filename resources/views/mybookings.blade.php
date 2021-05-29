<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookings</title>
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
    
    <ul class="navbar-nav navbar-left">
          <a class="btn btn-secondary" href="/" type="button">LOGOUT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
          </ul>
    
    </ul>
    
  </div>
  </div>
</nav>
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My bookings </h4>
           @foreach($viewservices as $servicedetails)
            
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$servicedetails->id}}">
                    <img class="trending-image" src="{{$servicedetails['gallery']}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>Service: {{$servicedetails->service}}</h2>
                      <h5>Delivery Status : {{$servicedetails->status}}</h5>
                      <h5>Address : {{$servicedetails->address}}</h5>
                      <h5>Payment Status : {{$servicedetails->payment_status}}</h5>
                      <h5>Payment Method : {{$servicedetails->payment_method}}</h5>
                      <h5>Pickup date : {{$servicedetails->pickup_date}}</h5>
                      <h5>Delivery date: {{$servicedetails->delivery_date}}</h5>
                    </div>
             </div>
            </div>
            @endforeach
     </div>
</div>
</body>
</html>
