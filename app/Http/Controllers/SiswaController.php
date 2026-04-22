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
    public function show($id)
    {
        //mengambil data dari tabel posts berdasarkan id yang dipilih dan menyimpannya dalam variabel $berita
        $siswas = \App\Models\Siswa::findOrFail($id);

        return view('detail_siswa', compact('siswas'));
}
}