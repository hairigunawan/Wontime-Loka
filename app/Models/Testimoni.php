<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    /**
     * Nama tabel yang digunakan model ini.
     */
    protected $table = 'testimonials';

    /**
     * Kolom yang boleh diisi secara massal.
     */
    protected $fillable = [
        'nama',
        'avatar',
        'rating',
        'isi',
    ];

    /**
     * Cast otomatis tipe data kolom.
     */
    protected $casts = [
        'rating' => 'integer',
    ];
}
