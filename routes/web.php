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
//->middleware('auth:admins')
Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/createAdmin', [AdminController::class, 'createAdmin'])->name('admin.createAdmin');
});
