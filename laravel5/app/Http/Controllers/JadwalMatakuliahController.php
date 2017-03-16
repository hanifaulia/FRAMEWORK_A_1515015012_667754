<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwalmatakuliah;

class JadwalMatakuliahController extends Controller
{
    public function awal(){
        //relasi dari dosen ke pengguna
        // return $data = dosen::where('pengguna_id', 12)->with('pengguna')->get(); 
        // //relasi dari pengguna ke dosen
        // return $data = pengguna::where('id', 12)->with('dosen')->get();
        return "halo";
    }
    public function tambah(){
        return $this -> simpan();
    }
    public function simpan(){
        $jadwalmatakuliah = new jadwalmatakuliah();
        $jadwalmatakuliah -> mahasiswa_id = '1';
        $jadwalmatakuliah -> ruangan_id = '2';
        $jadwalmatakuliah -> dosen_id = '4';
        $jadwalmatakuliah -> save();
        return "data dengan id {$jadwalmatakuliah->id} telah disimpan";
    }
}
