<?php

declare(strict_types=1);

use App\Http\Controllers\Web\ContentWriter\ExternalOrderContentController;
use App\Http\Controllers\Web\ContentWriter\TaskContentWriterController;
use App\Http\Controllers\Web\ContentWriter\DesignerReportController;
use App\Http\Controllers\Web\Manager\TaskReportController;
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
               Route::put('updateorder/{order}', [ExternalOrderContentController::class,'update'])->name('order_update');
               Route::resource('task', TaskContentWriterController::class);
               Route::post('orders/create-tasks/{order}', [TaskContentWriterController::class,'store'])->name('content-writer.create-tasks.store');
               Route::get('tasks/create/{order}', [TaskContentWriterController::class,'create'])->name('content-writer.tasks.create');

               //report
               Route::get('content-writer/dailyreport/designers',[DesignerReportController::class,'getDailyDesigner'])->name('content-writer_dailyreport.designers');
               Route::get('content-writer/monthlyreport/designers',[DesignerReportController::class,'Get_designer'])->name('content-writer_monthlyreport.designers');

               Route::get('content-writer/report/all_task/{taskIds}',[DesignerReportController::class,'Show_task'])->name('content-writer_all_task');

               Route::get('content-writer/dailyreport/designers/{designer}',[DesignerReportController::class,'Daily_report'])->name('content-writer_Daily_designers');
               Route::get('content-writer/monthlyreport/designers/{designer}',[DesignerReportController::class,'Monthly_report'])->name('content-writer_Monthly_designers');
               Route::get('content-writer/dailyreport/tasks',[TaskReportController::class,'Daily_report'])->name('content-writer_Daily_tasks');
               Route::get('content-writer/monthlyreport/tasks',[TaskReportController::class,'Monthly_report'])->name('content-writer_Monthly_tasks');

          });
     });
