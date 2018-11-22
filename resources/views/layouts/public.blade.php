@include('layouts._header')
@include('layouts._navbar')
@include('layouts._alert')
<div class="main-container container" id="main_content">
	{{-- <h1 class="text-center border-bottom" id="site-heading">{{$globalConfigs->site_title}}</h1> --}}
	<h1 class="text-center border-bottom" id="site-heading">&nbsp;</h1>
	<div class="header-bottom" id="site-heading">
		<div class="container">
			<a href="/" class="site-logo">
				<img src="/img/logo.png" alt="">
			</a>
		 	<ul class="main-menu"> 
				{{-- <li><a href="/">Articles</a></li> --}}
				{{-- <li><a href="/category/article/features">Features</a></li>
				<li><a href="/category/article/recipes">Recipes</a></li>
				<li><a href="/category/article/reviews">Reviews</a></li>
				<li><a href="/contact.html">Contact</a></li> --}}

				@forelse($categories as $category)   
				<li><a href="/category/article/{{$category->alias}}">{{$category->name}}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
	<div class="mb-5">&nbsp;</div>
@if(Route::current()->getName() == 'home')
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<center><img src="/img/food1.jpg" alt="Food1" style="width:80%;"></center>
			</div>

			<div class="item">
				<center><img src="/img/ie.jpg" alt="Food2" style="width:80%;"></center>
			</div>

			<div class="item">
				<center><img src="/img/food1.jpg" alt="Food3" style="width:80%;"></center>
			</div>	
		</div>
	</div>
 @endif
	<div class="col-sm col-lg-10">
		@yield('content') 
	</div>
</div>
	
@include('layouts._footer')

