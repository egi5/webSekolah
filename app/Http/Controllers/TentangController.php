<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;

class TentangController extends Controller
{
    public function index(){
        return view('menuAdmin/tentang/edit');
    }

    public function edit(Request $request, $id){
        return view('menuAdmin/tentang/edit');
    }

    public function update(Request $request, $id){
        
    }
}
