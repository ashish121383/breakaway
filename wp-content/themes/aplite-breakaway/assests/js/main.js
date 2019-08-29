(function ($) {
"use strict";


    // Script handler
    $(window).on('load', function () {
        arrowticCounterUphendle();
        arrowticMenuareaFixed();
        arrowticPreloader();
    });

    

   // Client Review
   $('.slider').slick({
            dots: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 3000
   });


   // Particle js for banner
    var particles= document.getElementById("particles");

    function main(){
        var np = document.documentElement.clientWidth / 3;
        particles.innerHTML = "";
        for (var i = 0; i < np; i++) {
            var w = document.documentElement.clientWidth;
            var h = document.documentElement.clientHeight;
            var rndw = Math.floor(Math.random() * w ) + 1;
            var rndh = Math.floor(Math.random() * h ) + 1;
            var widthpt = Math.floor(Math.random() * 8) + 3;
            var opty = Math.floor(Math.random() * 5) + 2;
            var anima = Math.floor(Math.random() * 12) + 8;

            var div = document.createElement("div");
            div.classList.add("particle");
            div.style.marginLeft = rndw+"px";
            div.style.marginTop = rndh+"px";
            div.style.width = widthpt+"px";
            div.style.height = widthpt+"px";
            div.style.background = "white";
            div.style.opacity = opty;
            div.style.animation = "move "+anima+"s ease-in infinite ";
            particles.appendChild(div);
        }
    }
    window.addEventListener("resize", main);
    window.addEventListener("load", main);

   // About Video
    $('.video-view').magnificPopup({
        type: 'iframe'
    });

    new WOW().init();

    // Elements Animation
    if($('.wow').length){
        var wow = new WOW(
          {
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       0,          // distance to the element when triggering the animation (default is 0)
            mobile:       true,       // trigger animations on mobile devices (default is true)
            live:         true       // act on asynchronously loaded content (default is true)
          }
        );
        wow.init();
    }

})(jQuery);