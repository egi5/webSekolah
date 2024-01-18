@extends('home', [
    'title' => 'Kegiatan'
])

@section('containerMenuUtama')
    @foreach ( $kegiatan as $kegiatan )
    <div class=" blog-post-single">
        <div class="blog-item">
            <div class="image-blog text-center">
                <img src="/uploads/img/artikel/{{ $kegiatan->thumbnail }}" style="max-width:50%!important " alt="" class="img-fluid rounded">
            </div>
            <div class="post-content">
                <div class="post-date">
                    <span class="day">30</span>
                    <span class="month">Nov</span>
                </div>
                <div class="meta-info-blog">
                    <span><i class="fa fa-calendar"></i> <a>{{ $kegiatan->tanggal }}</a> </span>
                </div>
                <div class="blog-title">
                    <h2><a title="">{{ $kegiatan->judul }}</a></h2>
                </div>
                <div class="blog-desc">
                    {!! $kegiatan->deskripsi !!}
                </div>							
            </div>
        </div>
    </div>
    @endforeach
@endsection