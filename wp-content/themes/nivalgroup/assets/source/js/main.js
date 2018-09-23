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
        slidesToScroll: 4,
        responsive: [
            {
            breakpoint: 1200,
                settings: {
                    centerPadding: '40px',
                    slidesToShow: 5,
                    slidesToScroll: 4,
                }
            },{
            breakpoint: 980,
                settings: {
                    centerPadding: '40px',
                    slidesToShow: 4,
                    slidesToScroll: 3,
                }
            },
            {
            breakpoint: 480,
                settings: {
                    centerPadding: '40px',
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });

    $('.slider-image-text .vc_column-inner  > .wpb_wrapper').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    
    $('.gallery').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.list-vantaggi').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 2,
        variableWidth: true
    });

    $('select').selectric();

    $('.wpcf7-acceptance input').checkator();
    

    

});

