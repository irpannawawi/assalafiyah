<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kepegawaian;

class PegawaiController extends Controller
{
    //
    public function index(){
        $data = Kepegawaian::all();
        return view('dashboard.pegawai.index', compact('data'));
    }

    public function tambahPegawai(){
        return view('dashboard.pegawai.tambahPegawai');
    }
}
