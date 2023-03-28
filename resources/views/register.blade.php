<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
    <style>
        /* Register Form CSS */
form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f9f9f9;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}

h1 {
  text-align: center;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  margin-top:0px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  display: block;
  width: 100%;
  padding: 5px;
  margin-bottom: 5px;
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
<h1 class="text-center pt-2 mb-2">Register</h1>
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