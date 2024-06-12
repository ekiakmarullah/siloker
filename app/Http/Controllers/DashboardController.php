<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilAdmin;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\LowonganPekerjaan;
use App\Models\PemberiKerja;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index() {
        $judul = "SILOKER | Admin Dashboard Page";
        $namaHalaman = "Dashboard Admin";
        $id = Auth::id();
        $profil = ProfilAdmin::where('admin_id', $id)->first();
        $totalProfilAdmin = ProfilAdmin::all();
        $totalAdmin = Admin::all();
        $totalPemberiKerja = PemberiKerja::all();
        $totalLowonganPekerjaan = LowonganPekerjaan::all();
        $totalLokasi = Lokasi::all();
        $totalTipePekerjaan = Kategori::all();

        return view('dashboard.index', compact('judul', 'namaHalaman', 'profil', 'totalProfilAdmin', 'totalAdmin', 'totalPemberiKerja', 'totalLowonganPekerjaan', 'totalLokasi', 'totalTipePekerjaan'));
    }
}
