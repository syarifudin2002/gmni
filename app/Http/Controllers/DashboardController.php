<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function index() {
    //     return view('dashboard.index', [
    //         "title" => "Dashboard"
    //     ]);
    // }

    // public function user() {
    //     return view('dashboard.indexuser', [
    //         "title" => "Dashboard"
    //     ]);
    // }

    public function index()
    {
        if (auth()->user()->role === 'admin') {
            return view('dashboard.index', [
                'title' => 'Admin'
            ]);
        }

        return view('dashboard.indexuser', [
            'title' => 'User'
        ]);
    }
}
