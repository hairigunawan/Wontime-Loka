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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');                        // Nama produk
            $table->string('kategori');                    // WONTON / MINUMAN / dll
            $table->text('deskripsi');                     // Deskripsi singkat
            $table->unsignedInteger('harga');              // Harga dalam Rupiah (tanpa desimal)
            $table->string('gambar')->nullable();          // Nama file gambar di public/images/
            $table->string('badge')->nullable();           // Label badge (mis: WONTON, NEW)
            $table->string('badge_warna')->default('#C93224'); // Warna HEX badge
            $table->json('tags')->nullable();              // ["Gurih", "Pedas Opsional"]
            $table->boolean('is_new')->default(false);     // Tandai produk baru
            $table->unsignedTinyInteger('urutan')->default(0); // Urutan tampil
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
