<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller as ViewController;
use App\Http\Controllers\UserController as UserController;


// view
Route::get('/', [ViewController::class, 'index']);
Route::match(['get', 'delete'],'/users', [ViewController::class, 'users'])->name('users');
Route::get('/tasks', [ViewController::class, 'tasks']);
Route::match(['get', 'post'],'/users/new', [ViewController::class, 'new_user'])->name('users_edit');
Route::get('/users/{id}', [ViewController::class, 'user_details']);
Route::put('/users/{id}', [UserController::class, 'update_user']);
Route::delete('/users/{id}', [UserController::class, 'delete_user']);




