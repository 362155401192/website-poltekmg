<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdiController extends Controller
{
    public function index()
    {
        $prodis = Prodi::latest()->get();
        return view('admin.prodi.index', compact('prodis'));
    }

    public function create()
    {
        return view('admin.prodi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:prodis,kode',
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['kode', 'nama', 'deskripsi']);

        // upload foto
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('prodi', 'public');
        }

        Prodi::create($data);

        return redirect()->route('admin.prodi.index')
            ->with('success', 'Prodi berhasil ditambahkan');
    }

    public function edit(Prodi $prodi)
    {
        return view('admin.prodi.edit', compact('prodi'));
    }

    public function update(Request $request, Prodi $prodi)
    {
        $request->validate([
            'kode' => 'required|unique:prodis,kode,' . $prodi->id,
            'nama' => 'required',
            'deskripsi' => 'nullable',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['kode', 'nama', 'deskripsi']);

        // kalau upload foto baru
        if ($request->hasFile('foto')) {

            // hapus foto lama
            if ($prodi->foto && Storage::disk('public')->exists($prodi->foto)) {
                Storage::disk('public')->delete($prodi->foto);
            }

            $data['foto'] = $request->file('foto')->store('prodi', 'public');
        }

        $prodi->update($data);

        return redirect()->route('admin.prodi.index')
            ->with('success', 'Prodi berhasil diupdate');
    }

    public function destroy(Prodi $prodi)
    {
        // hapus foto
        if ($prodi->foto && Storage::disk('public')->exists($prodi->foto)) {
            Storage::disk('public')->delete($prodi->foto);
        }

        $prodi->delete();

        return back()->with('success', 'Prodi berhasil dihapus');
    }

    
}
