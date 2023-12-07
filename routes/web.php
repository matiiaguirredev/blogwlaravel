<?php

use App\Http\Controllers\ContactanosController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [PostController::class, 'getIndex'])->name('blog.index');

Route::get('post/{id}', [PostController::class, 'getPost'])->name('blog.post');

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin'], function () {
    Route::get('', [PostController::class, 'getAdminIndex'])->name('admin.index');
    Route::get('create', [PostController::class, 'getAdminCreate'])->name('admin.create');
    Route::post('create', [PostController::class, 'postAdminCreate'])->name('admin.create');
    Route::get('edit/{id}', [PostController::class, 'getAdminEdit'])->name('admin.edit');
    Route::post('edit', [PostController::class, 'postAdminUpdate'])->name('admin.update');
});

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');