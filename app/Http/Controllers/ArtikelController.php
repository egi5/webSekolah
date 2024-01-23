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

    public function show(Artikels $artikel){
        $artikel = Artikels::find($artikel->id);
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

        return redirect()->route('artikel.index')->with('success','Data berhasil ditambah');
    }

    public function edit(Artikels $artikel){

        return view('menuAdmin/artikel/edit', compact('artikel'));
    }

    public function update(Request $request, Artikels $artikel){
        $deskripsi = $this->summernoteService->imageUpload('artikel');
        
        $data       = [
            'judul'     => $request->judul,
            'slug'      => SlugService::createSlug(Artikels::class, 'slug', $request->judul),
            'thumbnail' => $this->uploadService->imageUpload('artikel'),
            'deskripsi' => $deskripsi,
        ];

        Artikels::where('id', $artikel->id )->update($data);

        return redirect()->route('artikel.index')->with('success','Data berhasil diupdate');

    }

    public function destroy(Artikels $artikel)
    {   
        Artikels::destroy($artikel->id);
        return redirect()->route('artikel.index')->with('success','Data berhasil dihapus');
    }

}
