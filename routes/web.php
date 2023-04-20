<?php

use App\Http\Controllers\ColorController;
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


Route::resource('setting/roles', RoleController::class);

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('colors', ColorController::class);
Route::resource('fonts', FontController::class);
Route::resource('items', ItemController::class);
Route::resource('Prefernces', PrefernceController::class);
Route::resource('PrefernceValues', PrefernceValueController::class);
Route::resource('Scopes', ScopeController::class);
Route::resource('Types', TypeController::class);


require __DIR__ . '/auth.php';
