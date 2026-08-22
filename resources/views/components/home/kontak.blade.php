<section id="kontak" class="py-24 bg-beige relative overflow-hidden">
    <!-- Dekorasi -->
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-red/5 rounded-full blur-3xl translate-y-1/2 translate-x-1/2 pointer-events-none"></div>

    <div class="max-w-[1200px] mx-auto px-6 relative z-10">
        <div class="section-label">
            <div class="section-label-line"></div>
            <span class="section-label-text">Kontak</span>
        </div>
        <h2 class="font-black text-3xl md:text-5xl text-brown mb-14">Hubungi Kami</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-start">
            <div>
                <p class="text-base text-brown/75 leading-relaxed mb-8">
                    Ada pertanyaan atau ingin pesan dalam jumlah besar? Jangan ragu untuk menghubungi kami!
                </p>
                <div class="space-y-6">
                    <div class="flex items-start gap-4 group">
                        <div class="w-12 h-12 rounded-2xl bg-white shadow-sm flex items-center justify-center border border-brown/5 shrink-0 group-hover:bg-red group-hover:border-red transition-colors duration-300">
                            <span class="material-symbols-outlined text-red group-hover:text-white transition-colors duration-300">location_on</span>
                        </div>
                        <div>
                            <div class="font-semibold text-sm text-brown mb-0.5">Lokasi</div>
                            <div class="text-sm text-brown/70 leading-relaxed">Politeknik Negeri Tanah Laut, Jl. Ahmad Yani No.Km.06, Pemuda, Kec. Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan 70815</div>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 group">
                        <div class="w-12 h-12 rounded-2xl bg-white shadow-sm flex items-center justify-center border border-brown/5 shrink-0 group-hover:bg-red group-hover:border-red transition-colors duration-300">
                            <span class="material-symbols-outlined text-red group-hover:text-white transition-colors duration-300">phone</span>
                        </div>
                        <div>
                            <div class="font-semibold text-sm text-brown mb-0.5">WhatsApp</div>
                            <a href="https://wa.me/6283170342929" target="_blank" rel="noopener noreferrer"
                               class="text-sm text-brown/70 hover:text-red transition-colors">
                                +62 831-7034-2929
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 group">
                        <div class="w-12 h-12 rounded-2xl bg-white shadow-sm flex items-center justify-center border border-brown/5 shrink-0 group-hover:bg-red group-hover:border-red transition-colors duration-300">
                            <span class="material-symbols-outlined text-red group-hover:text-white transition-colors duration-300">schedule</span>
                        </div>
                        <div>
                            <div class="font-semibold text-sm text-brown mb-0.5">Jam Buka</div>
                            <div class="text-sm text-brown/70">Setiap Hari, 09.00 – 21.00 WIB</div>
                        </div>
                    </div>
                </div>

                <!-- CTA WhatsApp -->
                <a href="https://wa.me/6283170342929" target="_blank" rel="noopener noreferrer"
                   class="mt-8 inline-flex items-center gap-3 bg-[#25D366] hover:bg-[#20BD5A] text-white font-semibold text-sm px-6 py-3.5 rounded-2xl shadow-[0_8px_25px_rgba(37,211,102,0.3)] hover:shadow-[0_12px_35px_rgba(37,211,102,0.4)] transition-all duration-300 hover:-translate-y-0.5">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Chat via WhatsApp
                </a>
            </div>

            <form action="{{ route('testimoni.store') }}" method="POST"
                  class="bg-white rounded-[24px] p-8 shadow-[0_8px_30px_rgba(74,40,27,0.06)] border border-brown/5">
                @csrf

                <h3 class="font-bold text-lg text-brown mb-1">Kirim Testimoni</h3>
                <p class="text-sm text-brown/60 mb-6">Bagikan pengalaman Anda bersama WONTIME</p>

                @if(session('success'))
                    <div class="mb-5 p-4 bg-green/10 border border-green/20 rounded-xl text-green text-sm font-semibold flex items-center gap-2">
                        <span class="material-symbols-outlined text-lg">check_circle</span>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="mb-5">
                    <label for="nama" class="block text-sm font-semibold text-brown mb-2">Nama</label>
                    <input type="text"
                           id="nama"
                           name="nama"
                           required
                           placeholder="Nama lengkap Anda"
                           value="{{ old('nama') }}"
                           class="w-full border border-brown/10 rounded-xl px-4 py-3 text-sm text-brown bg-cream/50 transition-all duration-200 placeholder:text-brown/30
                                  @error('nama') @enderror">
                    @error('nama')
                        <p class="text-red text-xs mt-1.5 flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">error</span>
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="isi" class="block text-sm font-semibold text-brown mb-2">Pesan</label>
                    <textarea rows="4"
                              id="isi"
                              name="isi"
                              required
                              placeholder="Tulis pesan atau testimoni Anda..."
                              class="w-full border border-brown/10 rounded-xl px-4 py-3 text-sm text-brown bg-cream/50 transition-all duration-200 resize-none placeholder:text-brown/30
                                     @error('isi') @enderror">{{ old('isi') }}</textarea>
                    @error('isi')
                        <p class="text-red text-xs mt-1.5 flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">error</span>
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <button type="submit"
                        class="w-full bg-red hover:bg-red/90 text-white font-semibold text-sm py-3.5 rounded-xl shadow-[0_8px_25px_rgba(201,50,36,0.2)] hover:shadow-[0_12px_35px_rgba(201,50,36,0.3)] transition-all duration-300 hover:-translate-y-0.5 flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-lg">send</span>
                    Kirim Testimoni
                </button>
            </form>
        </div>
    </div>
</section>
