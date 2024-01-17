@extends('home', [
    'title' => 'Pengumuman'
])

@section('containerMenuUtama')
@foreach ( $pengumuman as $pList )
<div class=" blog-post-single">
    <div class="blog-item">
        <div class="image-blog text-center">
            <img src="/uploads/img/pengumuman/{{ $pList->thumbnail }}" style="max-width:50%!important " alt="" class="img-fluid rounded">
        </div>
        <div class="post-content">
            <div class="post-date">
                <span class="day">30</span>
                <span class="month">Nov</span>
            </div>
            <div class="meta-info-blog">
                <span><i class="fa fa-calendar"></i> <a>{{ $pList->tanggal }}</a> </span>
            </div>
            <div class="blog-title">
                <h2><a title="">{{ $pList->judul }}</a></h2>
            </div>
            <div class="blog-desc">
                {!! $pList->deskripsi !!}
            </div>							
        </div>
    </div>
</div>
@endforeach
@endsection