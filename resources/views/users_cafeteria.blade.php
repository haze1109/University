<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar-user")
<h1>Cafeteria</h1>
@if(!count($orders))
<form action="/cafeteria" method="POST">
@csrf
<table class="table">
    <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Order</th>
    </tr>
    @foreach ($menu as $m)
    <tr>
        <td>{{$m -> name}}</td>
        <td>₱{{$m -> price}}</td>
        <td><input type="number" name="order_{{$m -> product_id}}" value="0"></td>
    </tr>
    @endforeach
</table>
<input type="submit" class="ms-4 mb-4">
</form>
@else
<p><a href="/orders">An order is ongoing!</a></p>
@endif

</body>

</html>