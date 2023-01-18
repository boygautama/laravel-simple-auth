<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//route user
// Route::get('/home', function(){
//     echo auth()->user()->type;
// });
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// route admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
//route serah
Route::middleware(['auth', 'user-access:serah'])->group(function () {
  
    Route::get('/serah/home', [HomeController::class, 'serahHome'])->name('serah.home');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
