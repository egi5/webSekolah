@extends('menuAdmin.home', [
    'title' => 'Daftar Artikel'
])

@push('css')
<!-- DataTables -->
<link href={{ asset('menuAdmin/vendor/datatables/dataTables.bootstrap4.min.css')}} rel="stylesheet">
@endpush

@section('containerMenuAdmin')
  <div class="container p-4 ">
    <a href="/create" class="btn btn-md btn-primary">Add new Post</a>
    <hr>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>


            {{-- @foreach ($posts as $post) --}}
             <tr>
                <th scope="row">{{ 1}}</th>
                <td>judul</td>
                <td>
                    <a href="show/{{ 1 }}" class="btn btn-success">Show</a>
                    <a href="edit/{{ 1 }}" class="btn btn-info">Edit</a>
                    <a href="delete/{{ 1 }}" class="btn btn-danger">Delete</a>              
                </td>
            </tr>
            {{-- @endforeach --}}
      
        </tbody>
      </table>

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