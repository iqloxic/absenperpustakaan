@extends('layouts.admin')

@section('content')
    <div class="p-2">
        {{-- Kelola Profile Pelanggan --}}
        <a href="/tambahbuku" class="btn btn-primary my-3">Tambah Data Buku</a>
     
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Buku</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Nama Pengarang</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
    
            <tbody>
                @forelse ($buku as $key => $value)
                <tr>
                    <th scope="row">{{$key + 1}}</th>
                    <td>{{$value->kode_buku}}</td>
                    <td>{{$value->kategori}}</td>
                    <td>{{$value->nama_pengarang}}</td>
                    <td>{{$value->judul_buku}}</td>
                    <td class="mr-3">
                        <a href="/buku/{{$value->id}}" class="btn btn-info" title="Lihat Detail"><i class="fas fa-eye mr-2"></i>Lihat Data</a>
                        <a href="/buku/{{$value->id}}/edit" class="btn btn-success" title="Edit Data"><i class="fas fa-edit mr-2"></i>Edit</a>
                        <a href="/buku/{{$value->id}}" class="btn btn-danger mt-1" title="Hapus Data" data-confirm-delete="true"><i class="fas fa-trash-alt mr-2"></i>Hapus</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">No data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
