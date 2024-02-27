<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;

Route::get('/', [AlbumController :: class,  'index'])->name('album.index');
Route::get('/album/show/{id}', [AlbumController :: class, 'show'])->name('album.show');
Route::get('/artist/{id}', [ArtistController:: class, 'show'])->name('artist.show');
Route::get('/album/create', [AlbumController :: class, 'create'])->name('album.create');
Route::post('/album/create', [AlbumController :: class, 'store'])->name('album.store');
Route::get('/album/{id}/edit', [AlbumController :: class, 'edit'])->name('album.edit');
Route::put('album/{id}/edit', [AlbumController :: class, 'update'])->name('album.update');
Route::delete('/album/{id}/delete', [AlbumController :: class, 'delete'])->name('album.delete');
