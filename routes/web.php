<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ArtikelShowController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PengumumanShowController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PendaftaranShowController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('menuUtama.home',[
        "title"=>"Home"
    ]);
});

Route::get('/tentang', function () {
    return view('menuUtama.about',[
        "title"=>"Tentang"
    ]);
});

Route::get('/Login', function () {
    return ('login');
});

Route::get('/pengajar',function(){
    return view('menuUtama.pengajar',[
        "title"=>"Pengajar"
    ]);
});

Route::get('/biaya',function(){
    return view('menuUtama.biaya',[
        "title"=>"Biaya"
    ]);
});

Route::get('/kegiatan', [ArtikelShowController::class, 'index']);

Route::get('/pengumuman', [PengumumanShowController::class, 'index']);

Route::get('/pendaftaran',[PendaftaranShowController::class, 'index']);


//route jurusan
Route::get('/tkj',function(){
    return view('menuUtama.menuJurusan.tkj',[
        "title"=>"TKJ"
    ]);
});

Route::get('/tkr',function(){
    return view('menuUtama.menuJurusan.tkr',[
        "title"=>"TKR"
    ]);
});

Route::get('/tbsm',function(){
    return view('menuUtama.menuJurusan.tbsm',[
        "title"=>"TBSM"
    ]);
});

Route::get('/elektro',function(){
    return view('menuUtama.menuJurusan.elektro',[
        "title"=>"Elektro"
    ]);
});

Route::get('/dkv',function(){
    return view('menuUtama.menuJurusan.multimedia',[
        "title"=>"Desain Komunikasi Visual"
    ]);
});

//end route jurusan

//route admin
//Route::get('/admin',function(){
  //  return view('menuAdmin.login',[
    //    "title"=>"Login SMKS YP Kota Blitar"
    //]);
    // return view('menuAdmin.home',[
    //     "title"=>"Admin"
    // ]);
//});

//Admin artikel
Route::resource('/artikel', ArtikelController::class);

//pengumuman
Route::resource('/adminPengumuman', PengumumanController::class);

//Pendaftaran
Route::resource('/adminPendaftaran', PendaftaranController::class);

//Tentang Sekolah
Route::resource('/adminTentang', TentangController::class);

//Registrasi
Route::resource('/registrasi', RegistrasiController::class);

//login
Route::post('/login', [LoginController::class, "authenticate"]);