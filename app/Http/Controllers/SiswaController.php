<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SiswaController extends Controller
{
    public function index()
    {
        //mengambil semua data dari tabel siswas dan menyimpannya dalam variabel $siswas
        $siswas = \App\Models\Siswa::all();

        return view('siswa', compact('siswas'));

    }
}