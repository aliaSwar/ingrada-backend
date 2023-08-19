<?php

declare(strict_types=1);

use App\Http\Controllers\Web\Designer\TaskController;
use App\Http\Controllers\Web\Designer\DesignerReportController;



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
               Route::resource('tasks', TaskController::class);
               Route::get('/todo', [TaskController::class, 'get_todotask'])->name('to_do');
               Route::get('/index_external', [TaskController::class, 'index_external'])->name('in_ex');
               Route::get('/showexternal/{id}', [TaskController::class, 'show_external'])->name('designer.show_external_order');
               Route::post('/showexternal/{order}', [TaskController::class, 'store_external'])->name('showexternal');

           //    Route::get('/showexternaltask/{id}', [TaskController::class, 'show_external_task'])->name('showexternaltask');
               Route::post('/showexternal/{order}', [TaskController::class, 'store_external'])->name('showexternal');
               //reports
               Route::get('dailyreport',[DesignerReportController::class,'Daily_report'])->name('Daily_repo');
               Route::get('monthlyreport',[DesignerReportController::class,'Monthly_report'])->name('Monthly_repo');
               Route::get('reports/all_task/{taskIds}',[DesignerReportController::class,'Show_task'])->name('all_tasks');

          });
     });

