<section class="content-section" style="background-image: url(https://source.unsplash.com/8wClLnwbNkc);background-size: cover; background-position: center;box-shadow: inset 0 0 0 2000px rgba(229,229,229,0.75);">
    <div class="container">
        <h2 class="mt-0 mb-4">{{ $headline }}</h2>
        <div class="owl-carousel owl-theme">
            @foreach($reviews as $review)
            <div class="item">
                <blockquote class="w-50 mx-auto">
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