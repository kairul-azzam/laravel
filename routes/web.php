<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/kontak', function () {
    return view('kontak');
});
// Route::get('/berita', function () {
//     return view('berita');
// });
Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/berita', [App\Http\Controllers\PostController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('berita.show');
Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa.index');

