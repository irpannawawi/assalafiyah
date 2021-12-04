<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    //
    public function index(){
        return view('dashboard.kelas.index');
    }

    public function tambahKelas(){
        return view('dashboard.kelas.tambahKelas');
    }
}
