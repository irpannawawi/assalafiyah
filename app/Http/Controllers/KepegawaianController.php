<?php

namespace App\Http\Controllers;

use App\Models\Kepegawaian;
use Illuminate\Http\Request;

class KepegawaianController extends Controller
{
    public function index(){
        $data = Kepegawaian::all();
        return view ('dashboard.kepegawaian.index',compact('data'));
    }

    public function tambahPegawai(){
        return view('dashboard.kepegawaian.tambah_pegawai');
    }

    public function tambahDataPegawai(Request $request){
        //dd($request->all());
        Kepegawaian::create($request-> all());
        return redirect()->route('kepegawaian');

    }

    public function tampilDataPegawai($id){
        $data = Kepegawaian::find($id);
        //dd($data);
    }

    public function updatePegawai($id){
        $data = Kepegawaian::find($id);

        return view('dashboard.kepegawaian.edit_pegawai',compact('data'));
    }
    public function updateDataPegawai(Request $request, $id){
        $data = Kepegawaian::find($id);
        $data-> update($request->all());
        return redirect()->route('kepegawaian');
        //dd($data);
    }

    public function deleteDataPegawai($id){
        $data = Kepegawaian::find($id);
        $data->delete();
        return redirect()->route('kepegawaian');
    }
}
