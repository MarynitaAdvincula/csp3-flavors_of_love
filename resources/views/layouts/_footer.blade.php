<footer class="container-fluid border-top">
    <div class="row purple-text text-darken-4 footer">
        <div class="col-sm-2 text-center" style="color: black">© {{date('Y').' '.$globalConfigs->copyright_owner}} <i class="fas fa-utensils"></i></div>
        @if(!auth()->check())
            <div class="col-sm-1 text-center">
                <span class="pointer text-info" data-toggle="modal" type= "button" style="color: black"  data-target="#subscribe-form">Subscribe</span>
            </div>

            <div class="col-sm-1 text-center">
                <span class="pointer text-info" data-toggle="modal" style="color: black" data-target="#feedback-form">Feedback</span>
            </div>
            <div class="col-sm-1 col-sm-offset-5 text-center">
           
                <a href="{{route('login-form')}}" style="color:black"> Sign In</a>
            </div>
        @endif
    </div>

    @include("layouts._modal_subscribe_form")
    @include("layouts._modal_feedback_form")
</footer>
</div>
<script src="{{ mix("build/js/app.js") }}" type="application/javascript"></script>
@yield('inPageJS')
</body>
</html>
</div><!-- #content -->

   