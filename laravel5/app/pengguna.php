<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username'];
    protected $guard = ['password'];
    
//     public function dosen(){
//           return  $this->hasOne('App\dosen', 'pengguna_id');
//     }
//     public function mahasiswaa(){
//           return  $this->hasOne('App\mahasiswaa', 'pengguna_id');
//     }
    public function mahasiswa() {
    	return $this->hasOne(mahasiswaa::class);
    }

    public function dosen() {
    	return $this->hasOne(dosen::class);
    }

   
}
