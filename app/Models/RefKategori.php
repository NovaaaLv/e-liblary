<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RefKategori extends Model
{
  use HasFactory;

  protected $fillable = [
    'nama_kategori'
  ];

  public function bukus(): BelongsToMany
  {
    return $this->belongsToMany(Buku::class, 'pvt_buku_kategoris');
  }
}
