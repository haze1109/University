<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
</head>

<body>
@include("layouts/navbar")
<h1>Admin Dashboard</h1>
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            {!! $chart->renderHtml() !!}
        </div>
        <div class="col-lg-5">
            {!! $chart1->renderHtml() !!}
        </div>
    </div>
</div>
</body>
@yield('javascript')
    {!! $chart->renderChartJsLibrary() !!}
    {!! $chart->renderJs() !!}
    {!! $chart1->renderChartJsLibrary() !!}
    {!! $chart1->renderJs() !!}
</html>