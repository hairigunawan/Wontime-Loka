@props(['testimonials'])

<section id="testimoni" class="py-24 bg-cream overflow-hidden">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="section-label">
            <div class="section-label-line"></div>
            <span class="section-label-text">Testimoni</span>
        </div>
        <h2 class="font-black text-3xl md:text-5xl text-brown mb-14">Kata Mereka</h2>
    </div>

    <!-- Infinite Marquee Slider -->
    <div class="relative flex overflow-hidden group">
        <!-- Mask gradient left & right untuk efek fade -->
        <div class="absolute inset-y-0 left-0 w-12 md:w-32 bg-gradient-to-r from-cream to-transparent z-10 pointer-events-none"></div>
        <div class="absolute inset-y-0 right-0 w-12 md:w-32 bg-gradient-to-l from-cream to-transparent z-10 pointer-events-none"></div>
        
        <div class="animate-marquee gap-6 py-4 px-3">
            <!-- Loop direplikasi 6 kali agar putaran seamless bahkan di layar super lebar -->
            @for($i = 0; $i < 6; $i++)
                @foreach($testimonials as $testi)
                    <div class="w-[300px] md:w-[400px] shrink-0">
                        <div class="bg-white rounded-[24px] p-8 shadow-[0_8px_30px_rgba(74,40,27,0.06)] hover:shadow-[0_15px_40px_rgba(74,40,27,0.1)] border border-brown/5 h-full flex flex-col transition-shadow duration-300">
                            <!-- Quote icon -->
                            <div class="w-10 h-10 rounded-xl bg-red/10 flex items-center justify-center mb-4">
                                <span class="material-symbols-outlined text-red text-xl">format_quote</span>
                            </div>
                            <!-- Bintang rating -->
                            <div class="flex gap-0.5 mb-4">
                                @for($star = 0; $star < $testi->rating; $star++)
                                    <span class="text-gold text-lg">★</span>
                                @endfor
                                @for($star = $testi->rating; $star < 5; $star++)
                                    <span class="text-brown/15 text-lg">★</span>
                                @endfor
                            </div>
                            <!-- Isi testimoni -->
                            <p class="text-sm text-brown/75 leading-relaxed mb-6 italic flex-1">
                                "{{ $testi->isi }}"
                            </p>
                            <!-- Nama & avatar -->
                            <div class="flex items-center gap-3 mt-auto pt-4 border-t border-brown/5">
                                @php
                                    $avatarColors = ['bg-red', 'bg-green', 'bg-gold', 'bg-brown'];
                                    $avatarColor = $avatarColors[$loop->index % 4];
                                @endphp
                                <div class="w-10 h-10 rounded-full {{ $avatarColor }} flex items-center justify-center font-black text-white text-sm">
                                    {{ $testi->avatar }}
                                </div>
                                <div>
                                    <div class="font-semibold text-sm text-brown">
                                        {{ $testi->nama }}
                                    </div>
                                    <div class="text-xs text-brown/50">Pelanggan WONTIME</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endfor
        </div>
    </div>
</section>