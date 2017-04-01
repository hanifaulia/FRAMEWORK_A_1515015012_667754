<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class MatakuliahController extends Controller
{
    public function awal(){
        //relasi dari dosen ke pengguna
        return $data = dosen::where('pengguna_id', 12)->with('pengguna')->get(); 
        //relasi dari pengguna ke dosen
        return $data = pengguna::where('id', 12)->with('dosen')->get();
    }
     public function tambah(){
        return view('matakuliah.tambah');
    }
    public function simpan(Request $input){
        $matakuliah = new matakuliah();
        $matakuliah -> username = $input->username;
        $matakuliah -> password = $input->password;
        $informasi = $matakuliah->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }
    public function edit($id){
        $matakuliah = matakuliah::find($id);
        return view('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));
    }
    public function lihat($id){
        $matakuliah = matakuliah::find($id);
        return view('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
    }
    public function update($id, request $input){
        $matakuliah = matakuliah::find($id);
        $matakuliah -> username = $input->username;
        $matakuliah -> password = $input->password;
        $informasi = $matakuliah->save() ? 'berhasil update data' : 'gagal update data';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }
    public function hapus($id){
        $matakuliah = matakuliah::find($id);
         $informasi = $matakuliah->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);

    }

}
