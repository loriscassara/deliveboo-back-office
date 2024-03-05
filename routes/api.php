<?php

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

Route::get('/search', [SearchController::class, "index"]);
Route::post('/update', [SearchController::class, "update"]);
