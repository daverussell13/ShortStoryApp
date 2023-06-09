<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\StoryController;
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

Route::get('/', [AppController::class, 'home'])->name('app.home');

Route::get('/story/create', [StoryController::class, 'create'])->name('story.create');
Route::get('/story/edit/{story}', [StoryController::class, 'edit'])->name('story.edit');

Route::post('/story', [StoryController::class, 'store'])->name('story.store');

Route::get('/story/{story}', [StoryController::class, 'show'])->name('story.show');
Route::put('/story/{story}', [StoryController::class, 'update'])->name('story.update');
Route::delete('/story/{story}', [StoryController::class, 'destroy'])->name('story.destroy');
