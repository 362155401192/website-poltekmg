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
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $fotoName = null;

        if ($request->hasFile('foto')) {
            $fotoName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/berita', $fotoName);
        }

        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'konten' => $request->konten,
            'foto' => $fotoName,
            'tanggal' => now(),
        ]);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita ditambahkan');
    }

    public function edit(Berita $beritum)
    {
        return view('admin.berita.edit', [
            'berita' => $beritum
        ]);
    }

    public function update(Request $request, Berita $beritum)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Jika upload foto baru
        if ($request->hasFile('foto')) {

            // hapus foto lama
            if ($beritum->foto && Storage::exists('public/berita/' . $beritum->foto)) {
                Storage::delete('public/berita/' . $beritum->foto);
            }

            $fotoName = time() . '.' . $request->foto->extension();
            $request->foto->storeAs('public/berita', $fotoName);

            $beritum->foto = $fotoName;
        }

        $beritum->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'konten' => $request->konten,
        ]);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita diupdate');
    }

    public function destroy(Berita $beritum)
    {
        // hapus foto dari storage
        if ($beritum->foto && Storage::exists('public/berita/' . $beritum->foto)) {
            Storage::delete('public/berita/' . $beritum->foto);
        }

        $beritum->delete();

        return back()->with('success', 'Berita dihapus');
    }
}
