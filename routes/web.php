<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('{any}', 'app')->where('any', '.+');

Route::get('/', function () {
    return view('app');
});
