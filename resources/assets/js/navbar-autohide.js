/**
 * Created by Mary Advincula on 11/15/2018.
 */
(function ($) {
    $(document).ready(function () {
        var topNavBar = $("#top-navbar");
        //Show navabar when mouse is at the top of window
        $(function() {
            var mouseY = 0;
            document.addEventListener('mousemove', function(e) {

                mouseY = e.clientY || e.pageY;

                if(mouseY > 100 && !topNavBar.is(':hover')) {
                    topNavBar.fadeOut();

                }else{
                    topNavBar.fadeIn();

                }
            }, false);
        });
    });
}(jQuery));
