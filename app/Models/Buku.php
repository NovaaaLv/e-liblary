<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buku extends Model
{
  use HasFactory;

  protected $fillable = [
    'judul_buku',
    'penulis',
    'jumlah_buku',
    'status'
  ];


  public function kategoris(): BelongsToMany
  {
    return $this->belongsToMany(RefKategori::class, 'pvt_buku_kategoris');
  }

  public function peminjamans(): HasMany
  {
    return $this->hasMany(Peminjaman::class, 'buku_id');
  }
}
