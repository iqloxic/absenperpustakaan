<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $title = 'Peringatan!';
        $text = 'Apakah anda yakin ingin menghapus?';
        $icon = "Question";
        confirmDelete($title, $text);
        $buku = DB::table('books')->get();
        return view('buku.indexbuku', compact('buku'));
    }

    public function tambahbuku()
    {
        return view('buku.tambahbuku');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required',
            'kategori' => 'required',
            'nama_pengarang' => 'required',
            'judul_buku' => 'required',
        ]);

        DB::table('books')->insert([
            'kode_buku' => $request->kode_buku,
            'kategori' => $request->kategori,
            'nama_pengarang' => $request->nama_pengarang,
            'judul_buku' => $request->judul_buku,
        ]);
        
        Alert::success('Success', 'Data Berhasil ditambahkan');
        return redirect('/buku');
    }

    public function show($id)
    {
        $buku = DB::table('books')->find($id);
        return view('buku.detailbuku', compact('buku'));
    }

    public function edit($id)
    {
        $buku = DB::table('books')->find($id);
        return view('buku.editbuku', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_buku' => 'required',
            'kategori' => 'required',
            'nama_pengarang' => 'required',
            'judul_buku' => 'required',
        ]);

        $request = DB::table('books')->where('id', $id)->update([
            'kode_buku' => $request->kode_buku,
            'kategori' => $request->kategori,
            'nama_pengarang' => $request->nama_pengarang,
            'judul_buku' => $request->judul_buku,
        ]);

        Alert::success('Success', 'Data Berhasil diupdate');
        return redirect('/buku');
    }

    public function destroy($id) {
        $buku = DB::table('books')->where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil di Hapus');
        return redirect('/buku');
    }
}
