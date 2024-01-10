@extends('home', [
    'title' => 'Pengumuman'
])

@section('containerMenuUtama')
<h1>ini adalah halaman pengumuman</h1>
@foreach ( $pengumuman as $pList )
    <li><img src="uploads/img/pengumuman/{{ $pList->thumbnail }}" alt=""></li>
    <li>{{ $pList->judul }}</li>
    <li>{!! $pList->deskripsi !!}</li>
    <li>{{ $pList->tanggal }}</li>
    <li>__________________________________________________________________________________</li>
@endforeach
@endsection