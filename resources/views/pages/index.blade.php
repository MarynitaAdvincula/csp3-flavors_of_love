@extends('main')

@section('title', '| Welcome to the Flavors of love')

@section('content')

<div class="row">
    <div class="col blog-main"> 
        <div class="blog-post">

            @foreach($post_home as $ph)

            <h2 class="blog-post-title">{{ $ph->post_title }}</h2>

            <p class="blog-post-meta"> {{ $ph->created_at }} by {{ $ph->last_name }}, {{ $ph->first_name }} </p>

            <p> {!! $ph->post_content !!} </p>
            @endforeach
        </div> 
    </div> 

    <nav>
        <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
            <li><a href="/new_post">New Post</a></li>
        </ul>
    </nav>
    <div class="card text-center">
        <div class="card-header">Welcome to our website and Join Us!</div>
        <div class="card-body">
            <h4 class="card-title">Email us</h4>
            <input type="email" class="form-control" placeholder="Enter your Email Address">
            
            <div><a href="/contact" class="btn btn-primary">Sign Up Now</a></div> 
        </div> 
    </div>
</div>
</div>

<!--Footer-->
@include('partials._footer') 

@endsection