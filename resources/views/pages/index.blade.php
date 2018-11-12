@extends('main')

@section('title', '| Welcome to the Flavors of love')

@section('content')

<main class="indexbody pt-4" role="main">
    <div class="container">
        <div class="row"> 
            @foreach($post_home as $ph)
            <div class="col-md-12">
                <div class="article card mb-5">

                    <h2 class="blog-post-title">{{ $ph->post_title }}</h2>

                    <p class="blog-post-meta"> {{ $ph->created_at }} by {{ $ph->last_name }}, 
                        {{ $ph->first_name }} </p>

                    <p class="blogpostcontent" > {!! $ph->post_content !!} </p>
                    <a href="#"><span class="glyphicon glyphicon-bullhorn"> </span> <span class="badge badge-pill badge-info">10</span></a> <a href="#"><span class="glyphicon-glyphicon-thumbs-up"></span> <span class="badge badge-pill badge-info">10</span></a><br>
                    </div> 
                </div>     
                @endforeach 
            </div>
        </div>     
    </main>

    <hr> 
    <div class="row text-center">
        <ul class="pager">
            <li><a id="pager1" href="#"><span>Previous</span></a></li>
            <li><a id="pager1" href="#"><span>Next</span></a></li>
            <li><a id="pager1" href="/new_post"><span>New Post</span></a></li>
        </ul>
    </div>
   
   <hr> 

     <div class="row" id="homecontact">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body" id="join">
                    <h5 class="card-title">Join Us!</h5>
                    <p class="card-text">For more exclusive tips, giveaways, news, resources and more.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body" id="joinemail">
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