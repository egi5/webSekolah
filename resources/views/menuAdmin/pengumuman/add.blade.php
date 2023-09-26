@extends('menuAdmin.home', [
    'title' => 'Tambah Artikel'
])

@push('css')
    <!-- Summernote -->
    <link href={{ asset('menuAdmin/vendor/summernote/summernote.min.css')}} rel="stylesheet">
@endpush

@section('containerMenuAdmin')
<div class="card" style="width: 80rem;">
    <div class="card-header">
        <div class="row justify-content-between">
            <div class="col-4 text-left">
                <h4>{{date("d/m/Y")}}</h4>
            </div>
            <div class="col-4 text-center">
                <h3 style="color: #566573;">Tambah Pengumuman</h3>
            </div>
            <div class="col-4 text-right">
                <a href="/tambahArtikel" class="btn btn-primary btn-sm">Kembali</a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form  method="POST" action="{{ route('pengumuman.store') }}" id="form" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-8">
                    <label for="nama" class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                    <div class="invalid-feedback error_judul"></div>
                </div>
                
                <div class="col">
                    <label>Thumbnail</label>
                    <input type="file" name="file" class="dropify form-control" data-height="190" data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                </div>
            </div>
            

            <div class="row mt-3">
                <div class="col">
                    <label for="nama" class="form-label">Isi Pengumuman</label> 
                    <textarea class="form-control" id="isiPengumuman" name="deskripsi" rows="10" placeholder="Silahkan tulis isi pengumuman" autofocus></textarea>
                </div>
            </div>
        </form>
    </div>
</div>
@push('js')
<!-- DataTables -->
<script src="menuAdmin/vendor/summernote/summernote.min"></script>
<script src="menuAdmin/vendor/datatables/jquery.dataTables.min.js"></script>
<script>
    $(documment).ready(function(){
        $("#isi").summernote();
    });
</script>
@endpush

@endsection