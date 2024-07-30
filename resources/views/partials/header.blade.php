<header id="header">
    <section class="store-info">
        <div class="container clearfix">
            <ul class="list-inline m-0 float-left">
                <li class="list-inline-item d-block d-sm-inline-block">
                    <i class="fas fa-home"></i>
                    <strong>Moin Hund</strong>
                    Dorfstraße 202, 25920 Risum-Lindholm
                </li>
                <li class="list-inline-item d-block d-sm-inline-block">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+491752669782" style="color: #e5e5e5; text-decoration: none;">+49 175 2669782</a>
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
