<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@if(app('request')->path() != '/') @if(isset($title)) {{ $title }} @else {{ title_case(app('request')->path()) }} @endif | @endif Moin Hund</title>
    <meta name="description" content="Wir freuen uns und warten auf euch mit handgefertigten Leinen & Halsbänder, leckerem Futter & Kauartikeln, wunderbaren Spielzeugen, kuscheligen Betten aber auch gesundem BARF, hübscher Bekleidung, herrlichen Pflegeprodukten und sonstigem Hundezubehör.">

    <meta property="og:url" content="{{ app('url')->current() }}">
    <meta property="og:title" content="@if(app('request')->path() != '/') @if(isset($title)) {{ $title }} @else {{ title_case(app('request')->path()) }} @endif | @endif Moin Hund">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ url('img/og_banner.jpg') }}">
    <meta property="og:description" content="Wir freuen uns und warten auf euch mit handgefertigten Leinen & Halsbänder, leckerem Futter & Kauartikeln, wunderbaren Spielzeugen, kuscheligen Betten aber auch gesundem BARF, hübscher Bekleidung, herrlichen Pflegeprodukten und sonstigem Hundezubehör.">

    <link rel="icon" type="image/png" href="{{ url('img/logo.png') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('img/favicon.ico') }}" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700|Roboto+Mono:400,700|Roboto+Slab:400,700">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('css/owlcarousel.css?v='.env('APP_VERSION', time())) }}">
    <link rel="stylesheet" href="{{ url('css/styles.css?v='.env('APP_VERSION', time())) }}">
</head>
<body>

@include('partials.header')

@yield('content')

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9464.56466442543!2d10.024191!3d53.6266217!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81fedbb8953efcfc!2sMoin+Hund!5e0!3m2!1sde!2sde!4v1527521082680" width="100%" height="500" frameborder="0" allowfullscreen></iframe>

@include('partials.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://twemoji.maxcdn.com/2/twemoji.min.js?2.7"></script>

<script>
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
                switch ( icon ) {
                    case 'a9':      // © copyright
                    case 'ae':      // ® registered trademark
                    case '2122':    // ™ trademark
                        return false;
                }

                return ''.concat(options.base, options.size, '/', icon, options.ext);
            }
        });
    });
</script>
{!! $schema->toScript() !!}

</body>
</html>