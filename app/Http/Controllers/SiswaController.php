<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kesiswaan;
class SiswaController extends Controller
{
    public function index(){
        $data = Kesiswaan::all();
        return view ('dashboard.siswa.index',compact('data'));
    }

    public function tambahSiswa(){
        return view('dashboard.siswa.tambahSiswa');
    }

    public function tambahDataSiswa(Request $request){
        //dd($request->all());
        Kesiswaan::create($request-> all());
        return redirect()->route('dataSiswa');

    }

    public function tampilDataSiswa($id){
        $data = Kesiswaan::find($id);
        //dd($data);
    }

    public function updateSiswa($id){
        $data = Kesiswaan::find($id);

        return view('dashboard.kesiswaan.edit_siswa',compact('data'));
    }
    public function updateDataSiswa(Request $request, $id){
        $data = Kesiswaan::find($id);
        $data-> update($request->all());
        return redirect()->route('siswa_aktif');
        //dd($data);
    }

    public function deleteDataSiswa($id){
        $data = Kesiswaan::find($id);
        $data->delete();
        return redirect()->route('siswa_aktif');
    }
}
