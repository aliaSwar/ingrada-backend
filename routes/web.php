<?php


use App\Http\Controllers\Web\Manager\ExternalOrderController;
use App\Http\Controllers\Web\Manager\InternalCustomerController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\Setting\ColorController;
use App\Http\Controllers\Web\Setting\FontController;
use App\Http\Controllers\Web\Setting\RoleController;
use App\Http\Controllers\Web\Setting\ScopeCotroller;
use App\Http\Controllers\Web\Setting\TypeCotroller;
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

Route::get('/d', function () {
    dd(Carbon::now());
});
// Setting Route

// Admin Route
Route::prefix('admin/')->group(function () {
    Route::resource('roles', RoleController::class);
    Route::resource('colors', ColorController::class);
    Route::resource('fonts', FontController::class);
    Route::resource('scopes', ScopeCotroller::class);
    Route::resource('types', TypeCotroller::class);
});

// Manager Route
Route::prefix('manager/')->group(function () {
    Route::resource('internal-customers', InternalCustomerController::class);
    Route::resource('external-orders', ExternalOrderController::class);
});
//designer Route
Route::prefix('designer/')->group(function () {
    Route::resource('task', TaskController::class);
});


Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';