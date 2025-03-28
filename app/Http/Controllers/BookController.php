<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\RefKategori;
use Illuminate\Http\Request;

class BookController extends Controller
{
  public function index()
  {
    return view('admin.books.index');
  }
  public function create()
  {
    $categorys = RefKategori::all();
    return view('admin.books.create', compact('categorys'));
  }

  // Menyimpan Data
  public function store(Request $request)
  {
    $request->validate([
      'judul_buku' => 'required|string|max:255',
      'penulis' => 'required|string|max:255',
      'jumlah_buku' => 'required|numeric|max:255',
      'kategori_ids' => 'required|array|min:1',
      'kategori_ids.*' => 'exists:ref_kategoris,id',
    ]);

    // Buat Buku
    $buku = Buku::create([
      'judul_buku' => $request->judul_buku,
      'penulis' => $request->penulis,
      'jumlah_buku' => $request->jumlah_buku,
    ]);

    // Simpan ke Pivot
    $buku->kategoris()->sync($request->kategori_ids);

    return back()->with('success', 'Buku berhasil ditambahkan dengan kategori!');
  }
}
