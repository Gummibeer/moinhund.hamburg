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
                    <i class="fas fa-home"></i>
                    <strong>Moin Hund</strong>
                    Ratsmühlendamm 26, 22335 Hamburg
                </li>
                <li class="list-inline-item">
                    <i class="fas fa-phone"></i>
                    +49 40 53889478
                </li>
            </ul>

            <span class="float-right">
                @if($opening_hours[$now->dayOfWeek])
                    @php($start = (clone $now)->hour(explode(':', $opening_hours[$now->dayOfWeek]['start'])[0])->minute(explode(':', $opening_hours[$now->dayOfWeek]['start'])[1])->second(0))
                    @php($end = (clone $now)->hour(explode(':', $opening_hours[$now->dayOfWeek]['end'])[0])->minute(explode(':', $opening_hours[$now->dayOfWeek]['end'])[1])->second(0))
                    <i class="fas @if($now->between($start, $end)) fa-door-open @else fa-door-closed @endif"></i>
                    {{ $weekdays[$now->dayOfWeek] }}
                    {{ $opening_hours[$now->dayOfWeek]['start'] }} - {{ $opening_hours[$now->dayOfWeek]['end'] }}
                @else
                    <i class="fas fa-door-closed"></i>
                    {{ $weekdays[$now->dayOfWeek] }}
                    geschlossen
                @endif
            </span>
        </div>
    </section>
</header>