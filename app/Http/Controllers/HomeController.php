<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Tampilkan halaman utama (landing page) WONTIME.
     *
     * Mengambil data produk dan testimoni dari database,
     * lalu meneruskannya ke view 'home'.
     */
    public function index(): View
    {
        try {
            // Ambil semua produk, diurutkan berdasarkan kolom 'urutan'
            $produks = Produk::orderBy('urutan')->get();

            // Ambil testimoni terbaru, batasi 6 untuk tampilan profesional
            $testimonials = Testimoni::orderBy('id', 'desc')->limit(6)->get();
        } catch (\Exception $e) {
            // Fallback data statis jika database tidak tersedia (Vercel serverless)
            $produks = collect([
                (object) ['nama' => 'Wonton Rebus Chili Oil', 'kategori' => 'WONTON', 'deskripsi' => 'Wonton lembut dengan isian daging gurih pilihan, disiram minyak cabai khas Wontime yang pedas aromatis.', 'harga' => 15000, 'gambar' => 'wonton_asli_1.png', 'badge' => 'FAVORIT', 'badge_warna' => '#C93224', 'tags' => ['Chili Oil', 'Pedas Gurih'], 'is_new' => false, 'harga_format' => 'Rp15.000', 'gambar_url' => asset('images/wonton_asli_1.png')],
                (object) ['nama' => 'Es Cendol Loka Original', 'kategori' => 'MINUMAN', 'deskripsi' => 'Es cendol segar dengan kombinasi santan gurih, gula aren melimpah, dan cendol hijau lembut.', 'harga' => 10000, 'gambar' => 'cendol_asli_1.png', 'badge' => 'SEGAR', 'badge_warna' => '#789B72', 'tags' => ['Gula Aren', 'Segar'], 'is_new' => false, 'harga_format' => 'Rp10.000', 'gambar_url' => asset('images/cendol_asli_1.png')],
            ]);

            $testimonials = collect([
                (object) ['nama' => 'Rina S.', 'isi' => 'Wontonnya enak banget, chili oil-nya nampol!', 'rating' => 5, 'avatar' => 'R'],
                (object) ['nama' => 'Budi P.', 'isi' => 'Es cendolnya segar, gula arennya pas. Pasti balik lagi!', 'rating' => 5, 'avatar' => 'B'],
                (object) ['nama' => 'Sari M.', 'isi' => 'Tempat favorit buat nongkrong, menu lengkap dan harga bersahabat.', 'rating' => 4, 'avatar' => 'S'],
                (object) ['nama' => 'Ahmad K.', 'isi' => 'Wonton gorengnya krispi luar biasa, recommended!', 'rating' => 5, 'avatar' => 'A'],
            ]);
        }

        return view('home', compact('produks', 'testimonials'));
    }

    public function storeTestimoni(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'isi' => 'required|string',
        ]);

        Testimoni::create([
            'nama' => $request->nama,
            'isi' => $request->isi,
            'rating' => 5, // Rating default
            'avatar' => strtoupper(substr($request->nama, 0, 1)), // Inisial dari nama
        ]);

        return redirect()->back()->with('success', 'Testimoni berhasil dikirim!')->withFragment('kontak');
    }
}
