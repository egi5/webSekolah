@extends('menuAdmin.home', [
    'title' => 'Info Pendaftaran'
])

@push('css')
<!-- DataTables -->
<link href={{ asset('menuAdmin/vendor/datatables/dataTables.bootstrap4.min.css')}} rel="stylesheet">
@endpush

@section('containerMenuAdmin')
<div class="card" style="width: 80rem;">
    <div class="card-header">
        <div class="row justify-content-between">
            <div class="col-4 text-center">
                <h3 style="color: #566573;">Pendaftaran</h3>
            </div>
            <div class="col-4 text-center">
                <h4>{{date("d/m/Y")}}</h4>
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
                  <th class="text-center" width="10%">link</th>
                  <th class="text-center" width="53%">Isi</th>
                  <th class="text-center" width="5%">Aksi</th>
              </tr>
          </thead>
          <tbody>
              @foreach($pendaftaran as $pdt)
              <tr>
                <td>{{ $pdt->link_pendaftaran }}</td>
                <td>{!! $pdt->deskripsi !!}</td>
                <td>
                    <a href="/adminPendaftaran/{{$pdt->id}}/edit" class="btn btn-info">Edit</a>
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