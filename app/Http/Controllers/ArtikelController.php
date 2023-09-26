<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikels;

class ArtikelController extends Controller
{
    public function index(){
        $artikel = Artikels::with(['user'])->get();
        return view('menuAdmin/artikel/add', $artikel);
    }

    public function create(){
        return view('menuAdmin/artikel/add');
    }

    public function store(Request $request){
        // $request->validate([
        //     'name'  => 'required',
        //     'detail'=> 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
    
        $data       = [
            'judul'     => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
            'tanggal'   => date("Y-m-d")
        ];
        
        Artikels::create($data);

        $artikelId          = Artikels::latest('id')->first();
        $gambar             = $request->file('gambar');
        $deskripsiGambar    = $request->input('deskripsiGambar');
        
        for ($i = 0; $i < count($gambar); $i++) {
            $destinationPath    = 'image/';
            $file               = $gambar[$i];
            $profileImage       = date('YmdHis'). "." . $file->getClientOriginalName();
            $gambar[$i]         = $profileImage;

            // $request->file->move($destinationPath, $profileImage);

            $dataGambar = [
                'artikel_id'        => $artikelId['id'],
                'gambar'            => $gambar[$i],
                'deskripsi_gambar'  => $deskripsiGambar[$i]
            ];
            ArtikelDetail::create($dataGambar);           
        }
        
        return json_encode($gambar);
    }

    public function edit(Request $request, $id){
        return view('menuAdmin/artikel/edit');
    }

    public function update(Request $request, $id){
        $data = [
            'id'        => $id,
            'judul'     => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
        ];

        Artikels::update($data);

        // $idGambar      = $request->input('id_detail');
        // $detailGambar  = ArtikelDetail::delete(['artikel_id' => $id]);
        // $detailGambar::delete($idGambar);

        // $gambar         = $request->input('gambar');
        // $deskripsiGambar= $request->input('deskripsiGambar');

        // for($i = 0; $i < count($gambar); $i++){
        //     $destinationPath    = 'image/';
        //     $file               = $gambar[$i];
        //     $profileImage       = date('YmdHis'). "." . $file->getClientOriginalName();
        //     $gambar[$i]         = $profileImage;

        //     // $request->file->move($destinationPath, $profileImage);

        //     $dataGambar = [
        //         'artikel_id'        => $id,
        //         'gambar'            => $gambar[$i],
        //         'deskripsi_gambar'  => $deskripsiGambar[$i]
        //     ]; 
        // }
    }
}
