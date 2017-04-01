<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];
    public function pengguna() {
    	return $this->belongsTo(pengguna::class);
    }

    public function dosen_matakuliah() {
    	return $this->hasMany(dosenMatakuliah::class);
    }

    // public function pengguna(){
    //       return  $this->hasOne('App\pengguna', 'id', 'pengguna_id');
    // }
    // public function dosenMatakuliahDosen(){
    //       return  $this->hasMany('App\dosenMatakuliah', 'dosen_id');
    // }

}
