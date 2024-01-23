@extends('menuAdmin.home', [
    'title' => 'Teknik Komputer Jaringan'
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
                <h3 style="color: #566573;">Edit Jurusan Teknik Komputer Jaringan</h3>
            </div>
            <div class="col-4 text-right">
                <a href="/admin" class="btn btn-primary btn-sm">Kembali</a>
            </div>
        </div>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card-body">
        <form  method="POST" action="profileTKJ/{{ $jurusan->id }}" id="form" enctype="multipart/form-data">
            @method('PUT')
            {{ csrf_field() }}

            <div class="row mt-3">
                <div class="col">
                    <label for="nama" class="form-label">Isi Informasi</label> 
                    <textarea class="form-control" id="isi" name="isi" rows="10" autofocus>{{ $jurusan->deskripsi }}</textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col text-right"> 
                    <a href="/adminTentang" class="btn btn-danger">Batal</a>
                    <button id="tombolSimpan" class="btn px-5 btn-primary" type="submit">Update</button>
                </div>
              </div>
        </form>
    </div>
</div>
<script>
    $('#isi').summernote({
      placeholder: "Silahkan tulis isi info Teknik Komputer Jaringan",
      tabsize:2,
      height:300
    });
</script>

@endsection