<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;
use App\Services\SummernoteService;
use App\Services\UploadService;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Str;

class PengumumanController extends Controller
{
    private $summernoteService;
    private $uploadService;

    public function __construct(SummernoteService $summernoteService, UploadService $uploadService)
    {
        $this->summernoteService    = $summernoteService;
        $this->uploadService        = $uploadService;
    }

    public function index(){
        $pengumuman = Pengumuman::get();
        return view('menuAdmin/pengumuman/index', compact('pengumuman'));
    }

    public function create(){
        return view('menuAdmin/pengumuman/add');
    }

    public function store(Request $request){
        // $request->validate([
        //     'name'  => 'required',
        //     'detail'=> 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
    
        $data       = [
            'judul'     => $request->judul,
            'slug'      => SlugService::createSlug(Pengumuman::class, 'slug', $request->judul),
            'thumbnail' => $this->uploadService->imageUpload('pengumuman'),
            'deskripsi' => $this->summernoteService->imageUpload('pengumuman'),
            'tanggal'   => date("Y-m-d")
        ];
        
        Pengumuman::create($data);

        return redirect()->route('adminPengumuman.index')->with('success','Data berhasil ditambah');
    }

    public function edit(Pengumuman $pengumuman)
    {   
        return view('menuAdmin.pengumuman.edit',compact('pengumuman'));
    }

    public function update(Request $request, Pengumuman $pengumuman){
        $deskripsi = $this->summernoteService->imageUpload('pengumuman');
        
        $data       = [
            'judul'     => $request->judul,
            'slug'      => SlugService::createSlug(Pengumuman::class, 'slug', $request->judul),
            'thumbnail' => $this->uploadService->imageUpload('pengumuman'),
            'deskripsi' => $deskripsi,
        ];

        pengumuman::where('id', $artikel->id )->update($data);

        return redirect()->route('adminPengumuman.index')->with('success','Data berhasil diupdate');

    }

    public function destroy(Pengumuman $pengumuman)
    {   
        Pengumuman::destroy($pengumuman->id);
        return redirect()->route('adminPengumuman.index')->with('success','Data berhasil dihapus');
    }
}
