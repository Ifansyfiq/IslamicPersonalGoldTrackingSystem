<?php

use App\Http\Controllers\GoldController;
use App\Http\Controllers\PawnshopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ScraperController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZakatController;
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

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // scrap gold price
    Route::get('/scraper', [ScraperController::class, 'scraper'])->name('scraper');

    Route::resource('gold', GoldController::class);
    Route::resource('zakat', ZakatController::class);
    // redirect website
    Route::get('pawhshop/website/{pawnshop}', [PawnshopController::class, 'website'])->name('pawnshop.website');
    Route::resource('pawnshop', PawnshopController::class);
    Route::resource('user', UserController::class);
});
