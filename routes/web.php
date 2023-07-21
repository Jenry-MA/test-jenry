<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [\App\Http\Controllers\ToDoController::class, 'index'])->name('index');
Route::get('/todo/create', [\App\Http\Controllers\ToDoController::class, 'create'])->name('create');
Route::post('/todo', [\App\Http\Controllers\ToDoController::class, 'storage']);
Route::get('/todo/{item}', 'TasksController@show');
Route::get('/todo/{item}/edit', [\App\Http\Controllers\ToDoController::class, 'edit'])->name('todo.update');
Route::put('/todo/{item}', 'ToDoController@update');
Route::delete('/todo/{item}', 'ToDoController@destroy')->name('todo.destroy');
