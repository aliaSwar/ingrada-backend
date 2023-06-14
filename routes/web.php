<?php


use App\Http\Controllers\Web\Manager\ExternalOrderController;
use App\Http\Controllers\Web\ContentWriter\ExternalOrderContentController;
use App\Http\Controllers\Web\Manager\InternalCustomerController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\Setting\ColorController;
use App\Http\Controllers\Web\Setting\FontController;
use App\Http\Controllers\Web\Setting\RoleController;
use App\Http\Controllers\Web\Setting\ScopeCotroller;
use App\Http\Controllers\Web\Setting\TypeCotroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Designer\TaskController;
use App\Http\Controllers\Web\Manager\InternalOrderController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Web\Setting\CategoryController;
use App\Models\Category;
use App\Models\User;

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
Route::middleware('auth:sanctum')->group(function () {
    Route::get('hello',function () {
        //dd(Category::find(4)->users);
        dd(User::findOrFail(2)->categories);
    });
// Admin Route
Route::prefix('admin/')->group(function () {
    Route::resource('roles', RoleController::class);
    Route::resource('colors', ColorController::class);
    Route::resource('fonts', FontController::class);
    Route::resource('scopes', ScopeCotroller::class);
    Route::resource('types', TypeCotroller::class);
    Route::resource('users', RegisteredUserController::class);
    Route::resource('categories', CategoryController::class);

});

// Manager Route
Route::prefix('manager/')->group(function () {
    Route::resource('internal-customers', InternalCustomerController::class);
    Route::resource('external-orders', ExternalOrderController::class);
    Route::resource('internal-orders', InternalOrderController::class);
});
//designer Route
Route::prefix('designer/')->group(function () {
    Route::resource('tasks', TaskController::class);
    Route::get('/todo', [TaskController::class, 'get_todotask'])->name('to_do');
    Route::get('/index_external', [TaskController::class, 'index_external'])->name('in_ex');
    Route::get('/showexternal/{id}', [TaskController::class, 'show_external'])->name('to');



});
Route::name('content-writer.')->prefix('content-writer/')->group(function () {
  Route::resource('external-orders', ExternalOrderContentController::class);

});

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
