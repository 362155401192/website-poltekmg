<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
            'judul'     => 'required|string|max:255',
            'thumbnail' => 'nullable|string|max:255', // TEKS
            'konten'    => 'required|string',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('berita', 'public');
        }

        Berita::create([
            'judul'     => $request->judul,
            'slug'      => Str::slug($request->judul),
            'thumbnail' => $request->thumbnail, // TEKS
            'konten'    => $request->konten,
            'foto'      => $fotoPath, // PATH FILE
            'tanggal'   => now(),
        ]);

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul'     => 'required|string|max:255',
            'thumbnail' => 'nullable|string|max:255',
            'konten'    => 'required|string',
            'foto'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($berita->foto) {
                Storage::disk('public')->delete($berita->foto);
            }
            $berita->foto = $request->file('foto')->store('berita', 'public');
        }

        $berita->update([
            'judul'     => $request->judul,
            'slug'      => Str::slug($request->judul),
            'thumbnail' => $request->thumbnail,
            'konten'    => $request->konten,
            'foto'      => $berita->foto,
        ]);

        return redirect()->route('admin.berita.index')
            ->with('success', 'Berita berhasil diupdate');
    }

    public function destroy(Berita $berita)
    {
        if ($berita->foto) {
            Storage::disk('public')->delete($berita->foto);
        }

        $berita->delete();
        return back()->with('success', 'Berita berhasil dihapus');
    }

    public function home()
    {
        $beritas = Berita::latest()->get();
        return view('home', compact('beritas'));
    }
}
