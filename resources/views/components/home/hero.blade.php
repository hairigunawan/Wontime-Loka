@props(['testimonials' => []])
<section id="home" class="pt-28 lg:pt-10 min-h-[100svh] flex flex-col justify-between relative overflow-hidden bg-cream">
    <!-- Dekorasi Background -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-red/10 rounded-full blur-[80px] -translate-y-1/4 translate-x-1/3 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-green/10 rounded-full blur-[80px] translate-y-1/4 -translate-x-1/3 pointer-events-none"></div>

    <!-- Konten Utama Hero -->
    <div class="max-w-[1200px] mx-auto px-6 w-full relative z-10 flex-grow flex items-center">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-12 items-center w-full py-12">
            
            <!-- Teks Hero -->
            <div class="relative">
                <div class="inline-flex items-center gap-2 bg-white/60 backdrop-blur-md border border-white/50 text-red text-[11px] font-bold tracking-[2px] px-4 py-2 rounded-full mb-8 shadow-sm animate-fade-in-up">
                    <span class="w-2 h-2 rounded-full bg-red animate-pulse"></span>
                    Wanton Oil & ES cendol
                </div>
                
                <h1 class="font-black text-6xl md:text-7xl lg:text-[80px] leading-[1.05] text-brown mb-6 animate-fade-in-up delay-100">
                    Wontime<br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red to-[#f87171] relative inline-block">
                        Loka.
                        <!-- Garis Bawah Dekoratif -->
                        <svg class="absolute w-full h-4 -bottom-1 left-0 text-red/20" viewBox="0 0 100 10" preserveAspectRatio="none">
                            <path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="4" fill="transparent"/>
                        </svg>
                    </span>
                </h1>
                
                <p class="text-lg text-brown/70 max-w-[480px] leading-relaxed mb-10 font-medium animate-fade-in-up delay-200">
                    Menghadirkan perpaduan wonton dan minuman dengan cita rasa unik, berkualitas premium, dan cocok untuk menemani setiap momen spesial Anda.
                </p>
                
                <div class="flex flex-wrap items-center gap-8 animate-fade-in-up delay-300">
                    <!-- Tombol Utama -->
                    <a href="#produk"
                       class="group relative inline-flex items-center gap-4 font-bold text-sm text-red bg-white border border-red/20 pl-6 pr-2 py-2 rounded-full overflow-hidden shadow-[0_8px_25px_rgba(201,50,36,0.15)] hover:shadow-[0_12px_35px_rgba(201,50,36,0.25)] transition-all duration-300 hover:-translate-y-1 hover:text-white">
                       <span class="relative z-10 transition-colors duration-300">Lihat Produk</span>
                       <div class="w-10 h-10 bg-red rounded-full flex items-center justify-center relative z-10 transition-transform duration-300 group-hover:rotate-90">
                           <span class="material-symbols-outlined text-white">arrow_forward</span>
                       </div>
                       <!-- Background Hover Efek -->
                       <div class="absolute inset-0 bg-gradient-to-r from-red to-[#e13a2a] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>
                    
                    <!-- Avatar Pelanggan -->
                    <a href="#testimoni" class="flex items-center gap-3 group cursor-pointer">
                        <div class="flex -space-x-3 transition-transform duration-300 group-hover:scale-105">
                            @foreach(collect($testimonials)->take(3) as $index => $testi)
                                @php
                                    $colors = ['bg-red', 'bg-gold', 'bg-green'];
                                    $bgColor = $colors[$index % 3];
                                @endphp
                                <div class="w-10 h-10 rounded-full border-2 border-cream {{ $bgColor }} flex items-center justify-center font-black text-white text-sm">
                                    {{ $testi->avatar }}
                                </div>
                            @endforeach
                            
                            @if(collect($testimonials)->count() > 3)
                                <div class="w-10 h-10 rounded-full border-2 border-cream bg-brown flex items-center justify-center text-white text-[10px] font-black">
                                    {{ collect($testimonials)->count() }}+
                                </div>
                            @else
                                <div class="w-10 h-10 rounded-full border-2 border-cream bg-brown flex items-center justify-center text-white text-[10px] font-black">
                                    500+
                                </div>
                            @endif
                        </div>
                        <div class="text-xs font-semibold text-brown leading-tight transition-colors duration-300 group-hover:text-red">
                            Happy<br/><span class="text-brown/60 font-normal transition-colors duration-300 group-hover:text-red/80">Customers</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Gambar Komposisi 3D Floating Objects -->
            <div class="relative lg:h-[500px] w-full flex justify-center items-center mt-12 lg:mt-0 animate-fade-in-up delay-400">
                <!-- Dekorasi Background Ambient -->
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-[radial-gradient(circle_at_center,var(--color-red)_0%,transparent_50%)] opacity-[0.06] blur-2xl z-0 pointer-events-none"></div>
                <div class="absolute top-0 right-10 w-32 h-32 bg-gold/20 rounded-full blur-3xl z-0 pointer-events-none"></div>
                <div class="absolute bottom-10 left-10 w-40 h-40 bg-green/20 rounded-full blur-3xl z-0 pointer-events-none"></div>
                
                <!-- Gambar Utama (Wonton 3D) -->
                <div class="relative w-[85%] max-w-[400px] z-10 transition-all duration-700 hover:scale-[1.05] hover:-rotate-3 group animate-float">
                    <!-- Jika gambar berupa PNG transparan, efek drop-shadow ini akan otomatis mengikuti bentuk wonton sehingga terlihat seperti objek 3D sungguhan -->
                    <img src="{{ asset('images/wonton_asli_1.png') }}"
                         alt="Wonton WONTIME"
                         class="w-full h-auto object-contain mix-blend-multiply filter drop-shadow-[0_20px_40px_rgba(201,50,36,0.4)] transition-transform duration-700 group-hover:scale-110">
                </div>
                
                <!-- Gambar Pendamping (Cendol 3D) -->
                <div class="absolute right-[0%] bottom-[5%] md:-right-[5%] md:bottom-[10%] w-[50%] max-w-[260px] z-20 animate-float delay-300 transition-all duration-700 hover:scale-110 hover:rotate-6 group cursor-pointer">
                    <!-- Jika gambar berupa PNG transparan, efek drop-shadow ini akan mengikuti bentuk gelas/cup cendol -->
                    <img src="{{ asset('images/cendol_asli_1.png') }}"
                         alt="Es Cendol WONTIME"
                         class="w-full h-auto object-contain mix-blend-multiply filter drop-shadow-[0_25px_30px_rgba(120,155,114,0.5)] transition-transform duration-700 group-hover:scale-110">
                </div>
            </div>
        </div>
    </div>
</section>
