<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class RuanganController extends Controller
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
        $ruangan = new ruangan();
        $ruangan -> title = 'ruangan1';
        $ruangan -> save();
        return "data dengan nama {$ruangan->title} telah disimpan";
    }
}
