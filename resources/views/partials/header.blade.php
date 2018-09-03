<header id="header">
    @if($banner)
        <section class="banner">
            {!! $banner !!}
        </section>
    @endif
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
                </li>
            </ul>

            <span class="float-right">
                <a href="https://www.moin-hund.de" style="color: #ffffff;">
                    <i class="fas fa-shopping-basket"></i>
                    Online-Shop
                </a>
            </span>
        </div>
    </section>
    @if(app('request')->path() != '/')
        <section style="background: #E5E5E5;">
            <div class="container">
                <nav>
                    <ol class="breadcrumb m-0 px-0" style="background: transparent;">
                        <li class="breadcrumb-item"><a href="{{ url() }}">Startseite</a></li>
                        <li class="breadcrumb-item active">@if(isset($title)) {{ $title }} @else {{ title_case(app('request')->path()) }} @endif</li>
                    </ol>
                </nav>
                {!!
                    \Spatie\SchemaOrg\Schema::breadcrumbList()
                        ->itemListElement([
                            \Spatie\SchemaOrg\Schema::listItem()
                                ->position(1)
                                ->item(
                                    \Spatie\SchemaOrg\Schema::thing()
                                        ->setProperty('@id', url())
                                        ->name('Moin Hund')
                                ),
                            \Spatie\SchemaOrg\Schema::listItem()
                                ->position(2)
                                ->item(
                                    \Spatie\SchemaOrg\Schema::thing()
                                        ->setProperty('@id', app('url')->current())
                                        ->name(isset($title) ? $title : title_case(app('request')->path()))
                                ),
                        ])
                        ->toScript()
                !!}
            </div>
        </section>
    @endif
</header>