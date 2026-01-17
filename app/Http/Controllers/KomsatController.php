<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomsatController extends Controller
{
    public function index() {
        return view(
        'Komsat.komsatunram',
        [
            "title" => "Komisariat UNRAM"
        ]
    );
    }
    public function bungkarno() {
        return view(
        'Komsat.komsatbungkarno',
        [
            "title" => "Komisariat Bung Karno"
        ]
    );
    }
    public function fstt() {
        return view(
        'Komsat.komsatfstt',
        [
            "title" => "Komisariat FSTT"
        ]
    );
    }
    public function trisakti() {
        return view(
        'Komsat.komsattrisakti',
        [
            "title" => "Komisariat Trisakti"
        ]
    );
    }
}
