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
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">Features</a></li>
				<li><a href="recipes.html">Recipes</a></li>
				<li><a href="#">Reviews</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</div>
	<div class="col-sm col-lg-4">
		@yield('content') 
	</div>
</div>
	
@include('layouts._footer')

