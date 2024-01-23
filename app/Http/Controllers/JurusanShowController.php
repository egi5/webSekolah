<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanShowController extends Controller
{
    public function showTKR(){
        $jurusan = Jurusan::where('nama_jurusan', 'Teknik Kendaraan Ringan')->first();
        // dd($jurusan->nama_jurusan);
        return view('menuUtama.menuJurusan.tkr', compact('jurusan'));
    }
}
