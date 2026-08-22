<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WONTIME - Fusion Wonton & Cendol</title>
    <meta name="description" content="WONTIME menghadirkan perpaduan wonton dan minuman dengan cita rasa unik, berkualitas, dan cocok untuk menemani setiap momen Anda.">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="WONTIME - Fusion Wonton & Cendol">
    <meta property="og:description" content="Perpaduan wonton dan minuman dengan cita rasa unik, berkualitas premium.">
    <meta property="og:image" content="{{ asset('images/wonton 2.jpg') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Vite memuat CSS Tailwind & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Icon Google Material Symbols -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <!-- Alpine.js untuk interaktivitas UI -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="antialiased bg-cream text-brown">

    <!-- Skip to Content (Accessibility) -->
    <a href="#main-content" class="skip-link">Langsung ke konten utama</a>

    <!-- Header dengan Alpine.js untuk Scroll & Mobile Menu -->
    <header x-data="{
                scrolled: false,
                menuOpen: false,
                activeSection: 'home',
                initObserver() {
                    const sections = document.querySelectorAll('section[id]');
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                this.activeSection = entry.target.id;
                            }
                        });
                    }, { threshold: 0.35 });
                    sections.forEach(s => observer.observe(s));
                }
            }"
            x-init="initObserver()"
            @scroll.window="scrolled = (window.pageYOffset > 40)"
            :class="scrolled ? 'bg-cream/96 backdrop-blur-md shadow-[0_1px_0_rgba(74,40,27,0.08)]' : 'bg-transparent'"
            class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">

        <div class="max-w-[1200px] mx-auto px-6 h-[68px] flex items-center justify-between">
            <!-- Logo -->
            <a href="#home" class="flex items-center gap-2.5 no-underline group">
                <img src="{{ asset('icons/logo_.png') }}"
                     alt="WONTIME Logo"
                     class="w-9 h-9 shrink-0 object-contain transition-transform duration-300 group-hover:scale-110">
                <div>
                    <div class="font-black text-[20px] text-brown tracking-[2px]">WONTIME</div>
                    <div class="text-[9px] text-brown/60 tracking-[1.5px] -mt-0.5 uppercase">Wonton Rebus & Cendol</div>
                </div>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex gap-1.5" aria-label="Navigasi utama">
                @php
                    $navLinks = [
                        'Home'        => '#home',
                        'Tentang Kami'=> '#tentang',
                        'Produk'      => '#produk',
                        'Galeri'      => '#galeri',
                        'Testimoni'   => '#testimoni',
                        'Kontak'      => '#kontak',
                    ];
                @endphp
                @foreach($navLinks as $label => $href)
                    @php $sectionId = ltrim($href, '#'); @endphp
                    <a href="{{ $href }}"
                       class="text-[14px] font-medium px-3.5 py-1.5 transition-all duration-200 relative rounded-lg"
                       :class="activeSection === '{{ $sectionId }}'
                           ? 'text-red font-semibold'
                           : 'text-brown hover:text-red'">
                        {{ $label }}
                        {{-- Garis bawah aktif --}}
                        <span class="absolute bottom-0 left-3.5 right-3.5 h-[2px] rounded-full bg-red transition-all duration-200"
                              :class="activeSection === '{{ $sectionId }}' ? 'opacity-100' : 'opacity-0'"></span>
                    </a>
                @endforeach
            </nav>

            <!-- Mobile Hamburger -->
            <button @click="menuOpen = !menuOpen"
                    class="md:hidden p-2 text-brown rounded-lg hover:bg-brown/5 transition-colors"
                    aria-label="Toggle menu"
                    :aria-expanded="menuOpen">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!menuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    <path x-show="menuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div x-show="menuOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="md:hidden bg-cream border-t border-brown/10 px-6 py-4 shadow-lg">
            @foreach($navLinks as $label => $href)
                <a @click="menuOpen = false"
                   href="{{ $href }}"
                   class="block font-medium text-[15px] text-brown py-2.5 border-b border-brown/5 hover:text-red hover:pl-2 transition-all duration-200">
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </header>

    <!-- Konten Dinamis -->
    <main id="main-content">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-brown text-cream relative overflow-hidden">
        <!-- Dekorasi Background -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-red/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 pointer-events-none"></div>

        <div class="max-w-[1200px] mx-auto px-6 pt-16 pb-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <!-- Kolom 1: Branding -->
                <div>
                    <div class="flex items-center gap-2.5 mb-4">
                        <img src="{{ asset('icons/logo wontime.png') }}"
                             alt="WONTIME Logo"
                             class="w-8 h-8 object-contain brightness-0 invert">
                        <div>
                            <h2 class="font-black text-xl tracking-[2px]">WONTIME</h2>
                            <p class="text-[9px] text-cream/50 tracking-[1.5px] uppercase">Fusion Wonton & Cendol</p>
                        </div>
                    </div>
                    <p class="text-sm text-cream/60 leading-relaxed max-w-[280px] mb-6">
                        Wontime loka. — Hadir untuk menemani setiap momen Anda dengan cita rasa terbaik.
                    </p>
                    <!-- Social Media -->
                    <div class="flex gap-3">
                        <a href="https://wa.me/6283170342929" target="_blank" rel="noopener noreferrer"
                           class="w-10 h-10 rounded-xl bg-cream/10 hover:bg-red flex items-center justify-center transition-all duration-300 hover:-translate-y-0.5"
                           aria-label="WhatsApp">
                            <svg class="w-5 h-5 text-cream" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/wontime.loka?igsi=MTVpMmQ4dG9xOXkyOA==" target="_blank" rel="noopener noreferrer"
                           class="w-10 h-10 rounded-xl bg-cream/10 hover:bg-red flex items-center justify-center transition-all duration-300 hover:-translate-y-0.5"
                           aria-label="Instagram">
                            <svg class="w-5 h-5 text-cream" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Kolom 2: Navigasi -->
                <div>
                    <h3 class="font-bold text-sm tracking-[1px] text-cream/50 uppercase mb-5">Navigasi</h3>
                    <ul class="space-y-3">
                        @foreach($navLinks as $label => $href)
                            <li>
                                <a href="{{ $href }}"
                                   class="text-sm text-cream/70 hover:text-cream hover:pl-1 transition-all duration-200 inline-flex items-center gap-2">
                                    <span class="w-1 h-1 rounded-full bg-red/50"></span>
                                    {{ $label }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Kolom 3: Kontak -->
                <div>
                    <h3 class="font-bold text-sm tracking-[1px] text-cream/50 uppercase mb-5">Kontak</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-red text-lg mt-0.5">location_on</span>
                            <p class="text-sm text-cream/70 leading-relaxed">
                                Politeknik Negeri Tanah Laut, Jl. Ahmad Yani No.Km.06, Pelaihari, Kalimantan Selatan
                            </p>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-red text-lg">phone</span>
                            <a href="tel:+6283170342929" class="text-sm text-cream/70 hover:text-cream transition-colors">
                                +62 831-7034-2929
                            </a>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-red text-lg">schedule</span>
                            <p class="text-sm text-cream/70">Setiap Hari, 09.00 – 21.00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Divider & Copyright -->
            <div class="border-t border-cream/10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-[13px] text-cream/40">
                    © {{ date('Y') }} WONTIME. All Rights Reserved.
                </p>
                <p class="text-[13px] text-cream/30">
                    Dibuat oleh <span class="text-red">wontime.loka</span>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <div x-data="{ showTop: false }"
         @scroll.window="showTop = (window.pageYOffset > 400)">
        <button x-show="showTop"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-4"
                @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                class="fixed bottom-6 right-6 z-40 w-12 h-12 bg-red hover:bg-red/90 text-white rounded-2xl shadow-[0_8px_25px_rgba(201,50,36,0.3)] hover:shadow-[0_12px_35px_rgba(201,50,36,0.4)] flex items-center justify-center transition-all duration-300 hover:-translate-y-1"
                aria-label="Kembali ke atas">
            <span class="material-symbols-outlined">arrow_upward</span>
        </button>
    </div>

</body>
</html>
