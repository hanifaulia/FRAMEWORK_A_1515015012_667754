<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswaa extends Model
{
     protected $table = 'mahasiswaa';
    protected $fillable = ['nama','nim','alamat','pengguna_id'];
     public function pengguna() {
    	return $this->belongsTo(pengguna::class);
    }

    public function jadwalmatakuliah() {
    	return $this->hasMany(jadwalMatakuliah::class);
    }
    
//     public function pengguna(){
//           return  $this->hasOne('App\pengguna', 'id', 'pengguna_id');
//     }
}
