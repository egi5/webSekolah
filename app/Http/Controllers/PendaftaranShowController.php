<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranShowController extends Controller
{
    public function index(){
        $pendaftaran = Pendaftaran::get();
        return view('menuUtama.pendaftaran', compact('pendaftaran'));
    }
}
