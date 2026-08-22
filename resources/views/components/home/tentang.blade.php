<section id="tentang" class="py-24 bg-beige relative overflow-hidden">
    <!-- Dekorasi -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-red/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-green/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2 pointer-events-none"></div>

    <div class="max-w-[1200px] mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <!-- Kiri: Teks Cerita -->
            <div class="relative">
                <div class="section-label mb-6">
                    <div class="section-label-line"></div>
                    <span class="section-label-text">Tentang Kami</span>
                </div>
                
                <h2 class="font-black text-4xl md:text-5xl lg:text-6xl text-brown leading-[1.1] mb-8">
                    Cerita di Balik<br/>
                    <span class="text-red relative inline-block mt-2">
                        WONTIME
                        <svg class="absolute w-full h-3 -bottom-1 left-0 text-red/20" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="4" fill="transparent"/>
                        </svg>
                    </span>
                </h2>
                
                <div class="relative pl-6 md:pl-8 mb-8">
                    <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-red to-green rounded-full"></div>
                    <p class="text-lg md:text-xl text-brown/80 leading-relaxed font-medium">
                        Lahir dari kecintaan kami terhadap kuliner fusion, memadukan cita rasa tradisional dan modern dalam satu harmoni.
                    </p>
                </div>
                
                <p class="text-base text-brown/70 leading-relaxed mb-10">
                    Kami percaya setiap gigitan dan tegukan dapat menciptakan momen yang tak terlupakan. Dengan bahan-bahan segar pilihan dan resep yang terus disempurnakan, kami hadir untuk menemani setiap waktu spesial Anda.
                </p>

                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-full bg-white shadow-sm flex items-center justify-center border border-brown/5">
                        <img src="{{ asset('icons/logo_.png') }}"
                     alt="WONTIME Logo"
                     class="w-9 h-9 shrink-0 object-contain transition-transform duration-300 group-hover:scale-110">
                    </div>
                    <div>
                        <div class="font-bold text-brown text-lg">Wontime Loka</div>
                        <div class="text-sm text-brown/60">Dibuat dengan sepenuh hati</div>
                    </div>
                </div>
            </div>

            <!-- Kanan: Grid Stats (Masonry Look) -->
            <div class="grid grid-cols-2 gap-4 md:gap-6 relative">
                <!-- Stat 1 -->
                <div class="group bg-white rounded-[32px] p-6 sm:p-8 shadow-[0_8px_30px_rgba(74,40,27,0.04)] hover:shadow-[0_20px_40px_rgba(201,50,36,0.12)] border border-white hover:border-red/20 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-red/5 rounded-bl-[100px] -mr-4 -mt-4 transition-transform duration-500 group-hover:scale-150"></div>
                    <div class="w-12 h-12 sm:w-14 sm:h-14 bg-beige group-hover:bg-red rounded-2xl flex items-center justify-center mb-4 sm:mb-6 transition-colors duration-500 relative z-10">
                        <span class="material-symbols-outlined text-red group-hover:text-white transition-colors duration-500">ramen_dining</span>
                    </div>
                    <div class="font-black text-3xl sm:text-4xl text-brown mb-1 sm:mb-2 relative z-10">10+</div>
                    <div class="text-xs sm:text-sm font-medium text-brown/60 relative z-10">Varian Menu Fusion</div>
                </div>
                
                <!-- Stat 2 (Offset downward on md screens) -->
                <div class="group bg-red rounded-[32px] p-6 sm:p-8 shadow-[0_8px_30px_rgba(201,50,36,0.2)] hover:shadow-[0_20px_40px_rgba(201,50,36,0.35)] transition-all duration-500 hover:-translate-y-2 mt-0 md:mt-12 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-bl-[100px] -mr-4 -mt-4 transition-transform duration-500 group-hover:scale-150"></div>
                    <div class="w-12 h-12 sm:w-14 sm:h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4 sm:mb-6 relative z-10">
                        <span class="material-symbols-outlined text-white">groups</span>
                    </div>
                    <div class="font-black text-3xl sm:text-4xl text-white mb-1 sm:mb-2 relative z-10">500+</div>
                    <div class="text-xs sm:text-sm font-medium text-white/80 relative z-10">Pelanggan Puas</div>
                </div>

                <!-- Stat 3 -->
                <div class="group bg-white rounded-[32px] p-6 sm:p-8 shadow-[0_8px_30px_rgba(74,40,27,0.04)] hover:shadow-[0_20px_40px_rgba(120,155,114,0.15)] border border-white hover:border-green/30 transition-all duration-500 hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-green/5 rounded-bl-[100px] -mr-4 -mt-4 transition-transform duration-500 group-hover:scale-150"></div>
                    <div class="w-12 h-12 sm:w-14 sm:h-14 bg-beige group-hover:bg-green rounded-2xl flex items-center justify-center mb-4 sm:mb-6 transition-colors duration-500 relative z-10">
                        <span class="material-symbols-outlined text-green group-hover:text-white transition-colors duration-500">eco</span>
                    </div>
                    <div class="font-black text-3xl sm:text-4xl text-brown mb-1 sm:mb-2 relative z-10">100%</div>
                    <div class="text-xs sm:text-sm font-medium text-brown/60 relative z-10">Bahan Segar & Alami</div>
                </div>

                <!-- Stat 4 (Offset downward on md screens) -->
                <div class="group bg-white rounded-[32px] p-6 sm:p-8 shadow-[0_8px_30px_rgba(74,40,27,0.04)] hover:shadow-[0_20px_40px_rgba(245,158,11,0.15)] border border-white hover:border-gold/30 transition-all duration-500 hover:-translate-y-2 mt-0 md:mt-12 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gold/10 rounded-bl-[100px] -mr-4 -mt-4 transition-transform duration-500 group-hover:scale-150"></div>
                    <div class="w-12 h-12 sm:w-14 sm:h-14 bg-beige group-hover:bg-gold rounded-2xl flex items-center justify-center mb-4 sm:mb-6 transition-colors duration-500 relative z-10">
                        <span class="material-symbols-outlined text-gold group-hover:text-white transition-colors duration-500">star</span>
                    </div>
                    <div class="font-black text-3xl sm:text-4xl text-brown mb-1 sm:mb-2 relative z-10">4.9</div>
                    <div class="text-xs sm:text-sm font-medium text-brown/60 relative z-10">Rating Pelanggan</div>
                </div>
            </div>
            
        </div>
    </div>
</section>
