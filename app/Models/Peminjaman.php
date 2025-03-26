<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Peminjaman extends Model
{
  use HasFactory;

  protected $fillable = [
    'user_id',
    'buku_id',
    'tanggal_peminjaman',
    'tanggal_pengembalian'
  ];

  public function peminjam(): BelongsTo
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  public function buku(): BelongsTo
  {
    return $this->belongsTo(Buku::class, 'buku_id');
  }
}
