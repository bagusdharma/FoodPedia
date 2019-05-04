<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="FoodPedia Team">

    <!-- Page Title -->
    <title>FoodPedia</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('template/css/bootstrap.min.css')}} ">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="{{asset('template/css/simple-line-icons.css')}}  ">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="{{asset('template/css/themify-icons.css')}} ">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="{{asset('template/css/set1.css')}} ">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    
</head>

<body>

    @include('layouts.navbar')


    @yield('content')


    @include('layouts.footer')

    @yield('script')
</body>

</html>
