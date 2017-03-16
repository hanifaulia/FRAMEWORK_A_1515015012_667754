<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
    public function awal(){
        return "hello dari DosenController";
    }
    public function tambah(){
        return $this -> simpan();
    }
    public function simpan(){
        $dosen = new dosen();
        $dosen->nama  = 'pados';
        $dosen->nip = '12351212';
        $dosen->alamat = 'tungutng';
        $dosen->pengguna_id = '13';
        $dosen->save();
        return "data dengan nama {$dosen->nama} telah disimpan";
    }
}
