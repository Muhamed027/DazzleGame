<?php

use App\Livewire\SearchDropdown;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Forum\ThreadController;
use App\Http\Controllers\Blog\PostController;

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

// Route::get('/test', function () {
//     return view('welcome');
// });



Route::get('/discuss', [ThreadController::class, 'index'])
    ->name('games.forum.index')
    ->middleware('guest');
Route::get('/discuss/show', [ThreadController::class, 'show'])
    ->name('games.forum.show')
    ->middleware('guest');
Route::get('/blog', [PostController::class, 'index'])
    ->name('games.blog.index')
    ->middleware('guest');
Route::get('/blog/show', [PostController::class, 'show'])
    ->name('games.blog.show')
    ->middleware('guest');
Route::get('/', [HomeController::class, 'index'])
    ->name('games.home')
    ->middleware('guest');
Route::get('/games/{slug}', [HomeController::class, 'show'])
    ->name('game.show')
    ->middleware('guest');
