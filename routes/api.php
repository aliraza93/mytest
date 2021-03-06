<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WebsiteController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\SubscriberController;

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

Route::get('websites', [WebsiteController::class, 'index']);

//Posts Routes
Route::get('posts', [PostController::class, 'index']);
Route::post('post/{website}', [PostController::class, 'store']);

//Subscribers Routes
Route::get('susbcribers', [SubscriberController::class, 'index']);
Route::post('subscribe/{website}', [SubscriberController::class, 'store']);