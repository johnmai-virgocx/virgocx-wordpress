(function ($) {
    $(document).ready(function () {
        // Scroll to Top
        jQuery(".scrolltotop").click(function () {
            jQuery("html").animate({ scrollTop: "0px" }, 800);
            return false;
        });
        jQuery(window).scroll(function () {
            var upto = jQuery(window).scrollTop();
            if (upto > 500) {
                jQuery(".scrolltotop").fadeIn();
            } else {
                jQuery(".scrolltotop").fadeOut();
            }
        });

        var forEach = function (t, o, r) {
            if ("[object Object]" === Object.prototype.toString.call(t)) for (var c in t) Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
            else for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t);
        };
        var hamburgers = document.querySelectorAll(".hamburger");
        if (hamburgers.length > 0) {
            forEach(hamburgers, function (hamburger) {
                hamburger.addEventListener(
                    "click",
                    function () {
                        this.classList.toggle("is-active");
                    },
                    false
                );
            });
        }

        $("#owl-one").owlCarousel({
            loop: true,
            margin: 0,
            dots: true,
            nav: true,
            items: 1,
            mouseDrag: false,
        });

        $("#myCarousel").carousel({
            interval: false,
        });

        $(".carousel .carousel-item").each(function () {
            var minPerSlide = 4;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(":first");
            }
            next.children(":first-child").clone().appendTo($(this));

            for (var i = 0; i < minPerSlide; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(":first");
                }

                next.children(":first-child").clone().appendTo($(this));
            }
        });
    });
})(jQuery);
