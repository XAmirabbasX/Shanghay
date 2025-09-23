<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Hash;
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
Route::prefix('admin')->middleware('auth:admins')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/showManageAdmin', [AdminController::class, 'showManageAdmin'])->name('admin.showManageAdmin');
    Route::get('/showCreateAdmin', [AdminController::class, 'showCreateAdmin'])->name('admin.showCreateAdmin');
    Route::post('/storeAdmin', [AdminController::class, 'storeAdmin'])->name('admin.storeAdmin');
    Route::get('/showOrder', [\App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin.showOrder');
    Route::get('/order/delete/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'delete'])->name('admin.OrderDelete');
    Route::post('/order/details/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'details'])->name('admin.OrderDetails');
});

Route::get('admin/showLoginForm', [\App\Http\Controllers\Admin\LoginAdminController::class, 'showLoginForm'])->name('admin.showLoginForm');
Route::post('admin/login', [\App\Http\Controllers\Admin\LoginAdminController::class, 'login'])->name('admin.login');
