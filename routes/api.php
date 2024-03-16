<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PopupController;
use App\Http\Controllers\Api\InteractionController;

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
 
Route::post('/login', [AuthController::class, 'login']);
Route::group(['middleware' => ['role:owner', 'auth:sanctum']], function () {
    Route::apiResource('popups', PopupController::class);
});

Route::group(['middleware'=>'auth:sanctum'], function(){
    Route::post('/popup/interaction', [InteractionController::class,'logInteraction']);
});