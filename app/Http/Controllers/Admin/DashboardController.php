<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prodi;
use App\Models\Berita;
use App\Models\Prestasi;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'totalProdi'     => Prodi::count(),
            'totalBerita'    => Berita::count(),
            'totalPrestasi'  => Prestasi::count(),
            'totalUser'      => User::count(),
        ]);
    }
}


