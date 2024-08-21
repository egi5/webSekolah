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

    public function show($id){
        $pengumuman = Pengumuman::where('id', $id)->first();
        // dd($pengumuman);
        return view('menuAdmin/pengumuman/show', compact('pengumuman'));
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

        return redirect()->route('adminPengumuman')->with('success','Data berhasil ditambah');
    }

    public function edit($id)
    {   
        $pengumuman = Pengumuman::find($id);
        return view('menuAdmin.pengumuman.edit',compact('pengumuman'));
    }

    public function update(Request $request, $id){
        
        $data       = [
            'judul'     => $request->judul,
            'slug'      => SlugService::createSlug(Pengumuman::class, 'slug', $request->judul),
            'thumbnail' => $this->uploadService->imageUpload('pengumuman'),
            'deskripsi' => $this->summernoteService->imageUpload('pengumuman')
        ];

        pengumuman::where('id', $request->id )->update($data);

        return redirect()->route('adminPengumuman')->with('success','Data berhasil diupdate');

    }

    public function destroy($id)
    {   
        Pengumuman::destroy($id);
        return redirect()->route('adminPengumuman')->with('error','Data berhasil dihapus');
    }
}
