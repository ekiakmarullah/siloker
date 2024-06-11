<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\ProfilAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfilAdminController extends Controller
{
    //

    public function create() {
        // dd($id);
        $judul = "SILOKER | Halaman Buat Profil";
        $namaHalaman = "Buat Profil";
        $id = Auth::id();
        $profil = ProfilAdmin::where('admin_id', $id)->first();

        return view('dashboard.profil.create', compact('judul', 'namaHalaman', 'profil'));
    }

    public function store(Request $request) {

        $request->validate([
            'username' => 'required',
            'avatar' => 'image|mimes:jpeg,jpg,png'
        ]);

        $id = Auth::id();
        $admin = Admin::findOrFail(Auth::user()->id);
        $profile = ProfilAdmin::where('admin_id', $id)->first();

        $lokasiGambar = "profil_admin/";
        if($request->has('avatar')) {
            $namaFileGambar = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path($lokasiGambar), $namaFileGambar);
            $admin->profile()->updateOrCreate(
                [
                    'admin_id' => $admin->id
                ],
                [
                    'username' => $request->username,
                    'avatar' => $namaFileGambar
                ],
            );
        }

        $admin->profile()->updateOrCreate(
            [
                'admin_id' => $admin->id
            ],
            [
                'username' => $request->username,
            ]
        );


        return redirect()->back()->with('success', 'Data Profil Berhasil Diupdate...');

        // dd($admin);
    }
}
