<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ArtikelShowController;
use App\Http\Controllers\HomeViewController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PengumumanShowController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PendaftaranShowController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\TentangShowController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\JurusanShowController;
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

Route::get('/',[HomeViewController::class, 'index']);

Route::get('/tentang', [TentangShowController::class, 'index']);

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

Route::get('/pendaftaran', [PendaftaranShowController::class, 'index']);


//route jurusan
Route::get('/tkr', [JurusanShowController::class, 'showTKR']);

Route::get('/tkj',function(){
    return view('menuUtama.menuJurusan.tkj',[
        "title"=>"TKJ"
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
Route::get('/admin',function(){
   return view('menuAdmin.login',[
       "title"=>"Login SMKS YP Kota Blitar"
    ]);
});

//login
Route::get('/login', [LoginController::class,'login'])->name('login');
Route::post('actionLogin', [LoginController::class,'actionLogin'])->name('actionLogin');

//Registrasi
Route::get('registrasi', [RegistrasiController::class, 'registrasi'])->name('registrasi');
Route::post('registrasi/action', [RegistrasiController::class, 'actionregistrasi'])->name('actionregistrasi');

//admin
Route::get('/home', function(){
    return view('menuAdmin.home',[
        "title"=>"Admin"
    ]);
});

//Admin Artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel')->middleware('auth');
Route::get('/artikel/create', [ArtikelController::class, 'create'])->middleware('auth');
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->middleware('auth');
Route::post('/artikel/store', [ArtikelController::class, 'store'])->middleware('auth');
Route::get('/artikel/{id}/edit', [ArtikelController::class, 'edit'])->middleware('auth');
Route::post('/artikel/update/{id}', [ArtikelController::class, 'update'])->middleware('auth');
Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy'])->middleware('auth');

//Admin Pengumuman
Route::get('/adminPengumuman', [PengumumanController::class, 'index'])->name('adminPengumuman')->middleware('auth');
Route::get('/adminPengumuman/create', [PengumumanController::class, 'create'])->middleware('auth');
Route::get('/adminPengumuman/{id}', [PengumumanController::class, 'show'])->middleware('auth');
Route::post('/adminPengumuman/store', [PengumumanController::class, 'store'])->middleware('auth');
Route::get('/adminPengumuman/{id}/edit', [PengumumanController::class, 'edit'])->middleware('auth');
Route::post('/adminPengumuman/update/{id}', [PengumumanController::class, 'update'])->middleware('auth');
Route::delete('/adminPengumuman/{id}', [PengumumanController::class, 'destroy'])->middleware('auth');

//Admin Jurusan
Route::get('/profileTKR', [JurusanController::class, 'editTKR'])->name('profileTKR')->middleware('auth');
Route::put('/profileTKR/{id}', [JurusanController::class, 'updateTKR'])->middleware('auth');
Route::get('/profileTBSM', [JurusanController::class, 'editTBSM'])->name('profileTBSM')->middleware('auth');
Route::put('/profileTBSM/{id}', [JurusanController::class, 'updateTBSM'])->middleware('auth');
Route::get('/profileTKJ', [JurusanController::class, 'editTKJ'])->name('profileTKJ')->middleware('auth');
Route::put('/profileTKJ/{id}', [JurusanController::class, 'updateTKJ'])->middleware('auth');
Route::get('/profileTE', [JurusanController::class, 'editTE'])->name('profileTE')->middleware('auth');
Route::put('/profileTE/{id}', [JurusanController::class, 'updateTE'])->middleware('auth');
Route::get('/profileDKV', [JurusanController::class, 'editDKV'])->name('profileDKV')->middleware('auth');
Route::put('/profileDKV/{id}', [JurusanController::class, 'updateDKV'])->middleware('auth');

//Admin Tentang Sekolah
Route::get('/adminTentang', [TentangController::class,'index'])->name('adminTentang')->middleware('auth');
Route::get('/adminTentang/{id}/edit', [TentangController::class,'edit'])->middleware('auth');
Route::post('/adminTentang/update/{id}', [TentangController::class,'update'])->middleware('auth');

//Admin Pendaftaran
Route::get('/adminPendaftaran', [PendaftaranController::class,'index'])->name('adminPendaftaran')->middleware('auth');
Route::get('/adminPendaftaran/{id}/edit', [PendaftaranController::class,'edit'])->middleware('auth');
Route::post('/adminPendaftaran/update/{id}', [PendaftaranController::class,'update'])->middleware('auth');




