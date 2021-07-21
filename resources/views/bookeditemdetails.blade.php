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
            <h2 class="display-4 text-danger"><b>BOOKED ITEM DETAILS</b></h2>
            <br>
            <br>
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
 <style>
                        body {
                        background-image: url('data:image/jpeg;base64,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');
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-size: cover;
                        height: 400vh;
                        }
                        </style>

@endforeach
</tbody>
</table>
</div>
</div>
</div>

</html>
