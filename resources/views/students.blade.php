<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar")
<h1>Students</h1>
<p>
    @foreach ($student_count as $sc)
    The school has {{$sc -> student_count}} students!
    @endforeach
</p>
<form action="/admin/students/search" method="POST">
    @csrf
    <input type="text" name="search" placeholder="Search for..."/>
    <select name="search_col">
        <option value="last_name">Last name</option>
        <option value="first_name">First name</option>
        <option value="year_level">Year level</option>
        <option value="province">Province</option>
    </select>
    <input type="submit" value="Search" class="mb-4"></input>
</form>
<img src="/img/students.jpg" class="img-fluid" style="width: 200px">
@if(isset($result_count))
<p>Showing {{$result_count}} results:</p>
@endif
<table class="table">
    <tr>
        <th>Name</th>
        <th>Year Level</th>
        <th>Photo</th>
        <th>Upload Photo</th>
        <th>Classes</th>
        <th>Send Email</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{$student -> last_name}}, {{$student -> first_name}}</td>
        <td>{{$student -> year_level}}</td>
        @if ($student->image)
        <td><img src="/student_images/{{$student -> image}}" style="height:100px"></td>
        @else
        <td>N/A</td>
        @endif
        <td><a href="/admin/students/{{$student -> student_id}}/upload">Upload photo</a></td>
        <td><a href="/admin/students/{{$student -> student_id}}/classes">Show classes</a></td>
        <td><a href="/admin/students/{{$student -> student_id}}/email">Send email</a></td>
    </tr>
    @endforeach
</table>
</body>

</html>