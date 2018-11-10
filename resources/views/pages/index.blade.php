@extends('main')

@section('title', '| Welcome to the Flavors of love')

@section('content')

<main class="indexbody pt-4" role="main">
    <div class="container">
        <div class="row"> 
            <div class="col-md-12">
                <div class="article card mb-5">

                    @foreach($post_home as $ph)

                    <h2 class="blog-post-title">{{ $ph->post_title }}</h2>

                    <p class="blog-post-meta"> {{ $ph->created_at }} by {{ $ph->last_name }}, 
                    {{ $ph->first_name }} </p>

                    <p> {!! $ph->post_content !!} </p>

                    <div id="buttonReadMore">
                        <button onclick="myFunction()" id="myBtn">Read More</button>    
                    </div>    
                    
                    @endforeach 

                </div> 
            </div>     
        </div>
    </div>     
</main>

<hr>

<nav>
    <ul class="pager">
        <li><a id="pager1" href="#">Previous</a></li>
        <li><a id="pager1" href="#">Next</a></li>
        <li><a id="pager1" href="/new_post">New Post</a></li>
    </ul>
</nav>

<hr>

<div class="row" id="homecontact">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Join Us!</h5>
                <p class="card-text">For more exclusive tips, giveaways, news, resources and more.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Email Address</h5>
                <input type="email" name="email" id="emailindex" placeholder="Email Address">
                <a href="#" class="btn btn-primary">Sign Up</a>
            </div>
        </div>
    </div>
</div>

</div>



<!--Footer-->
@include('partials._footer') 

@endsection