<?php

use App\Http\Controllers\Api\CMS\AuthController;
use App\Http\Controllers\Api\CMS\HeadersController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::apiResource('posts', PostController::class)->middleware('auth:sanctum');
// Route::apiResource('/admin', [AuthController::class, 'getData'])->middleware('auth:sanctum');
Route::post('/register', [AuthController::class, 'createUser']);
// Route::post('/login', [AuthController::class, 'loginUser']);
Route::get('/admin', [AuthController::class, 'getData']);
Route::get('/causes-btn', [HeadersController::class, 'getCasusesForDonateButton']);
Route::get('/homeHeaders', [HeadersController::class, 'getHomeHeaders']);
Route::post('/addSlider', [HeadersController::class, 'addHeaderSlide']);

// Route::group(['prefix' => 'api', 'middleware' => 'throttle:3,10'], function () {
//     Route::post('/login', [AuthController::class, 'loginUser']);
//     });

    Route::middleware(['throttle:6,1'])->group(function () {
        Route::post('/login', [AuthController::class, 'loginUser']);
    });