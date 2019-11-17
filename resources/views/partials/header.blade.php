<header id="header">
    <section class="store-info">
        <div class="container clearfix">
            <ul class="list-inline m-0 float-left">
                <li class="list-inline-item d-block d-sm-inline-block">
                    <i class="fas fa-home"></i>
                    <strong>Moin Hund</strong>
                    Ratsmühlendamm 26, 22335 Hamburg
                </li>
                <li class="list-inline-item d-block d-sm-inline-block">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+494053889478" style="color: #e5e5e5; text-decoration: none;">+49 40 53 88 94 78</a>
                </li>
                <li class="list-inline-item d-block d-sm-inline-block">
                    @if($range = $openingHours->currentOpenRange(now()))
                        <i class="fas @if($openingHours->isOpenAt(now()->format('Y-m-d'))) fa-door-open @else fa-door-closed @endif"></i>
                        {{ now()->getTranslatedMinDayName() }}
                        {{ $range->start() }} - {{ $range->end() }}
                    @else
                        <i class="fas fa-door-closed"></i>
                        {{ now()->getTranslatedMinDayName() }}
                        geschlossen
                    @endif
                </li>
            </ul>

            <span class="float-right">
                <a href="https://www.moin-hund.de" class="text-white">
                    <i class="fas fa-shopping-basket"></i>
                    Online-Shop
                </a>
            </span>
        </div>
    </section>
    @if(!request()->is('/', '404.html'))
        <section style="background: #E5E5E5;">
            <div class="container">
                <nav>
                    <ol class="breadcrumb m-0 px-0" style="background: transparent;">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Startseite</a></li>
                        @isset($title)
                            <li class="breadcrumb-item active">{{ $title }}</li>
                        @endisset
                    </ol>
                </nav>
            </div>
        </section>
    @endif
</header>
