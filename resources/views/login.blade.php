<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
    <style>
        /* Login Form CSS */
form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}

label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
}

input[type="email"],
input[type="password"] {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #1abc9c;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #16a085;
}

    </style>
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