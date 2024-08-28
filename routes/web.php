<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Main::class, 'index']);

Route::get('/posts', [\App\Http\Controllers\Posts::class, 'index']);
Route::get('/posts/create', [\App\Http\Controllers\Posts::class, 'create']);
Route::get('/posts/{id}', [\App\Http\Controllers\Posts::class, 'show']);
Route::post('/posts', [\App\Http\Controllers\Posts::class, 'store']);

Route::get('/notes', [\App\Http\Controllers\Notes::class, 'index']);
Route::get('/notes/create', [\App\Http\Controllers\Notes::class, 'create']);
Route::get('/notes/{id}', [\App\Http\Controllers\Notes::class, 'show']);
Route::post('/notes', [\App\Http\Controllers\Notes::class, 'store']);
