@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tour</title>
        <link rel="stylesheet" href="/css/react-screen.css"/>
        <link rel="stylesheet" href="/css/tour.css"/>
    </head>
    <body>
        <div id="react-screen"></div>
        <script src="{{url('')}}/js/bundle.js"></script>
    </body>
</html>
@stop
