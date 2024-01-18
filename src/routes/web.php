<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\ShorterController;
use App\Http\Controllers\RedirectController;

Route::get('/', function () {
    return view('shorter');
});

Route::post('/', ShorterController::class)->name('shorter');
Route::get('/{url}', RedirectController::class)->name('redirector');


