@extends('master')

@section('content')
    <section style="background-image: url({{ asset(mix('images/content/welcome.jpg')) }});background-size: cover; background-position: center;box-shadow: inset 0 0 0 2000px rgba(37,50,56,0.5);">
        <div class="container" style="height: 50vh;position: relative;">
            <img src="{!! asset(mix('images/logo.png')) !!}" id="logo" />
            <div style="position: absolute;bottom: 7.5vh;right: 1rem;text-align: right;">
                <span style="font-size:1.5rem;color: #ffffff;">Herzlich Willkommen bei</span>
                <h1 style="color: #ffffff;">Moin Hund</h1>
                <span style="font-size:1.5rem;color: #C0C0C0;">Feines für Fellnasen</span>
            </div>
        </div>
    </section>

    <section class="content-section" style="background: #515E64; color: #ffffff;">
        <div class="container">
            <h2 class="mt-0 mb-2">{{ $range['headline'] }}</h2>

            <p class="text-center w-75 mx-auto mt-3 mb-3">{!! $range['text_1'] !!}</p>

            <div class="row">
                @foreach($range['icons'] as $icon)
                    <div class="col-md-3 col-6">
                        <img src="{{ mix($icon['icon']) }}" class="img-fluid mb-3 w-75" />
                        <h4>
                            <small style="display: block;color: #C0C0C0;">{{ $icon['adjective'] }}</small>
                            {{ $icon['label'] }}
                        </h4>
                    </div>
                @endforeach
            </div>

            <p class="text-center w-75 mx-auto mt-3 mb-0">{!! $range['text_2'] !!}</p>
        </div>
    </section>

    @foreach($imagesWithText as $imageWithText)
        <section class="container-fluid">
            <div class="row">
                <div class="col-md-6 @if($imageWithText['direction'] == 'rtl') order-md-last @endif p-0">
                    <div class="embed-responsive embed-responsive-21by9 h-100">
                        <div class="embed-responsive-item" style="background-image: url({!! asset(mix($imageWithText['image'])) !!}); background-size: cover; background-position: {{ $imageWithText['position'] ?? 'center' }};"></div>
                    </div>
                </div>
                <div class="col-md-6 content-section">
                    <div>
                        <p class="mb-2" style="font-size: 2.5rem; white-space: nowrap;">{!! $imageWithText['icons'] !!}</p>
                        <h2 class="mt-0 mb-3">{{ $imageWithText['headline'] }}</h2>
                        <p class="w-75 mx-auto mb-0">{!! $imageWithText['text'] !!}</p>
                    </div>
                </div>
            </div>
        </section>
    @endforeach

    <section class="content-section" style="background-image: url({{ asset(mix('images/content/reviews.jpg')) }});background-size: cover; background-position: center;box-shadow: inset 0 0 0 2000px rgba(229,229,229,0.75);">
        <div class="container">
            <h2 class="mt-0 mb-4">Kunden-Meinungen</h2>
            <div class="owl-carousel owl-theme">
                @foreach(collect($reviews)->shuffle() as $review)
                    <div class="item">
                        <blockquote class="w-75 mx-auto">
                            <p class="mb-2">{!! $review['text'] !!}</p>
                            <footer>&mdash;&nbsp;<cite>{{ $review['author'] }}</cite></footer>
                        </blockquote>
                        <div style="white-space: nowrap;">
                            {!! str_repeat('<i class="fas fa-star text-warning"></i>', $review['rating']) !!}
                            {!! str_repeat('<i class="fal fa-star"></i>', 5 - $review['rating']) !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
