<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistrictLc extends Controller
{
    public function index(){
        return view('dlc.dashboard');
        }
}
