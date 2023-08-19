<?php

declare(strict_types=1);

use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\Web\Designer\TimerCounterController;
use App\Http\Controllers\Web\Manager\DesignerReportController;
use App\Http\Controllers\Web\Manager\TaskReportController;
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
    Route::get('use', function () {
      auth()->user()->assignRole('admin');
        return auth()->user()->hasRole('admin');
    });


    });
   // Route::post('/timer',)->name('hello');

    Route::get('/', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');




Route::post('/design', function () {
  return view('dashboard');
  })->name('design');
  Route::post('rating',DesignerReportController::class,'ratingMonthly');
  Route::get('/chart', [ChartController::class,'index']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//filter_date
    Route::get('filters/{designer}',[DesignerReportController::class,'Filterdate'])->name('filters');
    Route::get('filters/task',[TaskReportController::class,'Filterdate'])->name('filters_task');

require __DIR__ . '/auth.php';
 