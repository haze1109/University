<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar-user")
<h1>Profile Edit</h1>
</body>
<form action="/profile/edit" method="POST">
    @csrf
    <label>Mobile number</label>
    <input type="number" name="mobile_number" value="{{$student->mobile_number}}"></input><br>
    <label>Email address</label>
    <input type="email" name="email_address" value="{{$student->email_address}}"></input><br>
    <button type="submit">Save</button>
</form>
</html>