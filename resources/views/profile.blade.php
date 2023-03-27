<!DOCTYPE html>
<html lang="en">

<head>
     @include("layouts/head")
    <title>Document</title>
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