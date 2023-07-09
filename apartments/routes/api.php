<?php

use App\Http\Controllers\Api\v1\ItemsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\OffersController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(OffersController::class)->group(function()
{
    Route::get('/offers', 'alloffers');
    Route::get('/offers/{offer}', 'show');
    Route::post('/offers', 'create');
    Route::patch('/offers/{offer}', 'update');
    Route::delete('/offers/{offer}', 'delete');
});

Route::controller(ItemsController::class)->group(function()
{

    Route::post('/items', 'create');

});


