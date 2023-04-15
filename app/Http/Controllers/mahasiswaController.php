<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function selfassessment(){
        return view('pages.mahasiswa.selfassessment');
    }
    public function interview()
    {
        return view('pages.mahasiswa.interview');
    }
}
