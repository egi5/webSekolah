<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistrasiController extends Controller
{
    public function index(){
        return view('menuAdmin/registrasi');
    }

    public function store(Request $request){

        // $request->validate([
        //     'name'      => 'required|max:255',
        //     'username'  => ['required', 'min:3', 'max:255', 'unique:users'],
        //     'email'     => 'required|email|unique:users',
        //     'password'  => 'required|min:5|max:255'
        // ]);
        $data = [
            'name'      => $request->name,
            'username'  => $request->username,
            'email'     => $request->email,
            // 'password'  => Hash::make($request->password)
        ];
        dd($request->name);
        // return $request->all();

    }
}
