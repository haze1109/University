<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
    <style>
        .table{
            /* Styles for the table */
table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 1rem;
}

th, td {
  padding: 0.5rem;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

/* Styles for the form */
form {
  margin-bottom: 2rem;
}

label {
  display: block;
  margin-bottom: 0.5rem;
}

input[type="number"] {
  width: 4rem;
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0069d9;
}

/* Styles for the heading */
h1 {
  margin-bottom: 1rem;
}

@media only screen and (max-width: 768px) {
  /* Adjust the font size and padding for small screens */
  th, td {
    font-size: 0.8rem;
    padding: 0.3rem;
  }
  
  input[type="number"] {
    width: 3rem;
    padding: 0.3rem;
  }
  
  input[type="submit"] {
    padding: 0.3rem 0.5rem;
  }
  .container {
    max-width: 100%;

  }
  
 }
        }
    </style>
</head>

<body>
@include("layouts/navbar-user")
<div class="container">


<h1 class="pt-2 mb-2">Cafeteria</h1>
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
</div>
</body>

</html>