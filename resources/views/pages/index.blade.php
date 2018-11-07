@extends('main')

@section('title', '| Welcome to the Flavors of love')

@section('content')
<div class="blog-header">
    @foreach($pages_home as $page_home)
    {{-- <h1 class="blog-title">{{ $page_home->post_title }}</h1> --}}
    <p class="lead blog-description">{!! $page_home->post_content !!}</p>
    @endforeach
</div>

<div class="row">
    <div class="col-sm-8 blog-main"> 
        <div class="blog-post">

            @foreach($post_home as $ph)

            <h3 class="blog-post-title">{{ $ph->post_title }}</h3>

            <p class="blog-post-meta"> {{ $ph->created_at }} by {{ $ph->last_name }}, {{ $ph->first_name }} </p>

            <p> {!! $ph->post_content !!} </p>
            @endforeach
        </div> 

        <div class="card text-center">
          <div class="card-header">
            Subscribe To Us
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>



    <nav>
        <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
            <li><a href="/new_post">New Post</a></li>
        </ul>
    </nav>
</div>



<!--Sidebar-->
@include('partials._sidebar')

</div><!-- /.row -->
@endsection