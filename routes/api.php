<?php

use Illuminate\Support\Facades\Route;

Route::get('/random/{min}/{max}', function ($min, $max) {
    $number_random = rand($min,$max);
    $array = array('numero' => $number_random);
    return response($array,200);
});
