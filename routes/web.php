<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\PostController;
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

# простые роуты

Route::get('/first', function () {
    return 'this is first page in new lessons';
});

# роут с контроллером тут
Route::get('/confirst', [FirstController::class, 'first']);

Route::get('/second', [FirstController::class, 'second']);

Route::get('/learn', [LearnController::class, 'index']);

Route::get('/post/create', [PostController::class, 'create'])->name('post.create');


Route::get('/oldpost/update', [PostController::class, 'update']);

Route::get('/oldpost/delete', [PostController::class, 'delete']);

Route::get('/oldpost/first', [PostController::class, 'firstOrCreate']);

Route::get('/oldpost/uporc', [PostController::class, 'updateOrCreate']);

// =================   CRUD  ======================

Route::get('/posts', [PostController::class, 'index'])->name('post.index');

Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');

Route::post('/posts', [PostController::class, 'store'])->name('post.store');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');

Route::put('/posts/{post}', [PostController::class,  'update'])->name('post.update');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');
