<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilAdmin;
use App\Models\TipePekerjaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class TipePekerjaanController extends Controller
{
    //
    public function index() {

        $judul = "SILOKER | Admin Tipe Pekerjaan Page";
        $namaHalaman = "Semua Data Tipe Pekerjaan";
        $id = Auth::id();
        $profil = ProfilAdmin::where('admin_id', $id)->first();

        return view('dashboard.tipe_pekerjaan.index', compact('judul', 'namaHalaman', 'profil'));

    }

    public function getDataTipePekerjaan() {
        $data = TipePekerjaan::query()->latest();
        return DataTables::of($data)->addIndexColumn()->addColumn('action', 'dashboard.tipe_pekerjaan.action')->rawColumns(['action'])->make(true);
    }

    public function create() {
        $judul = "SILOKER | Admin Tambah Data Tipe Pekerjaan Page";
        $namaHalaman = "Tambah Data Tipe Pekerjaan";
        $id = Auth::id();
        $profil = ProfilAdmin::where('admin_id', $id)->first();

        return view('dashboard.tipe_pekerjaan.create', compact('judul', 'namaHalaman', 'profil'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama_tipe_pekerjaan' => 'required|unique:tipe_pekerjaan,nama_tipe_pekerjaan',
        ]);

        $tipe_pekerjaan = new TipePekerjaan();
        $tipe_pekerjaan->nama_tipe_pekerjaan = $request->nama_tipe_pekerjaan;
        $tipe_pekerjaan->slug = Str::slug($request->input("nama_tipe_pekerjaan"));

        $tipe_pekerjaan->save();

        return redirect()->route('tipe_pekerjaan.index')->with('success', 'Data Tipe Pekerjaan Berhasil Ditambahkan...');
    }

    public function edit($slug) {
        $judul = "SILOKER | Admin Tipe Pekerjaan Page";
        $namaHalaman = "Semua Data Tipe Pekerjaan";
        $id = Auth::id();
        $profil = ProfilAdmin::where('admin_id', $id)->first();

        $tipePekerjaan = TipePekerjaan::where('slug', $slug)->first();

        return view('dashboard.tipe_pekerjaan.edit', compact('judul', 'namaHalaman', 'tipePekerjaan', 'profil'));
    }

    public function update(Request $request, string $id) {
        $request->validate([
            'nama_tipe_pekerjaan' => 'required',
        ]);

        $tipe_pekerjaan = TipePekerjaan::find($id);
        $tipe_pekerjaan->nama_tipe_pekerjaan = $request->nama_tipe_pekerjaan;
        

        $tipe_pekerjaan->save();

        return redirect()->route('tipe_pekerjaan.index')->with('success', 'Data Tipe Pekerjaan Berhasil Diupdate...');
    }

    public function delete($id) {
        $tipe_pekerjaan = TipePekerjaan::find($id);

        if($tipe_pekerjaan->loker()->exists()) {  
            foreach($tipe_pekerjaan->loker()->get() as $item) {
                $tipe_pekerjaan->delete();
            }
        } 

        return response()->json([
            'message' => "Data Tipe Pekerjaan Berhasil Dihapus..."
        ]);
    }
}
