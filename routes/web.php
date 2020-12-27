<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;

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

// Route::middleware('auth')->group(function() {
//     Route::resource('/todo', TodoController::class);
//     Route::put('/todos/{todo}/complete', [TodoController::class, 'complete'])->name('todo.complete');
//     Route::delete('/todos/{todo}/incomplete', [TodoController::class, 'incomplete'])->name('todo.incomplete');    
// });
Route::resource('/todo', TodoController::class);
Route::put('/todos/{todo}/complete', [TodoController::class, 'complete'])->name('todo.complete');
Route::delete('/todos/{todo}/incomplete', [TodoController::class, 'incomplete'])->name('todo.incomplete');

Route::post('/upload', [UserController::class, 'uploadAvatar']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
