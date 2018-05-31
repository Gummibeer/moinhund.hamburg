<section class="container-fluid">
    <div class="row">
        <div class="col-md-6 @if($direction == 'rtl') order-md-last @endif p-0">
            <div class="embed-responsive embed-responsive-21by9 h-100">
                <div class="embed-responsive-item" style="background-image: url({!! $image !!}); background-size: cover; background-position: {{ $position }};"></div>
            </div>
        </div>
        <div class="col-md-6 content-section">
            <div>
                <p class="mb-2" style="font-size: 2.5rem; white-space: nowrap;">{!! $icons !!}</p>
                <h2 class="mt-0 mb-3">{{ $headline }}</h2>
                <p class="w-75 mx-auto mb-0">{!! $text !!}</p>
            </div>
        </div>
    </div>
</section>