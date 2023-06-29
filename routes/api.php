<?php

use App\Http\Controllers\Api\Authentication\LoginController;
use App\Http\Controllers\Api\Authentication\LogoutController;
use App\Http\Controllers\Api\Authentication\RegisterController;
use App\Http\Controllers\Api\Configuration\ShowPreferncesController;
use App\Http\Controllers\Api\Configuration\ShowPrefernceValuesController;
use App\Http\Controllers\Api\Configuration\ShowScopesController;
use App\Http\Controllers\Api\Configuration\ShowTypesController;
use App\Http\Controllers\Api\Design\ShowDesignsController;
use App\Http\Controllers\Api\Order\CustomizeOrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::name('app.')->prefix('app/')->whereNumber(['id'])->group(function () {
    Route::name('account.')->prefix('account')->group(function () {
        Route::post(
            'register',
            RegisterController::class
        )->name('register');

        Route::post(
            'login',
            LoginController::class
        )->name('login');
    });

    /**
     * Protected endpoints.
     */
    Route::middleware(['auth:sanctum'])->group(function () {

        //Logout
        Route::get(
            'logout',
            LogoutController::class
        )->name('logout');

        //Design
        Route::name('design.')->prefix('design')->group(function () {
            Route::post(
                'designs',
                ShowDesignsController::class
            );
        });
        //Configuration
        Route::name('config.')->prefix('config')->group(function () {
            Route::post(
                'types',
                ShowTypesController::class
            );
            Route::post(
                'scopes',
                ShowScopesController::class
            );
            Route::post(
                'prefernces',
                ShowPreferncesController::class
            );
            Route::post(
                'values',
                ShowPrefernceValuesController::class
            );
        });
        //Order
        Route::name('order.')->prefix('order')->group(function () {
            Route::name('customize.')->prefix('customize')->group(function () {

                Route::post('orders',[CustomizeOrderController::class, 'storeOrder']);
            });
        });
    });


});