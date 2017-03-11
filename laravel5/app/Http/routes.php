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
Route::get('pengguna/{pengguna}',function($pengguna){
    return "hallo world dari pengguna $pengguna";
});
Route::get('berita/{berita?}',function($berita="laravel 5"){
    return "berita $berita belum dibaca";
});
//Route('group', ['prefix' => 'Posttest', '']);
Route::get('mahasiswa',['namespace' => 'Posttest', 'uses' => 'Posttest\Tugas1Controller@namanim']);
Route::get('/mahasiswa1', ['uses'=>'mahasiswa1Controller@data_mahasiswa']);

