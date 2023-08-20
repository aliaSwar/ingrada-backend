<?php

declare(strict_types=1);


use App\Http\Controllers\Api\Authentication\LoginController;
use App\Http\Controllers\Api\Authentication\LogoutController;
use App\Http\Controllers\Api\Authentication\RegisterController;
use App\Http\Controllers\Api\Chat\ChatCustomerController;
use App\Http\Controllers\Api\Chat\GetMessagesController;
use App\Http\Controllers\Api\Chat\GetRoomsChatController;
use App\Http\Controllers\Api\Configuration\getDesignerController;
use App\Http\Controllers\Api\Configuration\ShowColorsController;
use App\Http\Controllers\Api\Configuration\ShowDesignersController;
use App\Http\Controllers\Api\Configuration\ShowFontsController;
use App\Http\Controllers\Api\Configuration\ShowPreferncesController;
use App\Http\Controllers\Api\Configuration\ShowPrefernceValuesController;
use App\Http\Controllers\Api\Configuration\ShowScopesController;
use App\Http\Controllers\Api\Configuration\ShowSizesController;
use App\Http\Controllers\Api\Configuration\ShowSuggestColorsController;
use App\Http\Controllers\Api\Configuration\ShowSuggestFontsController;
use App\Http\Controllers\Api\Configuration\ShowTypePrefernecesController;
use App\Http\Controllers\Api\Configuration\ShowTypesController;
use App\Http\Controllers\Api\Configuration\ShowValuesPreferneceController;
use App\Http\Controllers\Api\Design\LikedDesignController;
use App\Http\Controllers\Api\Design\ShowDesignsController;
use App\Http\Controllers\Api\Design\ShowDetailsDesignController;
use App\Http\Controllers\Api\Order\CustomizeOrderController;
use App\Http\Controllers\Api\Order\GetOrdersController;
use App\Http\Controllers\Api\Order\RatingDesignerController;
use App\Http\Controllers\Api\Order\UploadFileOrderController;
use App\Http\Controllers\Api\Order\UploadImageOrderController;
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

Route::middleware('auth:sanctum')->get('/user', fn (Request $request) => $request->user());



Route::name('app.')->prefix('app/')->whereNumber(['id'])->group(function (): void {
    Route::name('account.')->prefix('account')->group(function (): void {
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
    Route::middleware(['auth:sanctum'])->group(function (): void {

        //Logout
        Route::get(
            'logout',
            LogoutController::class
        )->name('logout');

        //Design
        Route::name('design.')->prefix('design')->group(function (): void {
            Route::post(
                'designs',
                ShowDesignsController::class
            );
            Route::post(
                'designs/{id}',
                ShowDetailsDesignController::class
            );
            Route::post(
                'add_like',
                LikedDesignController::class
            );
        });
        //Configuration
        Route::name('config.')->prefix('config')->group(function (): void {
            Route::post(
                'types',
                ShowTypesController::class
            );
            Route::post(
                'scopes',
                ShowScopesController::class
            );
            Route::post(
                'type_prefernces',
                ShowTypePrefernecesController::class
            );
            Route::post(
                'prefernces',
                ShowPreferncesController::class
            );
            Route::post(
                'values',
                ShowPrefernceValuesController::class
            );
            Route::post(
                'values_prefernce',
                ShowValuesPreferneceController::class
            );
            Route::post(
                'sizes',
                ShowSizesController::class
            );
            Route::post(
                'colors',
                ShowColorsController::class
            );
            Route::post(
                'suggest_colors',
                ShowSuggestColorsController::class
            );
            Route::post(
                'fonts',
                ShowFontsController::class
            );
            Route::post(
                'suggest_fonts',
                ShowSuggestFontsController::class
            );
            Route::post(
                'designers',
                ShowDesignersController::class
            );
            Route::get(
                'designer/{id}',
                getDesignerController::class
            );
        });
        //Order
        Route::name('order.')->prefix('order')->group(function (): void {
            Route::name('customize.')->prefix('customize')->group(function (): void {

                Route::post(
                    'orders',
                    CustomizeOrderController::class
                );
                Route::post(
                    'upload_file',
                    UploadFileOrderController::class
                );
                Route::post(
                'upload_image',
                UploadImageOrderController::class
                );
                Route::post(
                    'rating-designer',
                    RatingDesignerController::class
                );
            });
            Route::get(
                'get-orders',
                GetOrdersController::class
            );
        });
        //Chat
        Route::name('chat.')->prefix('chat')->group(function (): void {
            Route::post(
                'send_message',
                ChatCustomerController::class
            );
            Route::post(
                'get_rooms_chat',
                GetRoomsChatController::class
            );
            Route::get(
                'get_chat/{order_id}',
                GetMessagesController::class

            );
        });
    });
});
