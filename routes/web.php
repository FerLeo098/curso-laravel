<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $person = [
        "name" => "Leo",
        "email" => "fernandoleonel.gonzalez@axarnet.es"
    ];

    dump($person);
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});
