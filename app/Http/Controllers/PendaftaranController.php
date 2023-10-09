<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Services\SummernoteService;
use App\Services\UploadService;

class PendaftaranController extends Controller
{
    private $summernoteService;
    private $uploadService;

    public function __construct(SummernoteService $summernoteService, UploadService $uploadService)
    {
        $this->summernoteService    = $summernoteService;
        $this->uploadService        = $uploadService;
    }

    public function index(){
        $pendaftaran = Pendaftaran::get();
        return view('menuAdmin/pendaftaran/index', compact('pendaftaran'));
    }

    public function edit($id){
        $pendaftaran = Pendaftaran::find($id);
        
        return view('menuAdmin/pendaftaran/edit', compact('pendaftaran'));
    }

    public function update(Request $request, Pendaftaran $pendaftaran){
        $deskripsi = $this->summernoteService->imageUpload('pendaftaran');
        
        $data       = [
            'thumbnail'         => $this->uploadService->imageUpload('pendaftaran'),
            'deskripsi'         => $deskripsi,
            'link_pendaftaran'  => $request->link,
        ];

        // dd($data);

        Pendaftaran::where('id', 1 )->update($data);

        return redirect()->route('adminPendaftaran.index')->with('success','Data berhasil diupdate');
    }
}
