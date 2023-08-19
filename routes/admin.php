<?php

declare(strict_types=1);


use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Web\Setting\CategoryController;
use App\Http\Controllers\Web\Setting\ColorController;
use App\Http\Controllers\Web\Setting\FontController;
use App\Http\Controllers\Web\Setting\PrefernceController;
use App\Http\Controllers\Web\Setting\PrefernceValueController;
use App\Http\Controllers\Web\Setting\RoleController;
use App\Http\Controllers\Web\Setting\ScopeCotroller;
use App\Http\Controllers\Web\Setting\TypeCotroller;
use App\Http\Controllers\Web\Manager\DesignerReportController;
use App\Http\Controllers\Web\Manager\TaskReportController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "Admin" middleware group. Make something great!
|
*/


     Route::middleware(['auth:sanctum'])->group(function (): void {
          /**
           * Protected endpoints.
          */
          Route::middleware(['admin'])->group(function (): void {
               Route::resource('roles', RoleController::class);
               Route::resource('colors', ColorController::class);
               Route::resource('fonts', FontController::class);
               Route::resource('scopes', ScopeCotroller::class);
               Route::resource('types', TypeCotroller::class);
               Route::resource('users', RegisteredUserController::class);
               Route::resource('categories', CategoryController::class);
               Route::resource('prefernces', PrefernceController::class);
               Route::get('prefernces-create/{type}', [PrefernceController::class, 'create'])->name('prefernc.create');
               Route::post('prefernces-store/{type}', [PrefernceController::class, 'store'])->name('prefernc.store');
               Route::resource('preferncesvalues', PrefernceValueController::class);
               Route::get('preferncesvalues-create/{prefernce}', [PrefernceValueController::class, 'create'])->name('preferncesvalues.create');
               Route::post('preferncesvalues-store/{prefernce}', [PrefernceValueController::class, 'store'])->name('preferncesvalues.store');

               Route::get('report/designers',DesignerReportController::class)->name('report.designers');
               Route::get('report/all_task/{taskIds}',[DesignerReportController::class,'Show_task'])->name('all_task');
               Route::get('dailyreport/designers/{designer}',[DesignerReportController::class,'Daily_report'])->name('Daily_designers');
               Route::get('monthlyreport/designers/{designer}',[DesignerReportController::class,'Monthly_report'])->name('Monthly_designers');
               Route::get('dailyreport/tasks',[TaskReportController::class,'Daily_report'])->name('Monthly_tasks');
               Route::get('monthlyreport/tasks',[TaskReportController::class,'Monthly_report'])->name('Monthly_tasks');
          });
     });
