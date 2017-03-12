$(function() {

    // General
    $('[data-toggle="tooltip"]').tooltip();

    // main-nav toggle
    $('[data-toggle="toggle"]').click(function (event) {

        event.preventDefault();
        var $target = $(this).attr('id');
        $($target).toggleClass('on');
    });

    // ?
    $('[data-toggle="toggleself"]').click(function (event) {
        $(this).toggleClass('on');
    });
});