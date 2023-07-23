<?php

declare(strict_types=1);


use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Web\ContentWriter\ExternalOrderContentController;
use App\Http\Controllers\Web\Designer\TaskController;
use App\Http\Controllers\Web\Manager\ExternalOrderController;
use App\Http\Controllers\Web\Manager\InternalCustomerController;
use App\Http\Controllers\Web\Manager\InternalOrderController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\Setting\CategoryController;
use App\Http\Controllers\Web\Setting\ColorController;
use App\Http\Controllers\Web\Setting\FontController;
use App\Http\Controllers\Web\Setting\PrefernceController;
use App\Http\Controllers\Web\Setting\PrefernceValueController;
use App\Http\Controllers\Web\Setting\RoleController;
use App\Http\Controllers\Web\Setting\ScopeCotroller;
use App\Http\Controllers\Web\Setting\TypeCotroller;
use App\Http\Controllers\ChartController;
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
        return auth()->user()->hasRole('admin');
    });


    Route::get('/', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::view('/chat', 'chat')->name('chat');
require __DIR__ . '/auth.php';