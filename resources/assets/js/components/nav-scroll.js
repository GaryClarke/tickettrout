$(function() {

    // SHOW / HIDE NAV ON SCROLL
    var previousScroll = 0;

    $(window).scroll(function(){

        if ($(window).width() < 768) {

            var currentScroll = $(this).scrollTop();

            if (currentScroll > 0 && currentScroll < $(document).height() - $(window).height()){

                // Scrolling down - hide
                if (currentScroll > previousScroll){
                    window.setTimeout(hideNav, 300);

                    // Scrolling up - show
                } else {
                    window.setTimeout(showNav, 300);
                }

                // Set previous scroll to current scroll
                previousScroll = currentScroll;
            }

        }

    });

    function hideNav() {
        $("[data-nav-status='toggle']").removeClass("is-visible").addClass("is-hidden");
    }
    function showNav() {
        $("[data-nav-status='toggle']").removeClass("is-hidden").addClass("is-visible");
    }
});

