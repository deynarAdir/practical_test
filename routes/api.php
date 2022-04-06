<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\VideoController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register-user', [AuthController::class, 'userRegister']);

// Rutas protegidas con TWT
Route::get('get-posts', [PostController::class, 'get']);
Route::post('store-post', [PostController::class, 'store']);

Route::get('get-videos', [VideoController::class, 'get']);
Route::post('store-video', [VideoController::class, 'store']);
