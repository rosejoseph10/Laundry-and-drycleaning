
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
    
<div class="custom-product">
     <div class="col-sm-10">
        <table class="table">
         
            <tbody>
            <tr>
            <td>Quantity</td>
            <td>{{$quantity}}</td>
            </tr>
              <tr>
                <td>Amount</td>
              <td>Rs {{$total->price}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery Charges</td>
                <td>Rs 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
              <td>Rs {{$int}}</td>
              </tr>
            </tbody>
          </table>
          <div>
           <form action="/mybookings" method="POST" >
              @csrf 
              <input type="hidden" name="service_id" value="{{$total->id}}">
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                </div><br>
            Item : {{$Item}} <br>
            <input type="hidden" name="item" value="{{$item}}">
            <input type="hidden" name="quantity" value="{{$quantity}}">
            <br>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="online" name="payment"> <span>Online Payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>Cash on Delivery</span> <br> <br>
                  <label for="pwd"> Pickup date:</label> 
                 <input type="date" id="pickupdate" name="pickup_date"><br> <br>  
                 <label for="pwd"> Delivery  date:</label> 
                  <input type="date" id="deliverydate" name="delivery_date"><br> <br>
                </div>
                <button type="submit" class="btn btn-primary">Book Now</button>
              </form>
          </div>
     </div>
</div>
</body>
</html>