<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class settingsController extends Controller
{
    // settings
    public function index(){

        return view ('dashboard.settings.index',);
    }
}
