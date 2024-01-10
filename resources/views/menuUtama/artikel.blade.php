@extends('home', [
    'title' => 'Pengumuman'
])

@section('containerMenuUtama')
    <h1>ini adalah halaman artikel</h1>
    @foreach ( $kegiatan as $kegiatan )
        <li><img src="uploads/img/pengumuman/{{ $kegiatan->thumbnail }}" alt=""></li>
        <li>{{ $kegiatan->judul }}</li>
        <li>{!! $kegiatan->deskripsi !!}</li>
        <li>{{ $kegiatan->tanggal }}</li>
        <li>__________________________________________________________________________________</li>
    @endforeach
@endsection