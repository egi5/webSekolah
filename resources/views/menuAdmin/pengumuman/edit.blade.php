@extends('menuAdmin.home', [
    'title' => 'Edit Pengumuman'
])


@section('containerMenuAdmin')
{{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="card" style="width: 80rem;">
    <div class="card-header">
        <div class="row justify-content-between">
            <div class="col-4 text-left">
                <h4>{{date("d/m/Y")}}</h4>
            </div>
            <div class="col-4 text-center">
                <h3 style="color: #566573;">Edit Pengumuman</h3>
            </div>
            <div class="col-4 text-right">
                <a href="/adminPengumuman" class="btn btn-primary btn-sm">Kembali</a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form  method="POST" action="{{ route('adminPengumuman.update',$pengumuman->id) }}" id="form" enctype="multipart/form-data">
            @method('PUT')
            {{ csrf_field() }}

            <div class="row">
                <div class="col-8">
                    <label for="nama" class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{$pengumuman->judul}}">
                </div>
                
                <div class="col">
                    <label>Thumbnail</label>
                    <input type="file" name="file" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                </div>
            </div>
            

            <div class="row mt-3">
                <div class="col">
                    <label for="nama" class="form-label">Isi Artikel</label> 
                    <textarea class="form-control" id="isi" name="isi" rows="10" autofocus>{{$pengumuman->deskripsi}}</textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col text-right"> 
                    <a href="/artikel" class="btn btn-danger">Batal</a>
                    <button id="tombolSimpan" class="btn px-5 btn-primary" type="submit">Update</button>
                </div>
              </div>
        </form>
    </div>
</div>
<script>
    $('#isi').summernote({
      placeholder: "Silahkan tulis isi artikel",
      tabsize:2,
      height:300
    });
</script>

@endsection