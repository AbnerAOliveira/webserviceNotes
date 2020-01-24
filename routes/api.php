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

//HERE I CAN USE THE RESOURCE ROUTE, BUT I PREFER IT =D.

Route::prefix('note')->group(function () {
    Route::post('/create', 'NoteController@create');
    Route::delete('/delete', 'NoteController@delete');
    Route::get('/show', 'NoteController@show');
    Route::patch('/edit', 'NoteController@edit');
});

