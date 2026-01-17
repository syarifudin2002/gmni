<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view(
            'fitur.berita',
            [
                "title" => "Berita GMNI",
                "beritas" => Berita::latest()->filter(request(['search', 'category']))->paginate(7)->withQueryString() //variabel beritas untuk view berita
                // "beritas" => Berita::with(['Kategori'])->latest()->get() //variabel beritas untuk view berita & kategori berasal dari relationship
                // "beritas" => Berita::all() //variabel berita untuk view berita
            ]
        );
    }
    public function show(Berita $berita)
    {
        return view(
            'fitur.berit',
            [
                "title" => "Single Berita",
                "beritas" => $berita
            ]
        );
    }
}
