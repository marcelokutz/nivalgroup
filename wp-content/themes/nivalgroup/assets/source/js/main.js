$(document).ready(function () {

    var docW = $(document).width();
    $(".lk-close").on('click', function (e) {
        e.preventDefault();
        $('.modal').fadeOut();
    });

    $(".scroll a").on('click', function (e) {
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
            }, {
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
        variableWidth: true,
        responsive: [
            {
                breakpoint: 980,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    variableWidth: false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    variableWidth: false,
                }
            }
        ]
    });


    $('select').selectric();

    $('.wpcf7-acceptance input').checkator();


    $('.btn-default, .btn-secondary').on('mouseenter', function (e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span.effect').css({ top: relY, left: relX })
    }).on('mouseout', function (e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span.effect').css({ top: relY, left: relX })
    });

    



    /* start smooth */
    $('#wrap').smoothState({
        onStart: {
            duration: 400, // Duration of our animation
            render: function ($container) {
                // Add your CSS animation reversing class
                $container.addClass('start-animation');
                // Restart your animation
                //smoothState.restartCSSAnimations();
            }
        },
        onReady: {
            duration: 0,
            render: function ($container, $newContent) {
                // Remove your CSS animation reversing class
                setTimeout(function () {
                    $container.removeClass('start-animation');
                }, 400);
                // Inject the new content
                $container.html($newContent);
    
                var docW = $(document).width();
                $(".lk-close").on('click', function (e) {
                    e.preventDefault();
                    $('.modal').fadeOut();
                });
    
                $(".scroll a").on('click', function (e) {
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
                        }, {
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
                    variableWidth: true,
                    responsive: [
                        {
                            breakpoint: 980,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                variableWidth: false,
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                variableWidth: false,
                            }
                        }
                    ]
                });
    
    
                $('select').selectric();
    
                $('.wpcf7-acceptance input').checkator();

                $('#rev_slider_1_1').show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"//nivalgroup.diamente.it/wp-content/plugins/revslider/public/assets/js/",
                    sliderLayout:"fullscreen",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                        onHoverStop:"off",
                    },
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:1240,
                    gridheight:868,
                    lazyType:"none",
                    shadow:0,
                    spinner:"spinner0",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });
            }
        }
    });

    countNumbers();


});


function countNumbers() {
    $(".count-number").appear(function () {
    $(this).each(function () {
            datacount = $(this).attr('data-count');
            $(this).find('.counter').delay(6000).countTo({
                from: 0,
                to: datacount,
                speed: 2500,
                refreshInterval: 50,
            });
        });
    });

    $(".count-number2").appear(function () {
        $(this).each(function () {
                datacount = $(this).attr('data-count');
                $(this).find('.counter2').delay(6000).countTo({
                    from: 0,
                    to: datacount,
                    speed: 2500,
                    refreshInterval: 50,
                    decimals: 1,
                        formatter: function (value, options) {
                        return value.toFixed(options.decimals).split('.').join(',');
                    },
                });
            });
        });
}