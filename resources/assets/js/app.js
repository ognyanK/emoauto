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
    //Static gallery
    var $currentImg = $(".current-img .pic");
    var $tumbnails = $(".tumbnails div");
    var $close = $(".close-btn");
    var overlay = document.createElement('div');

    //Main gallery
    var $mainGallery = $(".gallerySlideShow");
    var $startingImg = $(".gallerySlideShow .current-img .pic");

    function setOverlay() {
        overlay.className = "overlay";
        document.body.appendChild(overlay);
    }

    function closeGallery() {
        document.body.removeChild(overlay);
        $mainGallery.removeClass("active-state");
    }

    function openGallery(imageUrl) {
        setOverlay();
        $mainGallery.addClass("active-state");
        setTheFirstImage(imageUrl);
        navigate();
    }

    function setTheFirstImage(imageUrl) {
        $startingImg[0].setAttribute("src", imageUrl);
    }

    function navigate() {

    }

    function interactDOM() {
        $tumbnails.on("click", function(e) {
            var imageUrl = this.getAttribute("data-imageurl");
            openGallery(imageUrl);
        });

        $close.on("click", function() {
            closeGallery();
        });
    }

    function initGallery() {
        interactDOM();
    }

    //console.log($tumbnails);
    
    return {
        initGallery: initGallery
    }
}

$(document).ready(function(){
    mobileNav().handleClick();
    homeSlider();
    detailsGallery().initGallery();
}); 