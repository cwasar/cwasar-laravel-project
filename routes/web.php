<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Main::class, 'index'])->name('main.index');

Route::get('/posts', [\App\Http\Controllers\Posts::class, 'index'])->name('posts.index');
Route::get('/posts/create', [\App\Http\Controllers\Posts::class, 'create'])->name('posts.create');
Route::get('/posts/{id}/edit', [\App\Http\Controllers\Posts::class, 'edit'])->name('posts.edit');
Route::get('/posts/{id}', [\App\Http\Controllers\Posts::class, 'show'])->name('posts.show');
Route::post('/posts', [\App\Http\Controllers\Posts::class, 'store']);
Route::put('/posts/{id}', [\App\Http\Controllers\Posts::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}/destroy', [\App\Http\Controllers\Posts::class, 'destroy'])->name('posts.destroy');




Route::get('/notes', [\App\Http\Controllers\Notes::class, 'index'])->name('notes.index');
Route::get('/notes/create', [\App\Http\Controllers\Notes::class, 'create']);
Route::get('/notes/{id}/edit', [\App\Http\Controllers\Notes::class, 'edit'])->name('notes.edit');
Route::put('/notes/{id}', [\App\Http\Controllers\Notes::class, 'update'])->name('notes.update');
Route::delete('/notes/{id}/destroy', [\App\Http\Controllers\Notes::class, 'destroy'])->name('notes.destroy');
Route::get('/notes/{id}', [\App\Http\Controllers\Notes::class, 'show'])->name('notes.show');
Route::post('/notes', [\App\Http\Controllers\Notes::class, 'store']);


Route::get('/cars', [\App\Http\Controllers\Cars::class, 'index'])->name('cars.index');
Route::get('/cars/create', [\App\Http\Controllers\Cars::class, 'create'])->name('cars.create');
Route::post('/cars', [\App\Http\Controllers\Cars::class, 'store'])->name('cars.store');
Route::put('/cars/{id}', [\App\Http\Controllers\Cars::class, 'update'])->name('cars.update');
Route::get('/cars/{id}/edit', [\App\Http\Controllers\Cars::class, 'edit'])->name('cars.edit');
Route::get('/cars/{id}', [\App\Http\Controllers\Cars::class, 'show'])->name('cars.show');
Route::delete('/cars/{id}/destroy', [\App\Http\Controllers\Cars::class, 'destroy'])->name('cars.destroy');

Route::get('/trash', [\App\Http\Controllers\Cars::class, 'trash'])->name('trash.index');
Route::put('/trash/{car}/restore', [\App\Http\Controllers\Cars::class, 'restore'])->name('trash.restore');
Route::delete('cars/{car}/forceDelete', [\App\Http\Controllers\Cars::class, 'forceDelete'])->name('trash.forceDelete');


Route::resource('brands', \App\Http\Controllers\Brands::class);

Route::resource('tags', \App\Http\Controllers\Tags::class);
