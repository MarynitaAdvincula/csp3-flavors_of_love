<footer class="container-fluid border-top">
    <div class="row purple-text text-darken-4 footer">
        <div class="col-sm-2 text-center" style="color: white">© {{date('Y').' '.$globalConfigs->copyright_owner}} <i class="fas fa-utensils"></i></div>
        @if(!auth()->check())
            <div class="col-sm-1 text-center">
                <span class="pointer text-info" data-toggle="modal" data-target="#subscribe-form"><i class="fas fa-bell"></i> Subscribe</span>
            </div>

            <div class="col-sm-1 text-center">
                <span class="pointer text-info" data-toggle="modal" data-target="#feedback-form"><i class="fas fa-comment-alt"></i> Feedback</span>
            </div>
            <div class="col-sm-1 col-sm-offset-5 text-center">
           
                <a href="{{route('login-form')}}" class="text-grey"><i class="fas fa-user-plus"></i> Sign-Up</a>
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

   