<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar-user")
<h1>Send Email</h1>
<form action="/admin/students/{{request()->route('id')}}/email" method="POST">
    @csrf
    <label>To:</label>
    <input type="email" name="email" value="{{$email_address}}"></input><br>
    <label>Subject:</label>
    <input type="text" name="subject"></input><br>
    <label>Body:</label>
    <textarea name="body"></textarea><br>
    <button type="submit">Submit</button>
</form>
</body>

</html>