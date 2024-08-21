@extends('menuAdmin.home', [
    'title' => 'Tampilan Pengumuman'
])

@push('css')
<!-- DataTables -->
<link href={{ asset('menuAdmin/vendor/datatables/dataTables.bootstrap4.min.css')}} rel="stylesheet">
@endpush

@section('containerMenuAdmin')
@foreach($pengumuman as $pengumuman)
<div class="container p-4 ">
      <div class="row justify-content-md-center">
        <div class="col-md-12">

            <h3 class="text-center">{{ $pengumuman->judul }}</h3>

            <div>
                {!! $pengumuman->deskripsi !!}
            </div>
          

        </div>
      </div>
    </div>
@endforeach

@endsection