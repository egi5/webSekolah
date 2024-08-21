<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikels;
use App\Services\SummernoteService;
use App\Services\UploadService;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Str;

class ArtikelController extends Controller
{
    private $summernoteService;
    private $uploadService;

    public function __construct(SummernoteService $summernoteService, UploadService $uploadService)
    {
        $this->summernoteService    = $summernoteService;
        $this->uploadService        = $uploadService;
    }

    public function index(){
        $artikel = Artikels::get();
        return view('menuAdmin/artikel/index', compact('artikel'));
    }

    public function show($id){
        $artikel = Artikels::find($id);
        return view('menuAdmin/artikel/show', compact('artikel'));
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
            'judul'     => $request->judul,
            'slug'      => SlugService::createSlug(Artikels::class, 'slug', $request->judul),
            'thumbnail' => $this->uploadService->imageUpload('artikel'),
            'deskripsi' => $this->summernoteService->imageUpload('artikel'),
            'tanggal'   => date("Y-m-d")
        ];
        
        Artikels::create($data);

        return redirect()->route('artikel')->with('success','Data berhasil ditambah');
    }

    public function edit($id){
        $artikel = Artikels::find($id);
        return view('menuAdmin/artikel/edit', compact('artikel'));
    }

    public function update(Request $request, $id){
        $deskripsi = $this->summernoteService->imageUpload('artikel');
        
        $data       = [
            'judul'     => $request->judul,
            'slug'      => SlugService::createSlug(Artikels::class, 'slug', $request->judul),
            'thumbnail' => $this->uploadService->imageUpload('artikel'),
            'deskripsi' => $deskripsi,
        ];

        Artikels::where('id', $id )->update($data);

        return redirect()->route('artikel')->with('success','Data berhasil diupdate');

    }

    public function destroy($id)
    {   
        Artikels::destroy($id);
        return redirect()->route('artikel')->with('error','Data berhasil dihapus');
    }

}
