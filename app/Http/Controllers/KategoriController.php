<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();

        return view('kategori.index', [
            'title' => 'Kategori',
            'kategoris' => $kategoris,
        ]);
    }

    public function create()
    {
        return view('kategori.create', [
            'title' => 'Tambah Kategori',
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_kategori' => 'required|min:3|max:255',
            'keterangan' => 'nullable|max:255',
        ]);

        Kategori::create($validateData);

        return redirect('/kategori')->with('success', 'Berhasil tambah data');
    }

    public function show(Kategori $kategori)
    {
        //
    }

    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', [
            'title' => 'Edit Kategori',
            'kategori' => $kategori,
        ]);
    }

    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'nama_kategori' => 'required|min:3|max:255',
            'keterangan' => 'nullable|max:255',
        ]);

        $kategori->update([
            'nama_kategori' => $request->nama_kategori,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/kategori')->with('success', 'Berhasil ubah data');
    }

    public function destroy(Kategori $kategori)
    {
        $kategori->delete();

        return redirect('/kategori')->with('success', 'Berhasil hapus data');
    }
}
