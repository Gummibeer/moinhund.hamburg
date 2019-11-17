import $ from 'jquery';
import 'owl.carousel';
import twemoji from 'twemoji';

$(window).on('load', function() {
    $('.owl-carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            }
        },
        items: 1,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true
    });

    twemoji.parse(document.body, {
        size: 'svg',
        ext: '.svg',
        callback: function(icon, options, variant) {
            switch(icon) {
                case 'a9':      // © copyright
                case 'ae':      // ® registered trademark
                case '2122':    // ™ trademark
                    return false;
            }

            if(!icon) {
                return false;
            }

            return ''.concat(options.base, '/', options.size, '/', icon, options.ext);
        }
    });
});
