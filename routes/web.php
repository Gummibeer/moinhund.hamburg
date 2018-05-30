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
    return Schema::petStore()
        ->name('Moin Hund')
        ->legalName('T.J.H. Hamburger Hunde GmbH')
        ->image('https://scontent-frx5-1.xx.fbcdn.net/v/t31.0-8/17389076_1109289709216268_4022540907275183257_o.jpg?_nc_cat=0&_nc_eui2=AeF4lsqTdMVgufEMMxMQzLtWkAXeTAKbgchib5dmqgTnQ6ymz7DdtSf5TIXm12GqOM3s__kgMKdYRDLE2KwBK9_sn1l2Rb50eg4i_Nf1_dnx9g&oh=fc7ff1bde405f38cb4912ccf3d66b1a9&oe=5B796A26')
        ->logo('https://scontent-frx5-1.xx.fbcdn.net/v/t31.0-8/17389076_1109289709216268_4022540907275183257_o.jpg?_nc_cat=0&_nc_eui2=AeF4lsqTdMVgufEMMxMQzLtWkAXeTAKbgchib5dmqgTnQ6ymz7DdtSf5TIXm12GqOM3s__kgMKdYRDLE2KwBK9_sn1l2Rb50eg4i_Nf1_dnx9g&oh=fc7ff1bde405f38cb4912ccf3d66b1a9&oe=5B796A26')
        ->currenciesAccepted('EUR')
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
            'https://moinhund.hamburg',
            'https://moin-hund.de',
        ])
        ->taxID('DE294323956')
        ->sameAs([
            'https://www.facebook.com/MoinHund',
            'https://www.instagram.com/moin_hund',
            'https://www.google.com/maps?cid=9367165860801608956',
        ])
        ->publicAccess(true)
        ->smokingAllowed(false)
        ->geo(
            Schema::geoCoordinates()
                ->latitude(53.6265)
                ->longitude(10.0244)
        )
    ;
}

$router->get('/', function () use ($router) {
    $data = basic_view_data();
    $data['content'] = json_decode(file_get_contents(resource_path('data/home.json')), true);

    return view('page', $data);
});
