<?php

use Spatie\SchemaOrg\Schema;

function basic_view_data(): array
{
    $data = json_decode(file_get_contents(resource_path('data/basic.json')), true);
    $data['now'] = \Carbon\Carbon::now()->setTimezone('Europe/Berlin');
    $data['weekdays'] = [
        \Carbon\Carbon::MONDAY => 'Mo',
        \Carbon\Carbon::TUESDAY => 'Di',
        \Carbon\Carbon::WEDNESDAY => 'Mi',
        \Carbon\Carbon::THURSDAY => 'Do',
        \Carbon\Carbon::FRIDAY => 'Fr',
        \Carbon\Carbon::SATURDAY => 'Sa',
        \Carbon\Carbon::SUNDAY => 'So',
    ];
    $data['schema'] = build_schema();

    return $data;
}

function build_schema()
{
    return Schema::store()
        ->name('Moin Hund')
        ->legalName('T.J.H. Hamburger Hunde GmbH')
        ->image(url('img/logo.png'))
        ->logo(url('img/logo.png'))
        ->currenciesAccepted('EUR')
        ->paymentAccepted([
            'Cash',
            'EC Card',
            'Maestro Card',
            'Credit Card',
            'Apple Pay',
            'Android Pay',
        ])
        ->openingHours([
            'Mo-Fr 10:00-18:00',
            'Sa 10:00-13:00',
        ])
        ->priceRange('$$')
        ->address(
            Schema::postalAddress()
                ->addressCountry('DE')
                ->addressLocality('Hamburg')
                ->postalCode('22335')
                ->streetAddress('Ratsmühlendamm 26')
        )
        ->email('info@hundeklick.de')
        ->telephone('+494050098992')
        ->faxNumber('+494053889477')
        ->founder(
            Schema::person()
                ->familyName('Nasilowski')
                ->givenName('Tanja')
        )
        ->url([
            url(),
            'https://moin-hund.de',
        ])
        ->taxID('DE294323956')
        ->sameAs([
            'https://www.facebook.com/MoinHund',
            'https://www.instagram.com/moin_hund',
            'https://www.google.com/maps?cid=9367165860801608956',
        ])
        ->publicAccess(true)
        ->isAccessibleForFree(true)
        ->smokingAllowed(false)
        ->geo(
            Schema::geoCoordinates()
                ->latitude(53.6265)
                ->longitude(10.0244)
        )
        ->contactPoint(
            Schema::contactPoint()
                ->availableLanguage(
                    Schema::language()
                        ->name('German')
                )
                ->telephone('+494050098992')
                ->contactType('customer service')
        )
    ;
}

$router->get('/', function () use ($router) {
    $data = basic_view_data();
    $data['content'] = json_decode(file_get_contents(resource_path('data/home.json')), true);

    return view('page', $data);
});

$router->get('impressum', function () use ($router) {
    $data = basic_view_data();
    $data['content'] = json_decode(file_get_contents(resource_path('data/imprint.json')), true);

    return view('page', $data);
});

$router->get('datenschutz', function () use ($router) {
    $data = basic_view_data();
    $data['content'] = json_decode(file_get_contents(resource_path('data/privacy.json')), true);

    return view('page', $data);
});
