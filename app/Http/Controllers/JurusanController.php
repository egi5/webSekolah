<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Services\SummernoteService;
use App\Services\UploadService;

class JurusanController extends Controller
{
    private $summernoteService;
    private $uploadService;

    public function __construct(SummernoteService $summernoteService, UploadService $uploadService)
    {
        $this->summernoteService    = $summernoteService;
        $this->uploadService        = $uploadService;
    }

    //TKR
    public function editTKR(){
        $jurusan = Jurusan::where('nama_jurusan', 'Teknik Kendaraan Ringan')->first();
        
        return view('menuAdmin/jurusan/profileTKR', compact('jurusan'));
    }

    public function updateTKR(Request $request, $id){
        $deskripsi = $this->summernoteService->imageUpload('jurusan');
        
        $data       = [
            'deskripsi'         => $deskripsi,
        ];

        Jurusan::where('id', $id )->update($data);

        return redirect()->to('/profileTKR')->with('success','Data berhasil diupdate');
    }

    //TBSM
    public function editTBSM(){
        $jurusan = Jurusan::where('nama_jurusan', 'Teknik Bisnis Sepeda Motor')->first();
        
        return view('menuAdmin/jurusan/profileTBSM', compact('jurusan'));
    }

    public function updateTBSM(Request $request, $id){
        $deskripsi = $this->summernoteService->imageUpload('jurusan');
        
        $data       = [
            'deskripsi'         => $deskripsi,
        ];

        Jurusan::where('id', $id )->update($data);

        return redirect()->to('/profileTBSM')->with('success','Data berhasil diupdate');
    }
    
    //TKJ
    public function editTKJ(){
        $jurusan = Jurusan::where('nama_jurusan', 'Teknik Komputer Jaringan')->first();
        
        return view('menuAdmin/jurusan/profileTKJ', compact('jurusan'));
    }

    public function updateTKJ(Request $request, $id){
        $deskripsi = $this->summernoteService->imageUpload('jurusan');
        
        $data       = [
            'deskripsi'         => $deskripsi,
        ];

        Jurusan::where('id', $id )->update($data);

        return redirect()->to('/profileTKJ')->with('success','Data berhasil diupdate');
    }
    
    //TE
    public function editTE(){
        $jurusan = Jurusan::where('nama_jurusan', 'Teknik Elektro')->first();
        
        return view('menuAdmin/jurusan/profileTE', compact('jurusan'));
    }

    public function updateTE(Request $request, $id){
        $deskripsi = $this->summernoteService->imageUpload('jurusan');
        
        $data       = [
            'deskripsi'         => $deskripsi,
        ];

        Jurusan::where('id', $id )->update($data);

        return redirect()->to('/profileTE')->with('success','Data berhasil diupdate');
    }
    
    //DKV
    public function editDKV(){
        $jurusan = Jurusan::where('nama_jurusan', 'Desain Komunikasi Visual')->first();
        
        return view('menuAdmin/jurusan/profileDKV', compact('jurusan'));
    }

    public function updateDKV(Request $request, $id){
        $deskripsi = $this->summernoteService->imageUpload('jurusan');
        
        $data       = [
            'deskripsi'         => $deskripsi,
        ];

        Jurusan::where('id', $id )->update($data);

        return redirect()->to('/profileDKV')->with('success','Data berhasil diupdate');
    }
}
