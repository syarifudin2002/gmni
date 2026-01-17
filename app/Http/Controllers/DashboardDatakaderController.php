<?php

namespace App\Http\Controllers;

use App\Models\Datakader;
use Illuminate\Http\Request;

class DashboardDatakaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.datakader.index', [
            "title" => "Postingan",
            "datakader" => Datakader::latest()->get()
            // "beritas" => Berita::latest()->paginate(7)->withQueryString()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.datakader.create', [
            'title' => 'Tambah Data Kader'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string',
            'no_whatsapp' => 'required|string|max:20',
            'jurusan' => 'nullable|string|max:255',
            'kampus' => 'nullable|string|max:255',
            'jenjang_kaderisasi' => 'required|string',
            'tahun_kaderisasi' => 'required|digits:4',
            'asal_dpk' => 'required|string',
            'image' => 'image|file|max:1024',
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')
                ->store('datakader-images');
        }

        Datakader::create($validatedData);
        return redirect('/dashboard/datakader')->with('success', 'Postingan Berhasil Ditambahkan!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Datakader $datakader)
    {
        return view('dashboard.admin.datakader.show', [
            'title' => 'Detail Data Kader',
            'kader' => $datakader
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Datakader $datakader)
    {
        return view('dashboard.admin.datakader.edit', [
            'title' => 'Edit Data Kader',
            'kader' => $datakader
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Datakader $datakader)
    {
        Datakader::destroy($datakader->id);
        return redirect('/dashboard/datakader')->with('success', 'Postingan Berhasil Dihapus!!');
    }


    // Form pendaftaran user
    public function createUser()
    {
        // Cek apakah user sudah submit
        $existing = auth()->user()->datakader; // pakai relasi hasOne

        if ($existing) {
            // Sudah submit → redirect ke info pribadi
            return redirect()->route('datakader.showUser', $existing->id);
        }

        return view('dashboard.indexuser'); // form user

    }

    // Simpan data pendaftaran user
    public function storeUser(Request $request)
    {
        // Cek lagi sebelum submit
        if (auth()->user()->datakader) {
            return redirect()->route('datakader.showUser', auth()->user()->datakader->id)
                ->with('info', 'Kamu sudah mengisi form pendaftaran.');
        }

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'nullable|string',
            'no_whatsapp' => 'required|string|max:20',
            'jurusan' => 'nullable|string|max:255',
            'kampus' => 'nullable|string|max:255',
            'jenjang_kaderisasi' => 'required|string',
            'tahun_kaderisasi' => 'required|digits:4',
            'asal_dpk' => 'required|string',
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')
                ->store('datakader-images');
        }
        $validatedData['user_id'] = auth()->id();
        Datakader::create($validatedData);
        return redirect('/pendaftaran-kader')->with('success', 'Pendaftaran Berhasil !!');
    }

    // Tampilkan info pribadi user
    public function showUser(Datakader $datakader)
    {
        if ($datakader->user_id != auth()->id()) {
            abort(403);
        }

        return view('dashboard.user.show', [
            'kader' => $datakader
        ]);
    }
}
