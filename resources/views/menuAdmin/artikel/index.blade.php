@extends('menuAdmin.home', [
    'title' => 'Daftar Artikel'
])

@push('css')
<!-- DataTables -->
<link href={{ asset('menuAdmin/vendor/datatables/dataTables.bootstrap4.min.css')}} rel="stylesheet">
@endpush

@section('containerMenuAdmin')
<div class="card" style="width: 80rem;">
  <div class="card-header">
      <div class="row justify-content-between">
          <div class="col-4 text-left">
              <h4>{{date("d/m/Y")}}</h4>
          </div>
          <div class="col-4 text-center">
              <h3 style="color: #566573;">Data Pengumuman</h3>
          </div>
          <div class="col-4 text-right">
              <a href="{{route('artikel.create')}}" class="btn btn-primary btn-sm">Tambah Pengumuman</a>
          </div>
      </div>
      
      {{-- <hr class="mt-0 mb-4"> --}}
  </div>
  
  <div class="card-body table-responsive">
      <table id="tabelArtikel" class="table table-bordered table-hover">
          <thead>
              <tr>
                  <th class="text-center" width="3%">No</th>
                  <th class="text-center" width="10%">Tanggal</th>
                  <th class="text-center" width="52%">Pengumuman</th>
                  <th class="text-center" width="15%">Aksi</th>
              </tr>
          </thead>
          <tbody>
              @php 
                  $no=1;
              @endphp

              {{-- @foreach($artikel as $art)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $art->tanggal }}</td>
                <td>{{ $art->judul }}</td>
                <td>
                  <a href="show/{{ $art->$id }}" class="btn btn-success">Show</a>
                  <a href="edit/{{ $art->$id }}" class="btn btn-info">Edit</a>
                  <a href="delete/{{ $art->$id }}" class="btn btn-danger">Delete</a>  
                </td>
              </tr>
              @endforeach --}}
          </tbody>
      </table>
  </div>
</div>
@push('js')
<!-- DataTables -->
<script src="menuAdmin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="menuAdmin/vendor/datatables/jquery.dataTables.min.js"></script>
<script>
  $(function () {
    $("#tabelArtikel").DataTable();
  });
</script>
@endpush

@endsection