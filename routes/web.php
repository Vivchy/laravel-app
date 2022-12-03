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

Route::get('/post/create', [PostController::class, 'create']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('post/update', [PostController::class, 'update']);

Route::get('/post/delete', [PostController::class, 'delete']);
