<footer id="footer">
    <section class="payment">
        <div class="container clearfix">
            <div class="row">
                <div class="col-3 col-sm text-center"><img src="{{ asset(mix('images/payment/eccard.png')) }}" class="img-fluid" /></div>
                <div class="col-3 col-sm text-center"><img src="{{ asset(mix('images/payment/maestro.png')) }}" class="img-fluid" /></div>
                <div class="col-3 col-sm text-center"><img src="{{ asset(mix('images/payment/visa.png')) }}" class="img-fluid" /></div>
                <div class="col-3 col-sm text-center"><img src="{{ asset(mix('images/payment/mastercard.png')) }}" class="img-fluid" /></div>
                <div class="col-3 col-sm mt-3 mt-sm-0 text-center"><img src="{{ asset(mix('images/payment/amex.png')) }}" class="img-fluid" /></div>
                <div class="col-3 col-sm mt-3 mt-sm-0 text-center"><img src="{{ asset(mix('images/payment/applepay.png'))}}" class="img-fluid" /></div>
                <div class="col-3 col-sm mt-3 mt-sm-0 text-center"><img src="{{ asset(mix('images/payment/androidpay.png')) }}" class="img-fluid" /></div>
                <div class="col-3 col-sm mt-3 mt-sm-0 text-center"><img src="{{ asset(mix('images/payment/contactless.png')) }}" class="img-fluid" /></div>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="container clearfix">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-0">
                    <h4>Kontakt</h4>
                    <ul class="list-unstyled">
                        <li><strong>Moin Hund</strong></li>
                        <li>Dorfstraße 202</li>
                        <li>25920 Risum-Lindholm</li>
                    </ul>
                    <ul class="list-unstyled m-0">
                        <li>
                            <i class="fas fa-phone mr-2" style="color: #C0C0C0;"></i>
                            <a href="tel:+491752669782" style="color: #e5e5e5; text-decoration: none;">+49 175 2669782</a>
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
                        @foreach($openingHours->forWeek() as $weekday => $ranges)
                            <li>
                                <strong style="display:inline-block;width:2rem;color:#C0C0C0;">{{ trans('weekday.'.$weekday) }}</strong>
                                @if(trans('weekday.'.$weekday) == now()->getTranslatedMinDayName())
                                    <strong>
                                @endif

                                @forelse($ranges as $range)
                                    <span style="white-space:nowrap;">{{ $range->start() }} - {{ $range->end() }}</span>
                                @empty
                                    geschlossen
                                @endforelse

                                @if(trans('weekday.'.$weekday) == now()->getTranslatedMinDayName())
                                    </strong>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 mt-md-0">
                    <h4>Unser Sortiment</h4>
                    <ul class="list-unstyled m-0">
                        <li>
                            <i class="fas fa-angle-right mr-2" style="color: #C0C0C0;"></i>
                            Alserstars
                        </li>
                        <li>
                            <i class="fas fa-angle-right mr-2" style="color: #C0C0C0;"></i>
                            Halsbänder & Leinen
                        </li>
                        <li>
                            <i class="fas fa-angle-right mr-2" style="color: #C0C0C0;"></i>
                            Futter & Leckerchen
                        </li>
                        <li>
                            <i class="fas fa-angle-right mr-2" style="color: #C0C0C0;"></i>
                            Kauartikel
                        </li>
                        <li>
                            <i class="fas fa-angle-right mr-2" style="color: #C0C0C0;"></i>
                            Spielzeug
                        </li>
                        <li>
                            <i class="fas fa-angle-right mr-2" style="color: #C0C0C0;"></i>
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
                    <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <a href="https://facebook.com/MoinHund" target="_blank" class="btn btn-light rounded-circle" rel="noreferrer">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://instagram.com/moin_hund" target="_blank" class="btn btn-light rounded-circle" rel="noreferrer">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://google.com/maps?cid=9367165860801608956" target="_blank" class="btn btn-light rounded-circle" rel="noreferrer">
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
            <span class="float-left">&copy; {{ now()->year }} <a href="{{ url('/') }}">Moin Hund</a>; all rights reserved.</span>
            <span class="float-right">made by <a href="https://gummibeer.de" target="_blank" rel="noreferrer">Gummibeer</a></span>
        </div>
        <div class="container mt-3 text-center">
            <ul class="list-inline m-0">
                <li class="list-inline-item"><a href="{{ url('impressum') }}" class="py-1 px-2">Impressum</a></li>
                <li class="list-inline-item"><a href="{{ url('datenschutz') }}" class="py-1 px-2">Datenschutz</a></li>
            </ul>
        </div>
    </section>
</footer>
