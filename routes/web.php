<?php

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

Route::get('/posts', function () {
    return view('post');
});

Route::get('/posts/new', function () {
    return view('new_post');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/users/new', function () {
    return view('new_user');
});

Route::get('/tasks', function () {
    return view('tasks');
});

