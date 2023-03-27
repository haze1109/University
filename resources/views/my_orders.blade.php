<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar-user")
<h1>My Orders</h1>
@if(count($orders))
<p>Your order is {{$orders[0]->status}}.</p>
<img src="/img/cook.gif" style="width:200px;">

<h2>Order Details</h2>
<table class="table">
@foreach($orders as $order)
<tr>
    <td>{{$order->name}}</td>
    <td>x{{$order->quantity}}</td>
    <td>₱{{$order->quantity * $order->price}}</td>
</tr>
@endforeach
</table>

<p><strong>Total price: </strong>₱{{$total_price[0]->total_price}}</p>
@if($orders[0]->status == "delivered")
<form action="/orders/confirm" method="POST">
    @csrf
    <input type="submit" class="btn btn-success" value="Order Received">
</form>
@endif
@if($orders[0]->status == "waiting" or $orders[0]->status == "approved")
<form action="/orders/cancel" method="POST">
    @csrf
    <input type="submit" class="btn btn-danger" value="Cancel">
</form>
@endif
@else
    <p>You have no orders ongoing!</p>
@endif
<h2>Order History</h2>
@if(count($history))
<table class="table">
@foreach($history as $h)
<tr>
    <td>{{$h->order_id}}</td>
    <td>{{$h->status}}</td>
    <td>{{$h->time_placed}}</td>
    <td>₱{{$h->total_price}}</td>
</tr>
@endforeach
@else
<p>No history yet!</p>
@endif
</table>
</body>

</html>