<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Antrian extends Controller
{
    //
    public function index(){
        $data['antri_cs'] = 0;
        $data['antri_teller1'] = 0;
        $data['antri_teller2'] = 0;
        $data['antri'] = "-";
        return view('antrian'.$data);
        //COBA AJA SENDIRI
    }
}
