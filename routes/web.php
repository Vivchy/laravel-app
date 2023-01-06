<?php

use App\Http\Controllers\Post;
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
Route::group(['namespace'=> 'App\Http\Controllers\Post'], function() {

    Route::get('/posts', 'IndexController')->name('post.index');

    Route::get('/posts/create', 'CreateController')->name('post.create');

    Route::post('/posts', 'StoreController')->name('post.store');

    Route::get('/posts/{post}', 'ShowController')->name('post.show');

    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');

    Route::put('/posts/{post}', 'UpdateController')->name('post.update');

    Route::delete('/posts/{post}', 'DestroyController')->name('post.destroy');
});

//========================== Admin =====================================

Route::group(['namespace'=> 'App\Http\Controllers\Admin', 'prefix'=>'admin'],  function() {

    Route::group(['namespace'=> 'Post'], function() {
        Route::get('/post', 'IndexController')->name('admin.post.index');
    });
});
