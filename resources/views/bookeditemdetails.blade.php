<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
 <div class="container" style="margin-left:100px;">
        <div class="row">
            <h3 class="display-4 text-danger">Booked Item Details</h3>
            <div class="col-md-12">
<table class="table  table-striped table-responsive table-left">
<thead class="thead-dark">
 <tr class="dark">
 <th scope="col">id</th>
 <th scope="col">service_id</th>
 <th scope="col">admin_id</th>
 <th scope="col">status</th>
 <th scope="col">payment_method</th>
 <th scope="col">payment_status</th>
 <th scope="col">pickup_date</th>
 <th scope="col">delivery_date</th>
 <th scope="col">address</th>
 <th scope="col">service</th>
 <th scope="col">features</th>
 <th scope="col">item</th>
 <th scope="col">quantity</th>
 <th scope="col">unit</th>
 <th scope="col">price</th>
 <th scope="col">gallery</th>
 </tr>
 </thead>
<tbody>
@foreach($viewservices as $d)
 <tr>
 <td>{{$d->obid}}</td>
 <td>{{$d->service_id}}</td>
 <td>{{$d->admin_id}}</td>
 <td>{{$d->status}}</td>
 <td>{{$d->payment_method}}</td>
 <td>{{$d->payment_status}}</td>
 <td>{{$d->pickup_date}}</td>
 <td>{{$d->delivery_date}}</td>
 <td>{{$d->address}}</td>
 <td>{{$d->service}}</td>
 <td>{{$d->features}}</td>
 <td>{{$d->item}}</td>
 <td>{{$d->quantity}}</td>
 <td>{{$d->unit}}</td>
 <td>{{$d->price}}</td>
 <td><img src={{$d->gallery}}/></td>
 
 <td><a href="/deletebooking/{{$d->obid}}" class="btn btn-primary" >Delete</a></td>
       
@endforeach
</tbody>
</table>
</div>
</div>
</div>

</html>