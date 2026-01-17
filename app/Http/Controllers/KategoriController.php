<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function show(Kategori $kategori)
    {
        return view(
            'fitur.berita',
            [
                "title" => "Post By Kategori : $kategori->name",
                "beritas" => $kategori->beritas->load('Kategori'),
            ]
        );
    }
}
