<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <title>{{ config('app.name') }} @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}" />
    <link rel="stylesheet" href="https://www.tinymce.com/css/codepen.min.css" />
    <script type="text/javascript" src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=x6qudqbeuhp9vron0c7hsuvrjnhv6wraki9cgx5nxs32mpy2"></script>

    @yield('stylesheet')

</head>

<body>

<header id="header" class="header-section">
    <div class="header-top" >
        <div class="container">
            <div class="header-social">
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
            </div>
            <div class="user-panel">
                <a href="#">Join Us</a> 
            </div>
        </div>
    </div>
</header>

<div class="header-bottom">
    <div class="container">
        
        @if(\Request::is('/'))
            
        <div class="logo-header">
            <a href="index.html" class="site-logo"><img src="img/logo.png" alt=""></a>
        </div>
        @endif
        <div class="nav-switch">
            <i class="fa fa-bars"></i>
        </div>
        <div class="header-search">
            <a href="#"><i class="fa fa-search"></i></a>
            <input type="text" name="search_site" placeholder="Search Site">
        </div>
        
        <div>
            <ul class="main-menu">
                <li><a href="/">Home</a></li>
                <li><a href="/features">Features</a></li>
                <li><a href="/recipes">Recipes</a></li>
                <li><a href="/reviews">Reviews</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>    
        </div>
    </div>
</div>
