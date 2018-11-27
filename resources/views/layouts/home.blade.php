@include('layouts._header')
@include('layouts._navbar')
@include('layouts._alert')
<div class="main-container container" id="main_content">
	{{-- <h1 class="text-center border-bottom" id="site-heading">{{$globalConfigs->site_title}}</h1> --}}
	<h1 class="text-center border-bottom" id="site-heading">&nbsp;</h1>
	<div class="header-bottom" id="site-heading">
		<div class="container">
			<a href="/" class="site-logo">
				<img class="img-fluid" src="/img/logo.png" alt="foodlogo">
			</a>
			
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
				<center><img class="img-fluid" src="/img/1920x5501.jpg" alt="Food1" style="width:100%;"></center>
				<div class="carousel-caption">
					<h1>Food with Fashion</h1>
					<p>Food, Taste and Style</p>
				</div>
			</div>

			<div class="item">
				<center><img class="img-fluid" src="/img/1920x5502.jpg" alt="Food2" style="width:100%;"></center>
				<div class="carousel-caption">
					<h1>In Love with Burgers?</h1>
					<p>5 Best Burger Chains to visit</p>
				</div>
			</div>

			<div class="item">
				<center><img class="img-fluid" src="/img/1920x5503.jpg" alt="Food3" style="width:100%;"></center>
				<div class="carousel-caption">
					<h1>Healthy Recipe</h1>
					<p>Check healthy and delicious recipes inside</p>
				</div>
			</div>	
		</div>
	</div>
		<h1 class="text-center border-bottom" id="site2-heading">&nbsp;</h1>
			<ul class="main2-menu"> 
				@forelse($categories as $category)   
				<li><a href="/category/article/{{$category->alias}}">{{$category->name}}</a></li>
				@endforeach
			</ul>

		<h5 class="text-center border-bottom" id="site3-heading"></h5>

			@endif
			<div class="col-sm col-lg-12">
				@yield('content') 
			</div>


		</div>

	{{-- 	@include('layouts._footer2') --}}
		@include('layouts._footer')

