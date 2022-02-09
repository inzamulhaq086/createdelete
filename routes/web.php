<?php

use App\Http\Controllers\BlogFrom;
use App\Http\Controllers\BlogFromsController;
use App\Http\Controllers\CreateController;
use Illuminate\Support\Facades\Route;

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
Route::get('/home', [CreateController::class, 'home'])->name('home');
Route::get('/form', [CreateController::class, 'form'])->name('form');
Route::post('/createform', [CreateController::class, 'formStore'])->name('form_create');
Route::get('/edit/{id}', [CreateController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [CreateController::class, 'update'])->name('update');
Route::get('/blog', [BlogFromsController::class, 'blog'])->name('blog');
Route::post('/createblog', [BlogFromsController::class, 'blogstore'])->name('blog_store');
Route::get('/blogform', [BlogFromsController::class, 'blogform'])->name('blogform');
Route::get('/blogedit/{id}', [BlogFromsController::class, 'blogedit'])->name('blogedit');
Route::post('/blogupdate/{id}', [BlogFromsController::class, 'blogupdate'])->name('blogupdate');
Route::get('/blogdelete/{id}', [BlogFromsController::class, 'blogdelete'])->name('blogdelete');
