<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index(){
        return view('menuAdmin/pengumuman/index');
    }

    public function create(){
        return view('menuAdmin/pengumuman/add');
    }

    public function store(Request $request){
        
    }

    public function edit(Request $request, $id){
        return view('menuAdmin/pengumuman/edit');
    }

    public function update(Request $request, $id){
        
    }
}
