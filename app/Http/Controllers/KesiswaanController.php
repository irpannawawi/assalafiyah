<?php

namespace App\Http\Controllers;

use App\Models\Kesiswaan;
use Illuminate\Http\Request;

class KesiswaanController extends Controller
{
    public function index(){
        $data = Kesiswaan::all();
        return view ('dashboard.kesiswaan.index',compact('data'));
    }

    public function tambahSiswa(){
        return view('dashboard.kesiswaan.tambah_siswa');
    }

    public function tambahDataSiswa(Request $request){
        //dd($request->all());
        Kesiswaan::create($request-> all());
        return redirect()->route('siswa_aktif');

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
