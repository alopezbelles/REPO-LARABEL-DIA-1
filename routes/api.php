<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/welcome', function () {
    return 'Welcome to my tasks app';
});

// 4 nuevos, get post put delete, con la ruta correspondiente a tareas. Nos tiene que devolver (return). Esto es ....put tareas, etc. 

Route::put('/put', function ($id) {
    return 'update task: '.$id;
});

Route::post('/welcome', function () {
    return 'Esto es un post............';
});


Route::delete('/delete', function ($id) {
    return 'delete task: '.$id;
});

Route::get('/welcome', function () {
    return 'Welcome to my tasks app';
});