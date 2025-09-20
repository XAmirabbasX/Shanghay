<?php

use App\Http\Controllers\Admin\AdminController;
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
});

Route::get('admin/showLoginForm', [\App\Http\Controllers\Admin\LoginAdminController::class, 'showLoginForm'])->name('admin.showLoginForm');
Route::get('admin/login', [\App\Http\Controllers\Admin\LoginAdminController::class, 'login'])->name('admin.login');
