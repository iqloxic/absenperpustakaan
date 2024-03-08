@extends('layouts.admin')

@section('content')
<div class="p-3">
    <h2>Edit Data Buku {{$buku->id}} </h2>
    <form action="/buku/{{$buku->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_buku">Kode Buku</label>
            <input type="text" class="form-control" name="kode_buku" value="{{$buku->kode_buku}}" id="kode_buku" placeholder="Masukkan Kode Buku">
            @error('kode_buku')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" class="form-control" name="kategori" value="{{$buku->kategori}}" id="kategori" placeholder="Masukkan Kategori">
            @error('kategori')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama_pengarang">Nama Pengarang</label>
            <input type="text" class="form-control" name="nama_pengarang" value="{{$buku->nama_pengarang}}" id="nama_pengarang" placeholder="Masukkan Nama Pengarang">
            @error('nama_pengarang')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="judul_buku">Judul Buku</label>
            <input type="text" class="form-control" name="judul_buku" value="{{$buku->judul_buku}}" id="judul_buku" placeholder="Masukkan Judul Buku">
            @error('judul_buku')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <a href="/buku" class="btn btn-danger my-3">Kembali</a>
        <button type="submit" class="btn btn-success">Update Data</button>
    </form>
</div>

@endsection
