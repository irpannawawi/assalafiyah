<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('dashboard.index');
    }

    public function prsonalData(){
        return view('dashboard.prsonalData');
    }

    public function management(){
        return view('dashboard.management');
    }

    public function keuangan(){
        return view('dashboard.keuangan');
    }
}
