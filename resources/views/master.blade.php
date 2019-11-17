<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="Wir freuen uns und warten auf euch mit handgefertigten Leinen & Halsbänder, leckerem Futter & Kauartikeln, wunderbaren Spielzeugen, kuscheligen Betten aber auch gesundem BARF, hübscher Bekleidung, herrlichen Pflegeprodukten und sonstigem Hundezubehör.">

    <meta property="og:url" content="{{ app('url')->current() }}">
    <meta property="og:title" content="@yield('title', config('app.name'))">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ mix('images/og_banner.jpg') }}">
    <meta property="og:description" content="Wir freuen uns und warten auf euch mit handgefertigten Leinen & Halsbänder, leckerem Futter & Kauartikeln, wunderbaren Spielzeugen, kuscheligen Betten aber auch gesundem BARF, hübscher Bekleidung, herrlichen Pflegeprodukten und sonstigem Hundezubehör.">

    <link rel="icon" type="image/png" href="{{ mix('images/logo.png') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ mix('images/favicon.ico') }}" />

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

    <link rel="sitemap" type="application/xml" href="{{ url('sitemap.xml') }}" title="Sitemap" />
</head>
<body id="body-{{ $slug }}">

@include('partials.header')

@yield('content')

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9464.56466442543!2d10.024191!3d53.6266217!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81fedbb8953efcfc!2sMoin+Hund!5e0!3m2!1sde!2sde!4v1527521082680" width="100%" height="500" frameborder="0" allowfullscreen></iframe>

@include('partials.footer')

<script async defer src="{{ mix('js/app.js') }}" type="application/javascript"></script>
</body>
</html>
