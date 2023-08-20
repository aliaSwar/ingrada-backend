<?php

declare(strict_types=1);

use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\Web\Designer\TimerCounterController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Controllers\Web\Manager\DesignerReportController;
use App\Http\Controllers\Web\Manager\TaskReportController;
use App\Http\Controllers\Web\Manager\RatingDesignerController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Setting Route
Route::middleware('auth:sanctum')->group(function (): void {
    Route::get('/use', function () {
      auth()->user()->assignRole('admin');
        return auth()->user()->hasRole('admin');
    });


    });


    Route::get('/',IndexController::class)->middleware(['auth', 'verified'])->name('dashboard');

//filter_date
    Route::get('filters/{designer}',[DesignerReportController::class,'Filterdate'])->name('filters');
    Route::get('filters/task',[TaskReportController::class,'Filterdate'])->name('filters_task');

require __DIR__ . '/auth.php';
