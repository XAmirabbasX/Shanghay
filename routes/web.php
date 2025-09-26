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
    Route::get('/showOrders', [\App\Http\Controllers\Admin\OrderController::class, 'showOrders'])->name('admin.showOrders');
    Route::get('/deleteOrder/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'delete'])->name('admin.deleteOrder');
    Route::get('/detailsOrder/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'details'])->name('admin.detailsOrder');
    Route::get('/setOrderPriority/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'setPriority'])->name('admin.setPriority');
    Route::get('/removeOrderPriority', [\App\Http\Controllers\Admin\OrderController::class, 'removePriority'])->name('admin.removePriority');
    Route::get('/restoreOrder/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'restoreOrder'])->name('admin.restoreOrder');
    Route::post('/searchOrders', [\App\Http\Controllers\Admin\OrderController::class, 'searchOrders'])->name('admin.searchOrders');
});

Route::get('admin/showLoginForm', [\App\Http\Controllers\Admin\LoginAdminController::class, 'showLoginForm'])->name('admin.showLoginForm');
Route::post('admin/login', [\App\Http\Controllers\Admin\LoginAdminController::class, 'login'])->name('admin.login');
