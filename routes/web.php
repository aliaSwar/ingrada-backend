<?php
use App\Http\Controllers\ColorController;
use App\Http\Controllers\FontController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PrefernceController;
use App\Http\Controllers\PrefernceValueController;
use App\Http\Controllers\ScopeController;
use App\Http\Controllers\TypeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('colors', ColorController::class);
Route::resource('fonts', FontController::class);
Route::resource('items', ItemController::class);
Route::resource('Prefernces', PrefernceController::class);
Route::resource('PrefernceValues', PrefernceValueController::class);
Route::resource('Scopes', ScopeController::class);
Route::resource('Types', TypeController::class);


