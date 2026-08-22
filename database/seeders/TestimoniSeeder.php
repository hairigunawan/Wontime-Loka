<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Isi tabel testimonials dengan data awal WONTIME.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'nama'   => 'Rina S.',
                'avatar' => 'R',
                'rating' => 5,
                'isi'    => 'Wontonnya enak banget! Kuahnya gurih dan porsinya pas. Pasti balik lagi!',
            ],
            [
                'nama'   => 'Budi P.',
                'avatar' => 'B',
                'rating' => 5,
                'isi'    => 'Es cendolnya seger dan manisnya pas. Cocok banget diminum sambil nunggu wonton.',
            ],
            [
                'nama'   => 'Sari M.',
                'avatar' => 'S',
                'rating' => 5,
                'isi'    => 'Harganya terjangkau tapi kualitasnya premium. WONTIME jadi langganan saya sekarang!',
            ],
        ];

        foreach ($testimonials as $data) {
            Testimoni::create($data);
        }
    }
}
