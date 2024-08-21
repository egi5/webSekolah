<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class RegistrasiController extends Controller
{
    public function registrasi()
    {
        return view('menuAdmin/registrasi');
    }
    
    public function actionregistrasi(Request $request)
    {
        $user = User::create([
            'name'      =>$request->name,
            'username'  =>$request->username,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'active'    => 1
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan email dan password.');
        return redirect('registrasi');
    }
}
