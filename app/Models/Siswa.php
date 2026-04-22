<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'id',
        'nama',
        'kelas',
        'jurusan',
    ];
}
