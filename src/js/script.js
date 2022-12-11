$(document).ready(function(){
    // ヘッダー　ハンバーガーメニュー
    
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

    // メインビジュアル スライダー

    $('.main-visual__slider').slick({
        autoplay: true,
        arrows: false,
        dots: false,
        speed: 1500, 
        autoplaySpeed: 3000,
        slidesToShow: 1, 
        slidesToScroll: 1, 
        fade: true,
        infinite: true,
        pauseOnFocus: false,
        pauseOnHover: false,
        pauseOnDotsHover: false
    });
    
});