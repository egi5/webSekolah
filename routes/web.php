<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\JurusanController;

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
        "title"=>"home"
    ]);
});

Route::get('/about', function () {
    return view('menuUtama.about',[
        "title"=>"about"
    ]);
});

Route::get('/Login', function () {
    return ('login');
});

Route::get('/pengajar',function(){
    return view('menuUtama.pengajar',[
        "title"=>"pengajar"
    ]);
});

Route::get('/biaya',function(){
    return view('menuUtama.biaya',[
        "title"=>"biaya"
    ]);
});

Route::get('/kegiatan',function(){
    return view('menuUtama.artikel',[
        "title"=>"artikel"
    ]);
});
Route::get('/pengumuman',function(){
    return view('menuUtama.pengumuman',[
        "title"=>"pengumuman"
    ]);
});

//route jurusan
Route::get('/tkj',function(){
    return view('menuUtama.menuJurusan.tkj',[
        "title"=>"tkj"
    ]);
});

Route::get('/tkr',function(){
    return view('menuUtama.menuJurusan.tkr',[
        "title"=>"tkr"
    ]);
});

Route::get('/tbsm',function(){
    return view('menuUtama.menuJurusan.tbsm',[
        "title"=>"tbsm"
    ]);
});

Route::get('/elektro',function(){
    return view('menuUtama.menuJurusan.elektro',[
        "title"=>"elektro"
    ]);
});

Route::get('/multimedia',function(){
    return view('menuUtama.menuJurusan.multimedia',[
        "title"=>"multimedia"
    ]);
});

//end route jurusan

//route admin
Route::get('/admin',function(){
    return view('menuAdmin.home',[
        "title"=>"Admin"
    ]);
});

//Admin artikel
Route::get('/artikelIndex',function(){
    return view('menuAdmin.artikel.index');
});
Route::get('/tambahArtikel',[ArtikelController::class, 'index']);
Route::resource('/artikel', ArtikelController::class);

//pengumuman
Route::get('/tambahPengumuman', [PengumumanController::class, 'index']);
Route::resource('/adminPengumuman', PengumumanController::class);