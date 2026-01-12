<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RewardHistoryController;
use App\Http\Controllers\Api\UserController;
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
Route::post('login', [LoginController::class, 'login']);

Route::post('admin/login', [LoginController::class, 'loginAdmin']);

Route::group(['middleware' => ['assign.guard:users']], function(){
    Route::post('rewards/random', [UserController::class, 'generateRewards']);
});

Route::group(['prefix' => 'admin', 'middleware' => ['assign.guard:admins']], function(){
    Route::group(['prefix' => 'reward-histories'], function() {
        Route::get('list', [RewardHistoryController::class, 'getAllRewardHistory']);
    });
});

