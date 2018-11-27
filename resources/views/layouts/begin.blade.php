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
				@forelse($categories as $category)   
				<li><a href="/category/article/{{$category->alias}}">{{$category->name}}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
	<div class="col-sm col-lg-10">
		@yield('content') 
	</div>
</div>

	
@include('layouts._footer')

