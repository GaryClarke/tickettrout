$(function() {

    // Add active class to selected bottom mobile tab
    // @todo - Need to add for league view / profile view
    $('.mobile-tabs li a').click(function (e) {

        e.preventDefault();

        var sidebarElement = $(this).attr('href');

        $('.mobile-tabs li').removeClass('active');

        $(this).parent().closest('li').addClass('active');

        scrollToSidebarElement(sidebarElement);
    });

    //

    // var $window = $(window),
    //     $tableDiv = $('#leagueTableDiv');
    //
    // function leagueViewResize() {
    //     if ($window.width() > 767) {
    //         return $tableDiv.addClass('in');
    //     }
    //
    //     $tableDiv.removeClass('in');
    // }
    //
    // $window.resize(leagueViewResize).trigger('resize');


    // Scroll to the correct position in the scores sidebar
    function scrollToSidebarElement(sidebarElement) {

        var aTag = $(sidebarElement + "");

        var offsetTop = sidebarElement == '#screen-feed-content' ? -1 : 64;

        // Take 64 to account for margin offset
        $('html,body').animate({scrollTop: aTag.offset().top - offsetTop}, 'fast');
    }
});
