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
});