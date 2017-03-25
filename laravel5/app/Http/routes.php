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
Route::get('pengguna','PenggunaController@awal');
Route::get('dosen','DosenController@awal');
Route::get('mahasiswa','MahasiswaaController@awal');
Route::get('matakuliah','MatakuliahController@awal');
Route::get('dosenmatakuliah','DosenMatakuliahController@awal');
Route::get('ruangan','RuanganController@awal');
Route::get('jadwal','JadwalMatakuliahController@awal');

Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('mahasiswa/tambah','MahasiswaaController@tambah');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('dosenmatakuliah/tambah','DosenMatakuliahController@tambah');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('jadwal/tambah','JadwalMatakuliahController@tambah');

Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat'); 
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@haus');

Route::get('matakuliah/{matakuliah}','MatakuliahController@lihat');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus{matakuliah}','MatakuliahController@hapus');

Route::get('ruangan/{ruangan}','RuanganController@lihat');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus{ruangan}','RuanganController@hapus');
   
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

