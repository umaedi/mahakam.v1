// Scroll bar
    $(document).ready(function() {
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 80) {
                $("nav").addClass('navbar-bg');
            } else {
                $("nav").removeClass('navbar-bg');
            }
        });
    });