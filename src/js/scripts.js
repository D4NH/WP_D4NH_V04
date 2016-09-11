(function($, root, undefined) {

    $(function() {

        'use strict';

        $('.fullscreen').css('visibility', 'visible');

        // smooth scroll to anchor
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top - 50
                        }, 500);
                        return false;
                    }
                }
            });
        });

        (function() {
            if ("-ms-user-select" in document.documentElement.style && navigator.userAgent.match(/IEMobile\/10\.0/)) {
                var msViewportStyle = document.createElement("style");
                msViewportStyle.appendChild(
                    document.createTextNode("@-ms-viewport{width:auto!important}")
                );
                document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
            }
        })();

        // change nav css on scroll section
        $(window).scroll(function() {
            if ($(window).scrollTop() >= $('#intro').position().top - 50) {
                $('.navbar-fixed-top').addClass('black');
            } else {
                $('.navbar-fixed-top').removeClass('black');
            }
        });

        // $('[data-toggle="tooltip"]').tooltip();

        /* fix vertical when not overflow
        call fullscreenFix() if .fullscreen content changes */
        function fullscreenFix() {
            var h = $('body').height();
            // set .fullscreen height
            $(".content-b").each(function(i) {
                if ($(this).innerHeight() <= h) {
                    $(this).closest(".fullscreen").addClass("not-overflow");
                }
            });
        }
        $(window).resize(fullscreenFix);
        fullscreenFix();

        /* resize background images */
        function backgroundResize() {
            var windowH = $(window).height();
            $('.background').each(function(i) {
                var path = $(this);
                // variables
                var contW = path.width();
                var contH = path.height();
                var imgW = path.attr('data-img-width');
                var imgH = path.attr('data-img-height');
                var ratio = imgW / imgH;
                // overflowing difference
                var diff = parseFloat(path.attr('data-diff'));
                diff = diff ? diff : 0;
                // remaining height to have fullscreen image only on parallax
                var remainingH = 0;
                if (path.hasClass('parallax')) {
                    var maxH = contH > windowH ? contH : windowH;
                    remainingH = windowH - contH;
                }
                // set img values depending on cont
                imgH = contH + remainingH + diff;
                imgW = imgH * ratio;
                // fix when too large
                if (contW > imgW) {
                    imgW = contW;
                    imgH = imgW / ratio;
                }
                //
                path.data('resized-imgW', imgW);
                path.data('resized-imgH', imgH);
                path.css('background-size', imgW + 'px ' + imgH + 'px');
            });
        }
        $(window).resize(backgroundResize);
        $(window).focus(backgroundResize);
        backgroundResize();

    });

})(jQuery, this);
