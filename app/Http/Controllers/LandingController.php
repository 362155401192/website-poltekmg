<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Models\Berita;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index', [
            'prodis'  => Prodi::orderBy('nama')->get(),
            'beritas' => Berita::latest()->limit(6)->get()
        ]);
    }

    public function detailBerita(Berita $berita)
    {
        return view('landing.berita-detail', compact('berita'));
    }
}

