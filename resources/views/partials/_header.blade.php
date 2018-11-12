<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
  {{-- <link rel="stylesheet" href="https://www.tinymce.com/css/codepen.min.css" />  --}}
  <script type="text/javascript" src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=x6qudqbeuhp9vron0c7hsuvrjnhv6wraki9cgx5nxs32mpy2"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script src="/js/custom.js"></script>

  @yield('stylesheet')

</head>

<body>
  <nav class="navbar navbar-expand-md absolute-top" id="menunavbar">
    <div class="container">
      <button class="navbar-toggler order-2 order-md-1" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3 order-md-2" id="navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/features" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Features</a>
            <div class="dropdown-menu" aria-labelledby="dropdown02">
              <a class="dropdown-item" href="#">Restaurants</a>
              <a class="dropdown-item" href="#">Travel Spots</a>
              <a class="dropdown-item" href="#">Recipe</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/reviews" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reviews</a>
            <div class="dropdown-menu" aria-labelledby="dropdown03">
              <a class="dropdown-item" href="#">Restaurant Reviews</a>
              <a class="dropdown-item" href="#">Travel Destinations</a>
            </div>
          </li>
        </ul>
      </div>

      <a class="navbar-brand mx-auto order-1 order-md-3" href="/">Flavors of Love</a>

      <div class="collapse navbar-collapse order-4 order-md-4" id="navbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/recipes">Recipes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
        </ul>
        <form class="form-inline" role="search">
          <input class="search js-search form-control form-control-rounded mr-sm-2" type="text" title="Enter search query here.." placeholder="Search.." aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
  


{{-- <nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
      <!-- Brand and toggle -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span> 
        <span class="icon-bar"></span> <span class="icon-bar"></span> 
        <span class="icon-bar"></span> 
    </button>
      <a class="navbar-brand" href="#"><strong>Flavors of Love</strong></a> 
    </div>
    
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/">Home</a></li>
          <li><a href="/features">Features</a></li>
          <li><a href="/recipes">Recipes</a></li>
          <li><a href="/reviews">Reviews</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </div>
  </div>
</nav> --}}

<!-- Header -->
<header class="text-center" name="home">
  <div class="intro-text">
    <h1>Welcome to <strong>Flavors of Love</strong></h1>
    <p>Expressing our passion for food and travel</p>
    <a href="/features" class="btn btn-default btn-lg">LEARN MORE</a> 
  </div>
</header>


