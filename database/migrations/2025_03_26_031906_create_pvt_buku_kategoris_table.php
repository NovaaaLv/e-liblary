<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('pvt_buku_kategoris', function (Blueprint $table) {
      $table->id();
      $table->foreignId('buku_id')->constrained('bukus')->onDelete('cascade');
      $table->foreignId('ref_kategori_id')->constrained('ref_kategoris')->onDelete('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('pvt_buku_kategoris');
  }
};
