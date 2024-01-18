@extends('home',[
    'title' => 'Pendaftaran'
])

@section('containerMenuUtama')
    <h1>Ini adalah halaman pendaftaran</h1>
    @foreach ( $pendaftaran as $pendaftaran )
        <li><img src="uploads/img/pendaftaran/{{ $pendaftaran->thumbnail }}" alt=""></li>
        <li>{!! $pendaftaran->deskripsi !!}</li>
        <li>{!! $pendaftaran->link_pendaftaran !!}</li>
    @endforeach
@endsection