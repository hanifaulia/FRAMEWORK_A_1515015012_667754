<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\pengguna;
Route::get('/', function () {
    $nama = 'Hanif Aulia';
    $nim = '1515015012';
    return view('welcome', compact('nama', 'nim'));
});
Route::get('/postest1',function(){
    $nama = 'Hanif Aulia';
    $nim = '1515015012';
    return view('welcome', compact('nama', 'nim'));
});
Route::get('pengguna','PenggunaController@tambah');
Route::get('dosen','DosenController@tambah');
Route::get('mahasiswa','MahasiswaaController@tambah');
Route::get('matakuliah','MatakuliahController@tambah');
Route::get('dosenmatakuliah','DosenMatakuliahController@tambah');
Route::get('ruangan','RuanganController@tambah');
Route::get('jadwal','JadwalMatakuliahController@tambah');
   
Route::get('/point',function(){
        $pengguna = new pengguna();
        $pengguna -> username = 'hanif';
        $pengguna -> password = 'hanif';
        $pengguna -> save();
        return "data dengan username {$pengguna->username} telah disimpan";
});

Route::get('pengguna/showdata', ['uses' => 'PenggunaController@awal']);
Route::get('mahasiswa/showdata', ['uses' => 'MahasiswaaController@awal']);

//Route('group', ['prefix' => 'Posttest', '']);
// Route::get('mahasiswa',['namespace' => 'Posttest', 'uses' => 'Posttest\Tugas1Controller@namanim']);
// Route::get('/mahasiswa1', ['uses'=>'mahasiswa1Controller@data_mahasiswa']);

