<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    $data = json_decode(file_get_contents(resource_path('data/basic.json')), true);
    $data['content'] = json_decode(file_get_contents(resource_path('data/home.json')), true);
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

    return view('page', $data);
});
