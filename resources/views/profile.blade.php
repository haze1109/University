<!DOCTYPE html>
<html lang="en">

<head>
     @include("layouts/head")
    <title>Document</title>
    <style>
        /* Profile Page CSS */
body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  color: #333;
  background-color: #f9f9f9;
  margin: 0;
  margin-right:10px;
  margin-left:10px;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

h1 {
  text-align: center;
  margin-top: 0;
  margin-bottom: 20px;
}

h2 {
  margin-top: 40px;
  margin-bottom: 20px;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

ul li {
  margin-bottom: 10px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

th, td {
  padding: 10px;
  border: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

a {
  color: #1abc9c;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

    </style>
</head>
<body>


@include("layouts/navbar-user")
<h1>My Profile</h1>

 <p>Welcome, {{Session::get('first_name')}} {{Session::get('last_name')}}!</p>
<a href="/profile/edit">Edit profile</a><br>
<a href="/logout">Logout</a>
<h2>Basic Info</h2>
<ul>
    <li>Birthdate: {{$student -> birthdate}}</li>
    <li>Gender: {{$student -> gender}}</li>
    <li>Province: {{$student -> province}}</li>
</ul>
<h2>Contact Info</h2>
<ul>
    <li>Mobile number: {{$student -> mobile_number}}</li>
    <li>Email address: {{$student -> email_address}}</li>
</ul>
<h2>Educational Info</h2>
<table class="table">
    <tr>
        <th>Subject name</th>
        <th>Schedule</th>
        <th>Room</th>
    </tr>
    @foreach($classes as $class)
    <tr>
        <td>{{$class->name}}</td>
        <td>{{$class->schedule}}</td>
        <td>{{$class->room}}</td>
    </tr>
    @endforeach
</table>
<h2>
</body>

</html>