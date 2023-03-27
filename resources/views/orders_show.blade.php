<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar")
<h1>Order #{{request() -> route('id')}}</h1>
<table class="table">
    <tr>
        <th>Time Placed</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
        <th>Stock</th>
    </tr>
    @foreach($order_items as $oi)
    <tr>
        <td>{{$oi->time_placed}}</th>
        <td>{{$oi->name}}</td>
        <td>{{$oi->quantity}}</td>
        <td>₱{{$oi->price}}</td>
        <td>₱{{$oi->quantity * $oi->price}}
        <td>{{$oi->stock}}</td>
    </tr>
    @endforeach
</table>
</body>

</html>