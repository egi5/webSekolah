<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;
use App\Services\SummernoteService;
use App\Services\UploadService;

class TentangController extends Controller
{
    private $summernoteService;
    private $uploadService;

    public function __construct(SummernoteService $summernoteService, UploadService $uploadService)
    {
        $this->summernoteService    = $summernoteService;
        $this->uploadService        = $uploadService;
    }

    public function index(){
        $tentang = Tentang::get();
        return view('menuAdmin/tentang/index', compact('tentang'));
    }

    public function edit($id){
        $tentang = Tentang::find($id);
        
        return view('menuAdmin/tentang/edit', compact('tentang'));
    }

    public function update(Request $request, $id){
        $deskripsi = $this->summernoteService->imageUpload('pendaftaran');
        
        $data       = [
            'thumbnail'         => $this->uploadService->imageUpload('Tentang'),
            'deskripsi'         => $deskripsi,
            'contact_telp'      => $request->kontaktlp,
            'contact_wa'        => $request->kontakwa
        ];

        // dd($data);

        Tentang::where('id', 1 )->update($data);

        return redirect()->route('adminTentang')->with('success','Data berhasil diupdate');
    }
}
