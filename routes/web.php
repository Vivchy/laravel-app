<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LaravelController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\MyBlogController;
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

Route::get('/hello/{id}', function ($id) {
    return 'hello world ' . $id;
});

Route::get('/todo/done', [PagesController::class, 'todoDone']);

Route::get('/todo/not-done', [PagesController::class, 'todoNotDone']);

Route::get('/todo', [PagesController::class, 'todo']);

Route::get('/hello', [PagesController::class, 'helloPage']);

Route::get('/laravel', [LaravelController::class, 'laravelPage']);

Route::get('/student', [PagesController::class, 'student']);

Route::get('/student/{id}', [PagesController::class, 'pageStudent']);

Route::get('/link', [PagesController::class, 'newLink']);

Route::get('/blog', [PagesController::class, 'blog'])->name('blog');

Route::get('/article/{id}', [PagesController::class, 'pageBlog']);

Route::post('article/', [ArticlesController::class, 'store']);

Route::post('article/delete', [ArticlesController::class, 'destroy']);

Route::get('/article/{id}/update', [PagesController::class, 'articleUpdate']);

Route::post('/article/update', [ArticlesController::class, 'update']);

Route::get('/my-blog', [MyBlogController::class, 'allBlog'])->name('my-blog');

Route::get('/my-new-post', [MyBlogController::class, 'newBlog']);

Route::post('/addPost', [MyBlogController::class, 'addPost']);

Route::get('/post/{id}', [MyBlogController::class, 'post']);

Route::post('/addComment', [MyBlogController::class, 'addComment']);

Route::post('/deletePost', [MyBlogController::class, 'deletePost']);

Route::get('/allcom', [MyBlogController::class, 'delcom']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [MyBlogController::class, 'admin'])->name('admin')->middleware(['auth', 'admin']);
