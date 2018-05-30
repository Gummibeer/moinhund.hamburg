<header id="header">
    @if($banner)
    <section class="banner">
        {!! $banner !!}
    </section>
    @endif
    <section class="store-info">
        <div class="container clearfix">
            <ul class="list-inline m-0 float-left">
                <li class="list-inline-item">
                    <i class="far fa-home"></i>
                    <strong>Moin Hund</strong>
                    Ratsmühlendamm 26, 22335 Hamburg
                </li>
                <li class="list-inline-item">
                    <i class="far fa-phone"></i>
                    +49 40 53889478
                </li>
            </ul>

            <span class="float-right">
                <i class="far fa-clock"></i>
                {{ $weekdays[$now->dayOfWeek] }}
                {{ $opening_hours[$now->dayOfWeek]['start'] }} - {{ $opening_hours[$now->dayOfWeek]['end'] }}
            </span>
        </div>
    </section>
</header>