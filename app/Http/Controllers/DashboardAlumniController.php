<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use App\Models\Alumni;
use App\Models\Datadiri;

class DashboardAlumniController extends Controller
{
    //
    public function index(Request $request)
    {
        $user_id = Auth::id();
        $alumni = Alumni::where('user_id', $user_id)->get();
        $data_diri = Datadiri::where('user_id', $user_id)->get();

        return view('alumni.beranda', [
            "alumni" => $alumni[0],
            "data_diri" => $data_diri[0],
        ]);
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => "required",
            'no_ktp' => "required",
            'no_telp' => "required",
            'ibu_kandung' => "required",
            'jk' => "required",
            'tempat_lahir' => "required",
            'tanggal_lahir' => "required",
            'alamat' => "required",
            'nim'=> "required",
            'angkatan'=> "required",
            'tahun_lulus' => "required",
            'jurusan' => "required",
            'profesi'=> "required",
            'alamat_instansi' => "required",
            'nama_instansi'=> "required",
            'kota'=>"required", 
                        
        ]);
        
        $data_diri = Datadiri::find($id);
        $data_diri->nama_lengkap = $request->nama_lengkap;
        $data_diri->no_ktp = $request->no_ktp;
        $data_diri->no_telp = $request->no_telp;
        $data_diri->ibu_kandung = $request->ibu_kandung;
        $data_diri->jk = $request->jk;
        $data_diri->tempat_lahir = $request->tempat_lahir;
        $data_diri->tanggal_lahir = $request->tanggal_lahir;
        $data_diri->alamat = $request->alamat;
        $data_diri->save();

        $alumni = Alumni::find($id);  
        $alumni->nim = $request->nim;
        $alumni->tahun_lulus = $request->tahun_lulus;
        $alumni->jurusan = $request->jurusan;
        $alumni->profesi = $request->profesi;
        $alumni->alamat = $request->alamat_instansi;
        $alumni->nama_instansi = $request->nama_instansi;
        $alumni->kota = $request->kota;
        $alumni->save();
        
        return redirect()->route('alumni.beranda')->with('success', "Data Berhasil Diupdate!");
        


    }
}