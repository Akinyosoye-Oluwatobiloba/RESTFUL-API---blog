<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/',[HomeController::class,'welcome']);
});


Route::controller(BlogController::class)->group(function(){
    Route::get('/home','index');
    Route::get('/create','create');
    Route::post('/store','store');
    Route::get('/edit/{id}','edit');
    Route::put('update/{id}', 'update');
    Route::get('delete/{id}', 'destroy');
});

// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
