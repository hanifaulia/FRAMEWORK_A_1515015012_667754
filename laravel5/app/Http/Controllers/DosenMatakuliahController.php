<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosenMatakuliah;

class DosenMatakuliahController extends Controller
{
    //
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
        $dosenmatakuliah = new dosenmatakuliah();
        $dosenmatakuliah -> dosen_id = '4';
        $dosenmatakuliah -> matakuliah_id = '2';
        $dosenmatakuliah -> save();
        return "data dengan id {$dosenmatakuliah->id} telah disimpan";
    }
}
