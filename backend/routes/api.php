<?php

use App\Http\Controllers\PostController;
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

Route::post('/store', [PostController::class, 'store']);

Route::post('/devStore', [PostController::class, 'devStore']);

Route::get('/indexDev', [PostController::class, 'indexDev']);

Route::get('/showDev/{id}', [PostController::class, 'showDev']);

Route::get('/{id}', [PostController::class, 'show']);
