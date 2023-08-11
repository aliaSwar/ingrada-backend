<?php

declare(strict_types=1);



use App\Http\Controllers\Web\Manager\ExternalOrderController;
use App\Http\Controllers\Web\Manager\InternalCustomerController;
use App\Http\Controllers\Web\Manager\InternalOrderController;
use App\Http\Controllers\Web\Manager\DesignerReportController;
use App\Http\Controllers\Web\Manager\RatingDesignerController;

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
          Route::middleware(['manager'])->group(function (): void {
               Route::resource('internal-customers', InternalCustomerController::class);
               Route::resource('external-orders', ExternalOrderController::class);
               Route::resource('internal-orders', InternalOrderController::class);
               Route::get('report/designers',DesignerReportController::class)->name('report.designers');
               Route::get('report/all_task/{taskIds}',[DesignerReportController::class,'Show_task'])->name('all_task');

               Route::get('dailyreport/designers/{designer}',[DesignerReportController::class,'Daily_report'])->name('Daily_designers');
               Route::get('monthlyreport/designers/{designer}',[DesignerReportController::class,'Monthly_report'])->name('Monthly_designers');
               Route::get('dailyreport/tasks',[TaskReportController::class,'Daily_report'])->name('Monthly_tasks');
               Route::get('monthlyreport/tasks',[TaskReportController::class,'Monthly_report'])->name('Monthly_tasks');


          });
     });
