<?php

declare(strict_types=1);

use App\Http\Controllers\Web\ContentWriter\ExternalOrderContentController;
use App\Http\Controllers\Web\ContentWriter\TaskController;
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
               Route::resource('orders', ExternalOrderContentController::class);
               Route::post('orders/create-tasks/{order}', [TaskController::class,'store'])->name('content-writer.create-tasks.store');
               Route::get('tasks/create/{order}', [TaskController::class,'create'])->name('content-writer.tasks.create');

          });
     });
