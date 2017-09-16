function mobileNav() {
    var $hamburger = $('.hamburger');
    var $dropDown = $('.header-dropdown');
    
    function handleClick() {
        $hamburger.hover(function() {
            $dropDown.addClass('active-state');
        }, function() {
            $dropDown.removeClass('active-state');
        })
    }

    return {
        handleClick
    }
}

function homeSlider() {
    $('.bxslider').bxSlider({
        auto: true,
        autoStart: true,
        autoControls: false
    });
}

$(document).ready(function(){
    mobileNav().handleClick();
    homeSlider();
}); 