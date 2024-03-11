<?php

use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\Api\SearchController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/restaurants", [RestaurantController::class, "index"]);

Route::get("/restaurants/{id}", [RestaurantController::class, "show"]);

Route::get("/products", [ProductController::class, "index"]);

Route::get("/products/{id}", [ProductController::class, "show"]);

Route::get('/token', [OrderController::class, "getToken"]);
Route::post('/token', [OrderController::class, "processPayment"]);
Route::post('/token', [OrderController::class, "processOrder"]);


Route::get('/search', [SearchController::class, 'index']);

Route::post('/orders/store', [OrderController::class, 'store']);

Route::resource('orders', OrderController::class);




