<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;


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
//only user have access to dashboard
    Route::get('/dashboard', function () {
    return view('dashboard');
    })->middleware(['auth', 'role:user'])
    ->name('dashboard');

    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//only admin have access to dashboard
    Route::middleware(['auth','role:admin'])->group(function (){
    Route::controller(DashboardController::class)
        ->group(function (){
            Route::get('/admin/dashboard','index')->name('index');

            //categories
   // Route::get('/admin/categories',[CategoryController::class,'index'])->name('admin.categories');
 //   Route::get('/admin/categories',[CategoryController::class,'addcategory'])->name('admin.addcategories');
Route::resource('categories',CategoryController::class);
        });

});
require __DIR__.'/auth.php';



