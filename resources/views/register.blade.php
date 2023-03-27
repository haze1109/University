<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar-user")
<h1>Register</h1>
<form action="/register" method="POST">
    @csrf
    <label>First name:</label>
    <input type="text" name="first_name"></input><br>
    <label>Last name:</label>
    <input type="text" name="last_name"></input><br>
    <label>Email address:</label>
    <input type="email" name="email"></input><br>
    <label>Password:</label>
    <input type="password" name="password"></input><br>
    <label>Confirm password:</label>
    <input type="password" name="con_password"></input><br>
    <label>Student ID:</label>
    <input type="text" name="student_id"></input><br>
    <button type="submit">Submit</button>
</form>
</body>

</html>