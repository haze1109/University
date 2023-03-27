<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar-user")
<h1>Login</h1>
<form action="/login" method="POST">
    @csrf
    <label>Email address:</label>
    <input type="email" name="email"></input><br>
    <label>Password:</label>
    <input type="password" name="password"></input><br>
    <button type="submit">Login</button>
</form>
</body>

</html>