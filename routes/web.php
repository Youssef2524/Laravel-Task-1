<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/admin', [HomeController::class, 'index'])->name('admin');



Route::get('/admin', [AdminController::class, 'index'])->name('admin');


Route::get('/create-user', [AdminController::class, 'create'])->name('create-user');
Route::post('/store-user', [AdminController::class, 'store'])->name('store-user');

Route::get('/show-user', [AdminController::class, 'show'])->name('show-user');


Route::get('/edit-user/{id}', [AdminController::class, 'edit'])->name('edit-user');
Route::put('/update-user/{id}', [AdminController::class, 'update'])->name('update-user');


Route::get('/del-user/{id}', [AdminController::class, 'destroy'])->name('del-user');



Route::get('/showUser', [AdminController::class, 'show2'])->name('showUser');