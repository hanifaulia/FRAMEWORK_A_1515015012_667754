<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwalMatakuliah extends Model
{
     protected $table = 'jadwal_matakuliah';
     protected $fillable = ['mahasiswa_id','ruangan_id','dosen_id'];
     public function Mahasiswa()
    {
        return $this->belongsTo(mahasiswaa::class);
    }
    
    public function Ruangan()
    {
        return $this->belongsTo(ruangan::class);
    }

    public function Dosen_Matakuliah()
    {
        return $this->belongsTo(dosenMatakuliah::class);
    }
}
