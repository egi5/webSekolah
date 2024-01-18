<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;

class TentangShowController extends Controller
{
    public function index(){
        $tentang = Tentang::get();
        return view('menuUtama.about', compact('tentang'));
    }
}
