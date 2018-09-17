$(document).ready(function(){

    var docW = $(document).width();
    $(".lk-close").on('click', function(e) {
        e.preventDefault();
        $('.modal').fadeOut();
    }); 

    $(".scroll a").on('click', function(e) {
        e.preventDefault();
        var menuh = $('#site-header').height() + 35;
        var gotodiv = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(gotodiv).offset().top - menuh
        }, 1000);
    });
    
    

    $('.list-slider-brands').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 4
    });

    $('.slider-image-text .vc_column-inner  > .wpb_wrapper').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    

});

