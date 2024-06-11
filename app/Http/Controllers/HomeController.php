<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dataLowonganPekerjaan = DB::table('lowongan_pekerjaan')->join('pemberi_kerja', 'lowongan_pekerjaan.id_pemberi_kerja', '=', 'pemberi_kerja.id')->join('lokasi', 'lowongan_pekerjaan.id_lokasi', '=', 'lokasi.id')->join('tipe_pekerjaan', 'lowongan_pekerjaan.id_tipe_pekerjaan', '=', 'tipe_pekerjaan.id')->select("lowongan_pekerjaan.*", "lowongan_pekerjaan.nama as nama_lowongan_pekerjaan", "lowongan_pekerjaan.batas_lamaran as batas_lamaran_pekerjaan", "lowongan_pekerjaan.gambar as gambar_lowongan_pekerjaan", "lowongan_pekerjaan.besaran_gaji as besaran_gaji_lowongan_pekerjaan", "lowongan_pekerjaan.deskripsi as deskripsi_lowongan_pekerjaan", "lowongan_pekerjaan.created_at as tgl_publikasi_lowongan_pekerjaan", "pemberi_kerja.nama as nama_pemberi_kerja", "lokasi.nama_kampung", "lokasi.nama_kecamatan", "tipe_pekerjaan.nama_tipe_pekerjaan")->latest()->get();

        // dd($dataLowonganPekerjaanFullTime);
        return view('frontend.index', compact('dataLowonganPekerjaan'));
    }
}
