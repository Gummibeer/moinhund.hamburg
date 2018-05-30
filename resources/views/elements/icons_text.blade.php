<section class="content-section" style="background: #515E64; color: #ffffff;">
    <div class="container">
        <h2 class="mt-0 mb-4">{{ $headline }}</h2>

        <div class="row">
            @foreach($icons as $icon)
            <div class="col-md-3 col-6">
                <img src="{!! $icon['icon'] !!}" class="img-fluid mb-3 w-75" />
                <h4>{{ $icon['label'] }}</h4>
            </div>
            @endforeach
        </div>

        <p class="text-center w-75 mx-auto mt-3 mb-0">{!! $text !!}</p>
    </div>
</section>