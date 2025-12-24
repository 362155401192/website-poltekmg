<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prestasi;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::latest()->get();
        return view('admin.prestasi.index', compact('prestasis'));
    }

    public function create()
    {
        return view('admin.prestasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tingkat' => 'required',
            'tahun' => 'required',
        ]);

        Prestasi::create($request->all());
        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi ditambahkan');
    }

    public function edit(Prestasi $prestasi)
    {
        return view('admin.prestasi.edit', compact('prestasi'));
    }

    public function update(Request $request, Prestasi $prestasi)
    {
        $prestasi->update($request->all());
        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi diupdate');
    }

    public function destroy(Prestasi $prestasi)
    {
        $prestasi->delete();
        return back()->with('success', 'Prestasi dihapus');
    }
}

