{{-- <!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>

</head>

<body>
@include("layouts/navbar-user")
<h1 style="color: red">401</h1>
<p>You can not view this content!</p>
<a href="/">Go back to homepage.</a>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>401 - Unauthorized</title>

</head>

<body>
@include("layouts/navbar-user")
<h1 style="color: red">401 - Unauthorized</h1>
<p>You are not authorized to access this content.</p>
<a href="/">Go back to homepage.</a>
</body>

</html>
