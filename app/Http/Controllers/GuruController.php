<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kepegawaian;

class GuruController extends Controller
{
    //
    public function index(){
        $data = Kepegawaian::all();
        return view('dashboard.guru.index', compact('data'));
    }

    public function tambahGuru(){
        return view('dashboard.guru.tambahGuru');
    }
}
