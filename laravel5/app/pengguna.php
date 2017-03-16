<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['username'];
    protected $guard = ['password'];
    
    public function dosen(){
          return  $this->hasOne('App\dosen', 'pengguna_id');
    }
    public function mahasiswaa(){
          return  $this->hasOne('App\mahasiswaa', 'pengguna_id');
    }

   
}
