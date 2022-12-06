$(document).ready(function(){
    $('.sp__hamburger-menu').click(function() {
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) {
            $('.g-nav-sp').fadeIn();
            $('body').css('overflow-y', 'hidden');
        } else {
            $('.g-nav-sp').fadeOut();
            $('body').css('overflow-y','scroll'); 
        }
    });

    $(window).resize(function() {
        if (window.matchMedia("(max-width: 992px)").matches) {
            $('.g-nav-sp').css('display', 'none');
            $('.sp__hamburger-menu').removeClass('active');
        } else {
            $('.g-nav-sp').css('display', 'flex');
        };
      });
});