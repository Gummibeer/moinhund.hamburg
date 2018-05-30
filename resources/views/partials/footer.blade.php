<footer id="footer">
    <section class="info">
        <div class="container clearfix">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 mt-md-0">
                    <h4>Kontakt</h4>
                    <ul class="list-unstyled">
                        <li><strong>Moin Hund</strong></li>
                        <li>Ratsmühlendamm 26</li>
                        <li>22335 Hamburg</li>
                    </ul>
                    <ul class="list-unstyled m-0">
                        <li>
                            <i class="fas fa-phone mr-2" style="color: #C0C0C0;"></i>
                            <a href="tel:+494053889478" style="color: #e5e5e5; text-decoration: none;">+49 40 53 88 94 78</a>
                        </li>
                        <li>
                            <i class="fas fa-fax mr-2" style="color: #C0C0C0;"></i>
                            +49 40 53 88 94 77
                        </li>
                        <li>
                            <i class="fas fa-envelope mr-2" style="color: #C0C0C0;"></i>
                            <a href="mailto:info@moin-hund.com" style="color: #e5e5e5; text-decoration: none;">info@moin-hund.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 mt-md-0">
                    <h4>Öffnungszeiten</h4>
                    <ul class="list-unstyled">
                        @foreach($weekdays as $weekday => $name)
                            <li>
                                <strong style="display: inline-block; width: 2rem;">{{ $name }}</strong>
                                @if($opening_hours[$weekday])
                                    {{ $opening_hours[$weekday]['start'] }} - {{ $opening_hours[$weekday]['end'] }}
                                @else
                                    geschlossen
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 mt-md-0">
                    <h4>Unser Sortiment</h4>
                    <ul class="list-unstyled m-0">
                        <li>
                            <i class="fal fa-angle-right mr-2" style="color: #C0C0C0;"></i>
                            Alserstars
                        </li>
                        <li>
                            <i class="fal fa-angle-right mr-2" style="color: #C0C0C0;"></i>
                            Halsbänder & Leinen
                        </li>
                        <li>
                            <i class="fal fa-angle-right mr-2" style="color: #C0C0C0;"></i>
                            Futter & Leckerchen
                        </li>
                        <li>
                            <i class="fal fa-angle-right mr-2" style="color: #C0C0C0;"></i>
                            Kauartikel
                        </li>
                        <li>
                            <i class="fal fa-angle-right mr-2" style="color: #C0C0C0;"></i>
                            Spielzeug
                        </li>
                        <li>
                            <i class="fal fa-angle-right mr-2" style="color: #C0C0C0;"></i>
                            Betten
                        </li>
                    </ul>
                    <p class="mb-0 mt-3">
                        Oder besuche unseren <a href="https://moin-hund.de">Online-Shop</a>.
                    </p>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-6 col-12 mt-4 mt-lg-0">
                    <h4>Soziale Netzwerke</h4>
                    <p>
                        Du möchtest immer auf dem Laufenden bleiben und nichts verpassen? Dann folge uns doch einfach!
                    </p>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://facebook.com/MoinHund" target="_blank" class="btn btn-light rounded-circle">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://instagram.com/moin_hund" target="_blank" class="btn btn-light rounded-circle">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://google.com/maps?cid=9367165860801608956" target="_blank" class="btn btn-light rounded-circle">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="copyright">
        <div class="container clearfix">
            <span class="float-left">&copy; {{ $now->year }} <a href="https://moinhund.hamburg">Moin Hund</a>; all rights reserved.</span>
            <span class="float-right">made by <a href="https://gummibeer.de" target="_blank">Gummibeer</a></span>
        </div>
    </section>
</footer>