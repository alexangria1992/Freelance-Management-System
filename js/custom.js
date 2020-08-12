$(document).ready(function(){
    
    var stickyNavTop = $('.notop').offset().top;
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();

        if(scrollTop > stickyNavTop){
            $('.notop').addClass('stickytop');
        }
        else 
        {
            $('.notop').removeClass('stickytop');
        }
    }

    stickyNav();

    $(window).scroll(function(){
        stickyNav();
    });

    $(".home-featured-carousel").owlCarousel({
        items: 4,
        margin: 30,
        stagePadding: 30,
        autoplay:true,
        autoplaySpeed:1000,
        responsiveClass:true,
        responsive: {
            0:{
                items:1,
            },

            480:{
                items:1,
            },

            600:{
                items:2
            },

            768:{
                items:3
            },

            1000:{
                items: 4
            }
        }
    });

    $('[data-toggle="tooltip"]').tooltip();







});