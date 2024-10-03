<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home-11928');
});

Route::get('/home-11928', function () {
    return view('home-11928');
});

Route::get('/profile-dina', function () {
    $orang = new App\Models\Orang();
    $data = $orang->getAll();
    return view('profile-dina', $data);
});
