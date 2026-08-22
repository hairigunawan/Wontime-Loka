@props(['produks'])

<section id="produk" class="py-24 bg-cream">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="section-label">
            <div class="section-label-line"></div>
            <span class="section-label-text">Menu</span>
        </div>
        <h2 class="font-black text-3xl md:text-5xl text-brown mb-14">Produk Kami</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {{-- Loop produk dari database via HomeController --}}
            @forelse($produks as $produk)
                <div class="bg-white rounded-[28px] overflow-hidden shadow-[0_8px_30px_rgba(74,40,27,0.06)] hover:shadow-[0_20px_50px_rgba(201,50,36,0.14)] group hover:-translate-y-2 transition-all duration-500 border border-white hover:border-red/10">
                    {{-- Gambar produk atau placeholder emoji jika tidak ada gambar --}}
                    <div class="h-[280px] overflow-hidden relative">
                        @if($produk->gambar)
                            <img src="{{ $produk->gambar_url }}"
                                 alt="{{ $produk->nama }} — {{ $produk->deskripsi }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        @else
                            <div class="w-full h-full bg-beige flex items-center justify-center text-8xl">
                                🥟
                            </div>
                        @endif

                        {{-- Badge kategori --}}
                        <div class="absolute top-4 left-4 text-white font-extrabold text-xs px-3 py-1.5 rounded-full shadow-sm backdrop-blur-sm"
                             style="background-color: {{ $produk->badge_warna }}">
                            {{ $produk->badge }}
                        </div>

                        {{-- Hover overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    </div>

                    {{-- Detail produk --}}
                    <div class="p-7 pb-8">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="font-black text-2xl text-brown">
                                {{ $produk->nama }}
                            </h3>
                            <span class="font-black text-xl text-red whitespace-nowrap ml-3">
                                {{-- Accessor harga_format dari Model Produk --}}
                                {{ $produk->harga_format }}
                            </span>
                        </div>
                        <p class="text-sm text-brown/70 leading-relaxed mb-5">
                            {{ $produk->deskripsi }}
                        </p>

                        {{-- Tags produk (diambil dari kolom JSON) --}}
                        @if($produk->tags)
                            <div class="flex flex-wrap gap-2 mb-6">
                                @foreach($produk->tags as $tag)
                                    <span class="text-[11px] border rounded-full px-2.5 py-1 font-medium transition-colors duration-300 hover:bg-beige"
                                          style="color: {{ $produk->badge_warna }}; border-color: {{ $produk->badge_warna }}40">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        @endif

                        {{-- Tombol Pesan via WhatsApp --}}
                        @php
                            $waMessage = rawurlencode("Halo WONTIME, saya ingin memesan *" . $produk->nama . "* (" . $produk->harga_format . "). Mohon informasi pemesanannya, terima kasih!");
                            $waUrl = "https://wa.me/6283170342929?text=" . $waMessage;
                        @endphp
                        <a href="{{ $waUrl }}"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="w-full bg-red/10 hover:bg-red text-red hover:text-white font-bold text-xs py-3 px-4 rounded-xl transition-all duration-300 flex items-center justify-center gap-2 group/btn border border-red/20">
                            <span class="material-symbols-outlined text-lg transition-transform group-hover/btn:scale-110">shopping_bag</span>
                            Pesan via WhatsApp
                        </a>
                    </div>
                </div>
            @empty
                {{-- Fallback jika database kosong --}}
                <div class="col-span-3 text-center py-16">
                    <span class="material-symbols-outlined text-brown/20 text-6xl mb-4 block">restaurant</span>
                    <p class="text-brown/50 text-lg font-medium">Belum ada produk tersedia.</p>
                    <p class="text-brown/40 text-sm mt-1">Produk sedang dalam persiapan.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
