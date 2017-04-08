<?php

 //------------------------------------------------------------------
 
-Route::get('pengguna/lihat/{pengguna}', 'PenggunaController@lihat');
-Route::post('pengguna/simpan', 'PenggunaController@simpan');
-Route::get('pengguna/edit/{pengguna}', 'PenggunaController@edit');
-Route::post('pengguna/edit/{pengguna}', 'PenggunaController@update');
-Route::get('pengguna/hapus/{pengguna}', 'PenggunaController@hapus');
+Route::get('pengguna', 'PenggunaController@awal');
+Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
+Route::post('pengguna/simpan','PenggunaController@simpan');
+Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
+Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
+Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');
+Route::get('pengguna/tambah', 'PenggunaController@tambah');
+
 
 //------------------------------------------------------------------
 
-Route::get('matakuliah/{matakuliah}', 'MatakuliahController@lihat');
-Route::post('matakuliah/simpan', 'MatakuliahController@simpan');
-Route::get('matakuliah/edit/{matakuliah}', 'MatakuliahController@edit');
-Route::post('matakuliah/edit/{matakuliah}', 'MatakuliahController@update');
-Route::get('matakuliah/hapus/{matakuliah}', 'MatakuliahController@hapus');
+Route::get('matakuliah', 'MatakuliahController@awal');
+Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');
+Route::post('matakuliah/simpan','MatakuliahController@simpan');
+Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
+Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
+Route::get('matakuliah/tambah', 'MatakuliahController@tambah');
+Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');
 
 //------------------------------------------------------------------
 
-//Route::get('ruangan/{ruangan}', 'RuanganController@lihat');
-Route::post('ruangan/simpan', 'RuanganController@simpan');
-Route::get('ruangan/edit/{ruangan}', 'RuanganController@edit');
-Route::post('ruangan/edit/{ruangan}', 'RuanganController@update');
-Route::get('ruangan/hapus/{ruangan}', 'RuanganController@hapus');
-
+Route::get('ruangan', 'RuanganController@awal');
+Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');
+Route::post('ruangan/simpan','RuanganController@simpan');
+Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
+Route::get('ruangan/tambah', 'RuanganController@tambah');
+Route::post('ruangan/edit/{ruangan}','RuanganController@update');
+Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');
 //------------------------------------------------------------------
 
-Route::get('mahasiswa/{mahasiswa}', 'MahasiswaController@lihat');
-Route::post('mahasiswa/simpan', 'MahasiswaController@simpan');
-Route::get('mahasiswa/edit/{mahasiswa}', 'MahasiswaController@edit');
-Route::post('mahasiswa/edit/{mahasiswa}', 'MahasiswaController@update');
-Route::get('mahasiswa/hapus/{mahasiswa}', 'MahasiswaController@hapus');
+Route::get('mahasiswa', 'MahasiswaController@awal');
+Route::get('mahasiswa/lihat/{mahasiswa}','MahasiswaController@lihat');
+Route::post('mahasiswa/simpan','MahasiswaController@simpan');
+Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
+Route::get('mahasiswa/tambah', 'MahasiswaController@tambah');
+Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
+Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');
 
 //------------------------------------------------------------------
 
-Route::get('dosen/{dosen}', 'DosenController@lihat');
-Route::post('dosen/simpan', 'DosenController@simpan');
-Route::get('dosen/edit/{dosen}', 'DosenController@edit');
-Route::post('dosen/edit/{dosen}', 'DosenController@update');
-Route::get('dosen/hapus/{dosen}', 'DosenController@hapus');
+Route::get('dosen', 'DosenController@awal');
+Route::get('dosen/lihat/{dosen}','DosenController@lihat');
+Route::post('dosen/simpan','DosenController@simpan');
+Route::get('dosen/edit/{dosen}','DosenController@edit');
+Route::get('dosen/tambah', 'DosenController@tambah');
+Route::post('dosen/edit/{dosen}','DosenController@update');
+Route::get('dosen/hapus/{dosen}','DosenController@hapus');
 
 //------------------------------------------------------------------
 
-Route::get('dosen_matakuliah/{dosen_matakuliah}', 'Dosen_matakuliahController@lihat');
-Route::post('dosen_matakuliah/simpan', 'Dosen_matakuliahController@simpan');
-Route::get('dosen_matakuliah/edit/{dosen_matakuliah}', 'Dosen_matakuliahController@edit');
-Route::post('dosen_matakuliah/edit/{dosen_matakuliah}', 'Dosen_matakuliahController@update');
-Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}', 'Dosen_matakuliahController@hapus');
+Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
+Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');
+Route::post('dosen_matakuliah/simpan','Dosen_matakuliahController@simpan');
+Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@edit');
+Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','Dosen_MatakuliahController@update');
+Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','Dosen_MatakuliahController@hapus');
+Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','Dosen_MatakuliahController@lihat');
 
 //------------------------------------------------------------------
 
-Route::get('jadwal_matakuliah/{jadwal_matakuliah}', 'Jadwal_matakuliahController@lihat');
-Route::post('jadwal_matakuliah/simpan', 'Jadwal_matakuliahController@simpan');
-Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}', 'Jadwal_matakuliahController@edit');
-Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}', 'Jadwal_matakuliahController@update');
-Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}', 'Jadwal_matakuliahController@hapus');
+Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');
+Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');
+Route::post('jadwal_matakuliah/simpan','Jadwal_MatakuliahController@simpan');
+Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','Jadwal_MatakuliahController@edit');
+Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','Jadwal_MatakuliahController@update');
+Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','Jadwal_MatakuliahController@hapus');
+Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}','Jadwal_MatakuliahController@lihat');
 
 //------------------------------------------------------------------
