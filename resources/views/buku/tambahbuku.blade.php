@extends('layouts.admin')
@section('judul', 'Tambah Data Buku')

@section('content')
<div class="p-3">
    <form action="/buku" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kode_buku" class="form-label">Kode Buku</label>
            <input type="text" class="form-control" id="kode_buku" name="kode_buku" placeholder="Masukkan kode buku">
            @error('kode_buku')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukkan kategori buku">
            @error('kategori')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama_pengarang" class="form-label">Nama Pengarang</label>
            <input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" placeholder="Masukkan nama pengarang">
            @error('nama_pengarang')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Masukkan judul buku">
            @error('judul_buku')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection
