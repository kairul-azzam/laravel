<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //mengambil semua data dari tabel posts dan menyimpannya dalam variabel $beritas
        $beritas = Post::all();

        return view('berita', compact('beritas'));

    }

    public function show($id)
    {
        //mengambil data dari tabel posts berdasarkan id yang dipilih dan menyimpannya dalam variabel $berita
        $berita = Post::findOrFail($id);

        return view('detail_berita', compact('berita'));
}

}