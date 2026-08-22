<section id="galeri" class="py-24 bg-brown relative overflow-hidden"
        x-data="{ lightboxOpen: false, lightboxSrc: '', lightboxAlt: '' }">
    <!-- Dekorasi -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-red/5 rounded-full blur-3xl -translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

    <div class="max-w-[1200px] mx-auto px-6 relative z-10">
        <div class="section-label">
            <div class="section-label-line"></div>
            <span class="section-label-text">Galeri</span>
        </div>
        <h2 class="font-black text-3xl md:text-5xl text-cream mb-14">Momen WONTIME</h2>

        @php
            $galeriItems = [
                ['src' => 'gambar 1.jpg',  'alt' => 'Suasana dapur WONTIME',       'class' => 'aspect-square'],
                ['src' => 'cendol 2.jpg',  'alt' => 'Es cendol segar WONTIME',     'class' => 'col-span-2 md:row-span-2 aspect-square'],
                ['src' => 'wonton 2.jpg',  'alt' => 'Wonton goreng crispy',         'class' => 'aspect-square'],
                ['src' => 'cendol 1.jpg',  'alt' => 'Minuman cendol original',      'class' => 'aspect-square'],
                ['src' => 'wonton 3.jpg',  'alt' => 'Wonton kukus premium',         'class' => 'aspect-square'],
                ['src' => 'cendol 3.jpg',  'alt' => 'Varian cendol terbaru',        'class' => 'col-span-2 aspect-[2/1]'],
                ['src' => 'cendol 4.jpg',  'alt' => 'Cendol dengan topping spesial','class' => 'col-span-2 aspect-[2/1]'],
            ];
        @endphp

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 grid-flow-dense">
            @foreach($galeriItems as $item)
                <div class="{{ $item['class'] }} rounded-2xl overflow-hidden relative group cursor-pointer"
                     @click="lightboxSrc = '{{ asset('images/' . $item['src']) }}'; lightboxAlt = '{{ $item['alt'] }}'; lightboxOpen = true;">
                    <img src="{{ asset('images/' . $item['src']) }}"
                         alt="{{ $item['alt'] }}"
                         loading="lazy"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    <!-- Hover Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-4">
                        <div class="flex items-center gap-2 text-white">
                            <span class="material-symbols-outlined text-lg">zoom_in</span>
                            <span class="text-sm font-medium">{{ $item['alt'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div x-show="lightboxOpen"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="lightboxOpen = false"
         @keydown.escape.window="lightboxOpen = false"
         class="lightbox-overlay"
         role="dialog"
         aria-label="Galeri gambar">
        <button @click="lightboxOpen = false"
                class="absolute top-6 right-6 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-colors"
                aria-label="Tutup lightbox">
            <span class="material-symbols-outlined">close</span>
        </button>
        <img :src="lightboxSrc" :alt="lightboxAlt" @click.stop class="cursor-default">
    </div>
</section>
