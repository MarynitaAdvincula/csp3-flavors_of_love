@extends('sub_main')

@section('title', '| Features')

@section('content')

<div class="row" id="featuresheader">
   <div class="blog-header">
    <div class="blog-features">
        <h2 class="blog-title">Blog Feature of the day!</h2>    
    </div>
    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-content">
                <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>            
            </div>
        </div> 
        <!--Sidebar-->
        @include('partials._sidebar')
    </div>
    </div>   
</div>
</div>

<!--Footer-->
@include('partials._footer') 

@endsection