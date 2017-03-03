<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class mahasiswa1Controller extends Controller
{
    public function data_mahasiswa(){
        $data = \App\mahasiswa1::all();
        return $data;
    }
}
