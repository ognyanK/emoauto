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

function detailsGallery() {
    var $imageGallery = $('#imageGallery');
    var $target = $('.tumbnails, .current-img');
    var $theGallery = $('.the--gallery');
    var $closeGallery = $('.close-gallery');

    function toggleGallery() {
        $target.click(function(e) {
            e.preventDefault();

            $theGallery.addClass('active-state');
        });

        $closeGallery.click(function(e){
            e.preventDefault();

            $theGallery.removeClass('active-state');
        })
    }

    if ($imageGallery.length < 1) {
        return;
    }
    
    $imageGallery.lightSlider({
        gallery:true,
        item:1,
        loop:true,
        thumbItem:9,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left'
    });  

    toggleGallery();
}

$(document).ready(function(){
    mobileNav().handleClick();
    homeSlider();
    detailsGallery();
}); 