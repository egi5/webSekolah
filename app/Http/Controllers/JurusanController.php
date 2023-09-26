<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function index(){
        return view('menuAdmin/jurusan/index');
    }

    public function create(){
        return view('menuAdmin/jurusan/add');
    }

    public function store(Request $request){
        
    }

    public function edit(Request $request, $id){
        return view('menuAdmin/jurusan/edit');
    }

    public function update(Request $request, $id){
        
    }
}
