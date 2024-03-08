@extends('layouts.admin')

@section('judul', 'Detail Data Buku')

@section('content')

<div class="p-3">
    <div class="card" style="width: 29rem;">
        <div class="card-body">
            <h3 class="card-title">Detail Data Buku ke-{{$buku->id}}</h3>
            <h6>Kode Buku: {{ $buku->kode_buku }}</h6>
            <h6>Kategori: {{ $buku->kategori }}</h6>
            <h6>Nama Pengarang: {{ $buku->nama_pengarang }}</h6>
            <h6>Judul Buku: {{ $buku->judul_buku }}</h6>
        </div>
    </div>

    <a href="/buku" class="btn btn-primary my-3">Kembali</a>
</div>

@endsection
