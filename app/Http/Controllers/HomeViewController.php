<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikels;

class HomeViewController extends Controller
{
    public function index(){
        $kegiatan = Artikels::get();
        return view('menuUtama.home', compact('kegiatan'));
    }
}
