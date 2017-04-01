<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class dosenMatakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];
        public function Dosen()
    {
        return $this->belongsTo(dosen::class);
    }

    public function Matakuliah()
    {
        return $this->belongsTo(matakuliah::class);
    }

    public function Jadwal_Matakuliah()
    {
        return $this->hasMany(jadwalMatakuliah::class);
    }
    // public function matakuliah(){
    //       return  $this->hasMany('App\matakuliah', 'id', 'matakuliah_id');
    // }

    // public function dosen(){
    //       return  $this->hasMany('App\dosen', 'id', 'dosen_id');
    // }
}
