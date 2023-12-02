<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::resource('products', App\Http\Controllers\API\ProductAPIController::class);

Route::get('/products', [App\Http\Controllers\API\ProductAPIController::class, 'index']);
Route::post('/products', [App\Http\Controllers\API\ProductAPIController::class, 'store']);
Route::post('/products/{id}', [App\Http\Controllers\API\ProductAPIController::class, 'update']);
Route::delete('/products/{id}', [App\Http\Controllers\API\ProductAPIController::class, 'destroy']);