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
        // Ambil semua produk, diurutkan berdasarkan kolom 'urutan'
        $produks = Produk::orderBy('urutan')->get();

        // Ambil testimoni terbaru, batasi 6 untuk tampilan profesional
        $testimonials = Testimoni::orderBy('id', 'desc')->limit(6)->get();

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
