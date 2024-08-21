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
                <h3 style="color: #566573;">Data Artikel</h3>
            </div>
            <div class="col-4 text-right">
                <a href="/artikel/create" class="btn btn-primary btn-sm">Tambah Artikel</a>
            </div>
        </div>
        
        {{-- <hr class="mt-0 mb-4"> --}}
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
  
  <div class="card-body table-responsive">
      <table id="tabelArtikel" class="table table-bordered table-hover">
          <thead>
              <tr>
                  <th class="text-center" width="3%">No</th>
                  <th class="text-center" width="10%">Tanggal</th>
                  <th class="text-center" width="53%">Judul</th>
                  <th class="text-center" width="20%">Aksi</th>
              </tr>
          </thead>
          <tbody>
              @php 
                  $no=1;
              @endphp

              @foreach($artikel as $art)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $art->tanggal }}</td>
                <td>{{ $art->judul }}</td>
                <td>
                    <a href="/artikel/{{$art->id}}" class="btn btn-success">Show</a>
                    <a href="/artikel/{{$art->id}}/edit" class="btn btn-info">Edit</a>
                    <form action="/artikel/{{$art->id}}" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data Artikel ini?')">Delete</button>
                    </form>  
                </td>
              </tr>
              @endforeach
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