@extends('menuAdmin.home', [
    'title' => 'Tampilan Artikel'
])

@push('css')
<!-- DataTables -->
<link href={{ asset('menuAdmin/vendor/datatables/dataTables.bootstrap4.min.css')}} rel="stylesheet">
@endpush

@section('containerMenuAdmin')

<div class="container p-4 ">
      <div class="row justify-content-md-center">
        <div class="col-md-12">

            <h3 class="text-center">{{ $artikel->judul }}</h3>

            <div>
                {!! $artikel->deskripsi !!}
            </div>
          

        </div>
      </div>
    </div>


@endsection