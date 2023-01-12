<?php

use App\Http\Controllers\Api\v1\AusController;
use App\Http\Controllers\Api\v1\CategoryController;
use App\Models\Aus;
use App\Models\Category;
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


Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\v1'], function() {
    Route::apiResource('categories', CategoryController::class);
    Route::apiResource('auses', AusController::class);
});