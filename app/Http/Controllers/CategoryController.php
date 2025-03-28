<?php

namespace App\Http\Controllers;

use App\Models\RefKategori;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index()
  {
    $categorys = RefKategori::all();
    return view('admin.books.category.index', compact('categorys'));
  }

  public function create()
  {
    return view('admin.books.category.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'nama_kategori' => 'required|unique:ref_kategoris,nama_kategori'
    ]);

    RefKategori::create([
      'nama_kategori' => $request->nama_kategori
    ]);

    return back()->with('success', 'Category Successfully Added!');
  }
}
