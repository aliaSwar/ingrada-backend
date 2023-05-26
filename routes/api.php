<?php

use App\Http\Controllers\Api\Authentication\LoginController;
use App\Http\Controllers\Api\Authentication\LogoutController;
use App\Http\Controllers\Api\Authentication\RegisterController;
use App\Http\Controllers\Api\Design\ShowDesignsController;
use App\Http\Controllers\Api\Design\ShowDesignsTypeColorController;
use App\Http\Controllers\Api\Design\ShowDesignsTypeController;
use App\Http\Controllers\Api\Design\ShowDesignsTypeFontController;
use App\Http\Controllers\Api\Design\ShowDesignsTypeScopeController;
use App\Http\Controllers\Api\Design\ShowTypesController;
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
            Route::get(
                'designs',
                ShowDesignsController::class
            );
            Route::get(
                'types',
                ShowTypesController::class
            );
            Route::get(
                'designs/{type}',
                ShowDesignsTypeController::class
            );
            Route::get(
                'scope/{type}/{scope}',
                ShowDesignsTypeScopeController::class
            );
            Route::get(
                'color/{type}/{color}',
                ShowDesignsTypeColorController::class
            );
            Route::get(
                'font/{type}/{font}',
                ShowDesignsTypeFontController::class
            );
        });

        //Order
        Route::name('order.')->prefix('order')->group(function () {
            Route::name('customize.')->prefix('customize')->group(function () {
                //Types
                Route::get('types',[CustomizeOrderController::class, 'getTypes']);
                Route::post('types',[CustomizeOrderController::class, 'storeTypes']);
                //values Type
                Route::get('prefernces',[CustomizeOrderController::class, 'getPrefernces']);
                Route::post('prefernces',[CustomizeOrderController::class, 'storePrefernces']);
                //Information Order
                Route::post('informations',[CustomizeOrderController::class, 'storeInformation']);
                //Colors
                Route::get('colors',[CustomizeOrderController::class, 'getColors']);
                Route::get('suggest-colors',[CustomizeOrderController::class, 'getSuggestColors']);
                Route::post('colors',[CustomizeOrderController::class, 'storeColors']);
                //Fonts
                Route::get('fonts',[CustomizeOrderController::class, 'getFonts']);
                Route::get('suggest-fonts',[CustomizeOrderController::class, 'getSuggestFonts']);
                Route::post('fonts',[CustomizeOrderController::class, 'storeFonts']);
                //Designer
                Route::get('designers',[CustomizeOrderController::class, 'getDesigners']);
                Route::post('designers',[CustomizeOrderController::class, 'storeDesigner']);
            });
        });
    });


});