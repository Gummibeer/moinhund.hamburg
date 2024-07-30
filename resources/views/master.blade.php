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

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2302.1573519536782!2d8.8734445!3d54.7596201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b49752e9f85017%3A0x512d15624a851241!2sMoin%20Hund!5e0!3m2!1sde!2sde!4v1722334088239!5m2!1sde!2sde" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

@include('partials.footer')

<script async defer src="{{ mix('js/app.js') }}" type="application/javascript"></script>
</body>
</html>
