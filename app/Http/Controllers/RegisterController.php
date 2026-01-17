<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register",
            "active" => "Regiter"
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|max:255",
            "username" => "required|min:3|max:255",
            "email" => "required|email:dns|unique:users",
            "password" => "required|min:5|max:255"
        ]);

        // validasi password hashing
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('status', 'Registrasi Berhasil!!!');

        return redirect('/login')->with('status', 'Registrasi Berhasil!!!');
    }
}
