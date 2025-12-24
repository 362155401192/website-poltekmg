<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prodi;
use Illuminate\Http\Request;

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
        ]);

        Prodi::create($request->all());
        return redirect()->route('admin.prodi.index')->with('success', 'Prodi berhasil ditambahkan');
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
        ]);

        $prodi->update($request->all());
        return redirect()->route('admin.prodi.index')->with('success', 'Prodi berhasil diupdate');
    }

    public function destroy(Prodi $prodi)
    {
        $prodi->delete();
        return back()->with('success', 'Prodi berhasil dihapus');
    }
}


