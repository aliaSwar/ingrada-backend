<?php

declare(strict_types=1);

use App\Http\Controllers\Web\ContentWriter\ExternalOrderContentController;




use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Content Writer Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Content Writer routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "Content Writer" middleware group. Make something great!
|
*/


     Route::middleware(['auth:sanctum'])->group(function (): void {
          /**
           * Protected endpoints.
          */
          Route::middleware(['content-writer'])->group(function (): void {
               Route::resource('external-order', ExternalOrderContentController::class);

          });
     });
