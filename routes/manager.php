<?php

declare(strict_types=1);

use App\Http\Controllers\Web\ChatUserController;
use App\Http\Controllers\Web\GetChatController;
use App\Http\Controllers\Web\Manager\ExternalOrdermanagerController;
use App\Http\Controllers\Web\Manager\InternalCustomerController;
use App\Http\Controllers\Web\Manager\InternalOrderController;
use App\Http\Controllers\Web\Manager\DesignerReportController;
use App\Http\Controllers\Web\Manager\RatingDesignerController;
use App\Http\Controllers\Web\Manager\TaskReportController;
use App\Http\Controllers\Web\Manager\GetCompletedOrdersController;
use App\Http\Controllers\Web\Manager\PublishItemController;
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
               Route::post('new-message/{customer_id}', ChatUserController::class)->name('manager.new_message');
               Route::get('chat-customer/{customer_id}', GetChatController::class)->name('manager.chat_customer');
               Route::get('get-complete-orders', GetCompletedOrdersController::class)->name('manager.get_completed_orders');
               Route::get('publish-item/{order}', PublishItemController::class)->name('manager.publish_item');
               Route::resource('internal-customers', InternalCustomerController::class);
               Route::resource('external-orders', ExternalOrdermanagerController::class);
               Route::post('external-orders/{order}', [ExternalOrdermanagerController::class, 'store'])->name('store_external');
               Route::resource('internal-orders', InternalOrderController::class);
               Route::get('report/designers',DesignerReportController::class)->name('report.designers');
               Route::get('report/all_task/{taskIds}',[DesignerReportController::class,'Show_task'])->name('all_task');

               Route::get('dailyreport/designers/{designer}',[DesignerReportController::class,'Daily_report'])->name('Daily_designers');
               Route::get('monthlyreport/designers/{designer}',[DesignerReportController::class,'Monthly_report'])->name('Monthly_designers');
               Route::get('dailyreport/tasks',[TaskReportController::class,'Daily_report'])->name('Monthly_tasks');
               Route::get('monthlyreport/tasks',[TaskReportController::class,'Monthly_report'])->name('Monthly_tasks');
          });
     });
