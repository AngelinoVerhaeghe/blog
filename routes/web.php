<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Admin\UsersController;

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

//? Routes public access
Route::get('/', [PagesController::class, 'index']);
Route::resource('/blogs', PostsController::class);

Auth::routes();

//? Routes access only for logged in Users
Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile/{user:name}', [UsersController::class, 'profile']);
    Route::get('/blogs/{post:slug}/edit', [PostsController::class, 'edit'])->name('edit.post');
});

//? Routes access only for adminstrators
Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin', function() {
        return view('admin.index');
    })->name('admin');

    Route::get('/admin', [HomeController::class, 'index'])->name('admin');
    Route::resource('/admin/users', '\App\Http\Controllers\Admin\UsersController');
    Route::resource('/admin/categories', '\App\Http\Controllers\Admin\CategoriesController');
    Route::resource('/admin/posts', '\App\Http\Controllers\Admin\PostsController');

    Route::post('/admin/posts/create', [\App\Http\Controllers\Admin\PostsController::class, 'store'])->name('post.store');

});


//? Example
/* Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home'); */

