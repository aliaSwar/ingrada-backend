<?php

declare(strict_types=1);

use App\Http\Controllers\Web\Designer\TaskController;



use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Manager Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Manager routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "Manager" middleware group. Make something great!
|
*/


     Route::middleware(['auth:sanctum'])->group(function (): void {
          /**
           * Protected endpoints.
          */
          Route::middleware(['designer'])->group(function (): void {
               //Route::resource('tasks', TaskController::class);
               //Route::get('tasks/create/{order}', [TaskController::class,'create'])->name('content-writer.tasks.create');
               //Route::post('tasks/{order}', [TaskController::class,'store'])->name('content-writer.tasks.store');
               /* Route::get('/todo', [TaskController::class, 'get_todotask'])->name('to_do');
               Route::get('/index_external', [TaskController::class, 'index_external'])->name('in_ex');
               Route::get('/showexternal/{id}', [TaskController::class, 'show_external'])->name('to');
               Route::post('/showexternal/{order}', [TaskController::class, 'store_external'])->name('showexternal'); */
               
           //    Route::get('/showexternaltask/{id}', [TaskController::class, 'show_external_task'])->name('showexternaltask');
               Route::post('/showexternal/{order}', [TaskController::class, 'store_external'])->name('showexternal');

          });
     });

