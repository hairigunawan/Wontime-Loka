<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    /**
     * Nama tabel yang digunakan model ini.
     * Harus eksplisit karena Laravel secara default akan mencari "produks".
     */
    protected $table = 'produks';

    /**
     * Kolom yang boleh diisi secara massal (mass assignment).
     */
    protected $fillable = [
        'nama',
        'kategori',
        'deskripsi',
        'harga',
        'gambar',
        'badge',
        'badge_warna',
        'tags',
        'is_new',
        'urutan',
    ];

    /**
     * Cast otomatis tipe data kolom.
     */
    protected $casts = [
        'tags'    => 'array',   // JSON kolom otomatis di-decode ke PHP array
        'harga'   => 'integer',
        'is_new'  => 'boolean',
        'urutan'  => 'integer',
    ];

    /**
     * Accessor: format harga ke format Rupiah.
     * Penggunaan: $produk->harga_format  → "Rp10.000"
     */
    public function getHargaFormatAttribute(): string
    {
        return 'Rp' . number_format($this->harga, 0, ',', '.');
    }

    /**
     * Accessor: kembalikan URL lengkap gambar, atau null jika tidak ada.
     * Penggunaan: $produk->gambar_url  → "http://localhost/images/wonton_asli_1.jpg"
     */
    public function getGambarUrlAttribute(): ?string
    {
        if ($this->gambar) {
            return asset('images/' . $this->gambar);
        }
        return null;
    }
}
