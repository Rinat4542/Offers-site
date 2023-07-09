<?php

use App\Http\Controllers\ApartmentsController;
use App\Http\Controllers\OffersController;
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
    return view('main');
});


Route::controller(ApartmentsController::class)->group(function()
{
    Route::get('/apartments', [ApartmentsController::class, 'apartments'])->name('apartments');
    
});

Route::controller(OffersController::class)->group(function()
{
    Route::get('/offers', [OffersController::class, 'index'])->name('offers.index');
    Route::get('/youroffers', [OffersController::class, 'offers'])->name('youroffers.show');
    Route::get('/youroffers/{offer}', [OffersController::class, 'show'])->name('offer.show');
});

Route::controller(OffersController::class)->group(function()
{
    Route::post('/offers/create', [OffersController::class, 'create'])->name('offers.create');
});



