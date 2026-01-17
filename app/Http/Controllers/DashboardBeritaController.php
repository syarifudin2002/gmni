<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.berita.index', [
            "title" => "Postingan",
            "beritas" => Berita::latest()->get()
            // "beritas" => Berita::latest()->paginate(7)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.berita.create', [
            "title" => "Create",
            "kategories" => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:beritas',
            'kategori_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')
                ->store('berita-images');
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 50);

        //    dd($validatedData);

        Berita::create($validatedData);
        return redirect('/dashboard/post')->with('success', 'Postingan Berhasil Ditambahkan!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        $title = $berita->title;
        return view('dashboard.admin.berita.show', compact('berita', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('dashboard.admin.berita.edit', [
            "title" => 'Edit',
            "berita" => $berita,
            "kategories" => Kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $rules = [
            'title' => 'required|max:255',
            'kategori_id' => 'required',
            'body' => 'required',
        ];

        if ($request->slug != $berita->slug) {
            $rules['slug'] = 'required|unique:beritas';
        }

        $validatedData = $request->validate($rules);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 50);

        //    dd($validatedData);

        Berita::where('id', $berita->id)
            ->update($validatedData);

        return redirect('/dashboard/post')->with('success', 'Postingan Berhasil di Update!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        Berita::destroy($berita->id);
        return redirect('/dashboard/post')->with('success', 'Postingan Berhasil Dihapus!!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Berita::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);


    }
}
