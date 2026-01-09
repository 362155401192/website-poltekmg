<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.galeri.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'nullable|string|max:255',
            'foto'  => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('foto')->store('gallery', 'public');

        Gallery::create([
            'judul' => $request->judul,
            'foto'  => $path,
        ]);

        return redirect()
            ->route('admin.galeri.index')
            ->with('success', 'Foto berhasil ditambahkan');
    }

    public function edit(Gallery $galeri)
    {
        return view('admin.galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Gallery $galeri)
    {
        $request->validate([
            'judul' => 'nullable|string|max:255',
            'foto'  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            Storage::disk('public')->delete($galeri->foto);
            $galeri->foto = $request->file('foto')->store('gallery', 'public');
        }

        $galeri->judul = $request->judul;
        $galeri->save();

        return redirect()
            ->route('admin.galeri.index')
            ->with('success', 'Foto berhasil diperbarui');
    }

    public function destroy(Gallery $galeri)
    {
        Storage::disk('public')->delete($galeri->foto);
        $galeri->delete();

        return back()->with('success', 'Foto berhasil dihapus');
    }
}
