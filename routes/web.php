<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('/');
});
Route::get('/', function () {
    return view('front.login');
});
Route::get('/code', function () {
    return view('front.code');
});
Route::get('/submit', function () {
    return view('front.submit');
});
require __DIR__ . '/auth.php';
