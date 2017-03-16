<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswaa;

class MahasiswaaController extends Controller
{
     public function awal(){
        // return "hello dari MahasiswaaController";
        //relasi dari dosen ke pengguna
        return $data = mahasiswaa::where('pengguna_id', 14)->with('pengguna')->get(); 
        //relasi dari pengguna ke dosen
        return $data = pengguna::where('id', 12)->with('mahasiswaa')->get();
    }
    public function tambah(){
        return $this -> simpan();
    }
    public function simpan(){
        $mahasiswaa = new mahasiswaa();
        $mahasiswaa->nama  = 'eno';
        $mahasiswaa->nim = '010101';
        $mahasiswaa->alamat = 'aws';
        $mahasiswaa->pengguna_id = '14';
        $mahasiswaa->save();
        return "data dengan nama {$mahasiswaa->nama} telah disimpan";
    }
}
