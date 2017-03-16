<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;
use App\dosen;

class PenggunaController extends Controller
{
    //
    public function awal(){
        //relasi dari dosen ke pengguna
        return $data = dosen::where('pengguna_id', 12)->with('pengguna')->get(); 
        //relasi dari pengguna ke dosen
        return $data = pengguna::where('id', 12)->with('dosen')->get();
    }
    public function tambah(){
        return $this -> simpan();
    }
    public function simpan(){
        $pengguna = new pengguna();
        $pengguna -> username = 'hanif2';
        $pengguna -> password = bcrypt('hanif3');
        $pengguna -> save();
        return "data dengan username {$pengguna->username} telah disimpan";
    }

}
