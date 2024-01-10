<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanShowController extends Controller
{
    public function index(){
        $pengumuman = Pengumuman::get();
        return view('menuUtama.pengumuman', compact('pengumuman'));
    }
}
