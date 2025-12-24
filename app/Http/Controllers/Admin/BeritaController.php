<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        Berita::create([
            'judul' => $request->judul,
            'slug' => \Str::slug($request->judul),
            'konten' => $request->konten,
            'tanggal' => now(),
        ]);

        return redirect()->route('admin.berita.index')->with('success','Berita ditambahkan');
    }

    public function edit(Berita $beritum)
    {
        return view('admin.berita.edit', ['berita' => $beritum]);
    }

    public function update(Request $request, Berita $beritum)
    {
        $beritum->update($request->all());
        return redirect()->route('admin.berita.index')->with('success','Berita diupdate');
    }

    public function destroy(Berita $beritum)
    {
        $beritum->delete();
        return back()->with('success','Berita dihapus');
    }
}

