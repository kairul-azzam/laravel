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
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/fasilitas', function () {
    return view('fasilitas');
});