<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Isi tabel produks dengan data awal WONTIME.
     */
    public function run(): void
    {
        // Hapus data lama agar tidak duplikat saat db:seed dijalankan ulang
        Produk::truncate();

        $produks = [
            [
                'nama'         => 'Wonton Rebus Chili Oil',
                'kategori'     => 'WONTON',
                'deskripsi'    => 'Wonton lembut dengan isian daging gurih pilihan, disiram minyak cabai khas Wontime yang pedas aromatis.',
                'harga'        => 15000,
                'gambar'       => 'wonton_asli_1.png',
                'badge'        => 'FAVORIT',
                'badge_warna'  => '#C93224',
                'tags'         => ['Chili Oil', 'Pedas Gurih'],
                'is_new'       => false,
                'urutan'       => 1,
            ],
            [
                'nama'         => 'Es Cendol Loka Original',
                'kategori'     => 'MINUMAN',
                'deskripsi'    => 'Es cendol segar dengan kombinasi santan gurih, gula aren melimpah, dan cendol hijau lembut.',
                'harga'        => 10000,
                'gambar'       => 'cendol_asli_1.png',
                'badge'        => 'SEGAR',
                'badge_warna'  => '#789B72',
                'tags'         => ['Gula Aren', 'Segar'],
                'is_new'       => false,
                'urutan'       => 3,
            ],
        ];

        foreach ($produks as $data) {
            Produk::create($data);
        }
    }
}
