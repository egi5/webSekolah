@extends('menuAdmin.home', [
    'title' => 'Tambah Artikel'
])


@section('containerMenuAdmin')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <div class="container p-4 ">
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="text-center">
              <h1 class="">Summernote Text Editor CRUD and Image Upload in Laravel</h1>
             </div> 
            <form action="/post" method="post">
                @csrf
                <label for="">Title:</label>
                <input type="text" class="form-control" name="title">
                <label for="">Description:</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
              </form>
  
            </div>
        </div>
      </div>
  
  
      <script>
          $('#description').summernote({
              placeholder: 'description...',
              tabsize:2,
              height:300
          });
      </script>

@endsection