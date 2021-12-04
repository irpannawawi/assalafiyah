<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kesiswaan;

class KeuanganController extends Controller
{
    //
    public function dataKeuanganSiswa(){
        $data = Kesiswaan::all();
        return view ('dashboard.keuangan.siswa',compact('data'));
    }

    public function viewKeuanganSiswa(){
        return view('dashboard.keuangan.viewKeuanganSiswa');
    }


}
