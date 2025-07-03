@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <!-- Hero Section Carousel with Swiper.js -->
    <section class="swiper-hero-section h-screen relative overflow-hidden">
        <!-- Swiper Container -->
        <div class="swiper hero-swiper h-full w-full">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/hero1.jpg.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="container mx-auto px-6 text-center">
                            <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight mb-4">Temukan Hunian Mewah Impian Anda</h1>
                            <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">Kami menawarkan koleksi properti eksklusif dengan desain arsitektur terbaik dan lokasi strategis di seluruh Indonesia.</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <button class="bg-primary text-white px-8 py-3 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-all text-lg font-medium">Jelajahi Properti</button>
                                <button class="bg-transparent border-2 border-white text-white px-8 py-3 !rounded-button whitespace-nowrap hover:bg-white hover:text-secondary transition-all text-lg font-medium">Konsultasi Gratis</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/hero2.jpg.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="container mx-auto px-6 text-center">
                            <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight mb-4">Investasi Properti Premium</h1>
                            <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">Tingkatkan portofolio investasi Anda dengan properti eksklusif yang menawarkan nilai apresiasi tinggi.</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <button class="bg-primary text-white px-8 py-3 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-all text-lg font-medium">Mulai Investasi</button>
                                <button class="bg-transparent border-2 border-white text-white px-8 py-3 !rounded-button whitespace-nowrap hover:bg-white hover:text-secondary transition-all text-lg font-medium">Hubungi Ahli</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide relative">
                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/hero3.jpg.jpg') }}');"></div>
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="container mx-auto px-6 text-center">
                            <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight mb-4">Pengalaman Hunian Mewah</h1>
                            <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">Nikmati kenyamanan hidup dengan fasilitas eksklusif dan layanan premium di lokasi strategis.</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <button class="bg-primary text-white px-8 py-3 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-all text-lg font-medium">Lihat Properti</button>
                                <button class="bg-transparent border-2 border-white text-white px-8 py-3 !rounded-button whitespace-nowrap hover:bg-white hover:text-secondary transition-all text-lg font-medium">Jadwalkan Tur</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Swiper Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Swiper.js Hero Carousel Initialization -->
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.hero-swiper', {
                // Enable fade effect with improved smoothness
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },

                // Slower transition speed for smoother fade (in ms)
                speed: 1000,

                // Auto play with 4 second delay and smooth transitions
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                    waitForTransition: true
                },

                // Improved smoothness settings
                observer: true,
                observeParents: true,

                // Looping
                loop: true,

                // Pagination
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                // Responsive breakpoints
                breakpoints: {
                    640: {
                        speed: 800
                    },
                    768: {
                        speed: 900
                    },
                    1024: {
                        speed: 1000
                    },
                }
            });
        });
    </script>
    @endpush

    <!-- Search Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-6">
            <div class="bg-white shadow-xl rounded-lg -mt-24 relative z-10 p-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div>
                        <label class="block text-gray-700 font-medium mb-2">Tipe Properti</label>
                        <div class="relative">
                            <select class="w-full bg-gray-50 border border-gray-200 rounded px-4 py-3 appearance-none focus:outline-none focus:border-primary pr-8">
                                <option>Semua Tipe</option>
                                <option>Rumah</option>
                                <option>Apartemen</option>
                                <option>Villa</option>
                                <option>Tanah</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <i class="ri-arrow-down-s-line text-gray-500"></i>
                            </div>
                        </div>
                        </div>
                        <div>
                        <label class="block text-gray-700 font-medium mb-2">Lokasi</label>
                        <div class="relative">
                            <select class="w-full bg-gray-50 border border-gray-200 rounded px-4 py-3 appearance-none focus:outline-none focus:border-primary pr-8">
                                <option>Semua Lokasi</option>
                                <option>Jakarta</option>
                                <option>Bandung</option>
                                <option>Surabaya</option>
                                <option>Bali</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <i class="ri-arrow-down-s-line text-gray-500"></i>
                            </div>
                        </div>
                        </div>
                        <div>
                        <label class="block text-gray-700 font-medium mb-2">Rentang Harga</label>
                        <div class="relative">
                            <select class="w-full bg-gray-50 border border-gray-200 rounded px-4 py-3 appearance-none focus:outline-none focus:border-primary pr-8">
                                <option>Semua Harga</option>
                                <option>< Rp 1 Miliar</option>
                                <option>Rp 1 - 5 Miliar</option>
                                <option>Rp 5 - 10 Miliar</option>
                                <option>> Rp 10 Miliar</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <i class="ri-arrow-down-s-line text-gray-500"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end">
                        <button class="w-full bg-primary text-white px-6 py-3 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-all font-medium">Cari Properti</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Properties -->
    <section id="properties" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Properti Unggulan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Koleksi properti eksklusif yang telah kami pilih dengan teliti untuk memenuhi standar kualitas dan kemewahan tertinggi.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($featuredProperties as $property)
                <!-- Property Card -->
                <div class="property-card bg-white rounded-lg overflow-hidden shadow-lg transition-all duration-300">
                    <a href="{{ route('properti.show', $property->slug) }}" class="relative block">
                        @if($property->hasMedia('gambar_properti'))
                            <img src="{{ $property->getFirstMediaUrl('gambar_properti', 'thumb') }}" alt="{{ $property->nama_properti }}" class="w-full h-64 object-cover object-top">
                        @else
                            <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                                <i class="ri-image-line text-4xl text-gray-400"></i>
                            </div>
                        @endif
                        <div class="absolute top-4 left-4 bg-primary text-white px-3 py-1 rounded-full text-sm font-medium">
                            {{ ucfirst($property->status) }}
                        </div>
                    </a>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <a href="{{ route('properti.show', $property->slug) }}" class="text-xl font-bold hover:text-primary">{{ $property->nama_properti }}</a>
                            <p class="text-primary font-bold text-lg">
                                Rp {{ number_format($property->harga, 0, ',', '.') }}
                                @if($property->satuan_harga == 'juta')
                                    Juta
                                @elseif($property->satuan_harga == 'miliar')
                                    Miliar
                                @elseif($property->satuan_harga == 'perbulan')
                                    /bulan
                                @elseif($property->satuan_harga == 'pertahun')
                                    /tahun
                                @endif
                            </p>
                        </div>
                        <p class="text-gray-600 mb-4">{{ $property->lokasi }}</p>
                        <div class="flex justify-between text-gray-500 border-t pt-4">
                            @if($property->tipe_properti != 'tanah')
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2">
                                    <i class="ri-hotel-bed-line"></i>
                                </div>
                                <span>{{ $property->jumlah_kamar }} Kamar</span>
                            </div>
                            @endif
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2">
                                    <i class="ri-home-4-line"></i>
                                </div>
                                <span>{{ $property->luas_bangunan }} m²</span>
                            </div>
                            @if($property->tipe_properti != 'tanah')
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2">
                                    <i class="ri-car-line"></i>
                                </div>
                                <span>{{ $property->jumlah_parkir }} Parkir</span>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-3 text-center py-10">
                    <p class="text-gray-500">Belum ada properti yang ditampilkan. Silakan cek kembali nanti.</p>
                </div>
                @endforelse
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('properti.index') }}" class="bg-white border border-primary text-primary px-8 py-3 !rounded-button whitespace-nowrap hover:bg-primary hover:text-white transition-all font-medium">Lihat Semua Properti</a>
            </div>
        </div>
    </section>


    <!-- Testimonial Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Apa Kata Klien Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Pengalaman nyata dari klien yang telah mempercayakan kebutuhan properti mereka kepada kami.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="flex items-center mb-6">
                        <img src="https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20an%20Indonesian%20businessman%20in%20his%2040s%20wearing%20a%20formal%20suit%2C%20with%20a%20confident%20smile%20and%20well-groomed%20appearance.%20The%20photo%20has%20a%20neutral%20background%20and%20professional%20lighting%2C%20creating%20a%20trustworthy%20and%20authoritative%20impression.%20The%20image%20is%20cropped%20as%20a%20circular%20portrait%20focusing%20on%20his%20face%20and%20shoulders.&width=100&height=100&seq=test1&orientation=squarish" alt="Ahmad Suryanto" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold">Ahmad Suryanto</h4>
                            <p class="text-gray-500 text-sm">CEO, Suryanto Group</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex text-primary">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Saya sangat puas dengan pelayanan profesional dan properti eksklusif yang ditawarkan. Tim mereka memahami kebutuhan saya dan menemukan rumah impian yang sempurna untuk keluarga saya."</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="flex items-center mb-6">
                        <img src="https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20an%20Indonesian%20businesswoman%20in%20her%2030s%20with%20long%20black%20hair%2C%20wearing%20a%20stylish%20business%20attire.%20She%20has%20a%20warm%2C%20approachable%20smile%20and%20natural%20makeup.%20The%20photo%20has%20a%20neutral%20background%20with%20professional%20lighting%2C%20creating%20a%20confident%20and%20trustworthy%20impression.%20The%20image%20is%20cropped%20as%20a%20circular%20portrait%20focusing%20on%20her%20face%20and%20shoulders.&width=100&height=100&seq=test2&orientation=squarish" alt="Anita Wijaya" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold">Anita Wijaya</h4>
                            <p class="text-gray-500 text-sm">Direktur, Wijaya Investments</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex text-primary">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Sebagai investor properti, saya mencari agen yang dapat diandalkan dan memiliki akses ke properti premium. Mereka tidak hanya memenuhi ekspektasi saya tetapi juga memberikan insight berharga untuk investasi jangka panjang."</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <div class="flex items-center mb-6">
                        <img src="https://readdy.ai/api/search-image?query=Professional%20headshot%20of%20a%20young%20Indonesian%20entrepreneur%20in%20his%20early%2030s%20with%20short%20black%20hair%2C%20wearing%20a%20smart%20casual%20outfit%20with%20a%20blazer.%20He%20has%20a%20friendly%2C%20confident%20smile%20and%20a%20modern%20appearance.%20The%20photo%20has%20a%20neutral%20background%20with%20professional%20lighting%2C%20creating%20an%20approachable%20yet%20professional%20impression.%20The%20image%20is%20cropped%20as%20a%20circular%20portrait%20focusing%20on%20his%20face%20and%20shoulders.&width=100&height=100&seq=test3&orientation=squarish" alt="Budi Santoso" class="w-16 h-16 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold">Budi Santoso</h4>
                            <p class="text-gray-500 text-sm">Pengusaha</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex text-primary">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-half-fill"></i>
                </div>
                    </div>
                    <p class="text-gray-600 italic">"Proses pembelian villa di Bali menjadi sangat mudah berkat bantuan tim mereka. Mereka menangani semua aspek legal dan administrasi dengan profesional, bahkan saat saya berada di luar negeri."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Articles -->
    <section id="articles" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Artikel Terbaru</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Dapatkan informasi dan insight terkini seputar pasar properti, investasi, dan gaya hidup mewah.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($recentArticles as $article)
                <!-- Article Card -->
                <div class="article-card bg-white rounded-lg overflow-hidden shadow-lg transition-all duration-300">
                    @if($article->gambar)
                        <img src="{{ asset('storage/' . $article->gambar) }}" alt="{{ $article->judul }}" class="w-full h-56 object-cover object-top">
                    @else
                        <div class="w-full h-56 bg-gray-200 flex items-center justify-center">
                            <i class="ri-image-line text-4xl text-gray-400"></i>
                        </div>
                    @endif
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ ucfirst($article->kategori) }}</span>
                            <span class="text-gray-400 text-sm ml-4">{{ \Carbon\Carbon::parse($article->tanggal_posting)->format('j M Y') }}</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">{{ $article->judul }}</h3>
                        <p class="text-gray-600 mb-4">{{ $article->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($article->konten), 100) }}</p>
                        <a href="{{ route('artikel.show', $article->slug) }}" class="text-primary font-medium inline-flex items-center hover:underline">
                            Baca Selengkapnya
                            <div class="w-5 h-5 flex items-center justify-center ml-1">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-1 md:col-span-3 text-center py-10">
                    <p class="text-gray-500">Belum ada artikel yang ditampilkan. Silakan cek kembali nanti.</p>
                </div>
                @endforelse
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('artikel.index') }}" class="bg-white border border-primary text-primary px-8 py-3 !rounded-button whitespace-nowrap hover:bg-primary hover:text-white transition-all font-medium inline-block">Lihat Semua Artikel</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Hubungi Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Konsultasikan kebutuhan properti Anda dengan tim ahli kami dan temukan solusi terbaik untuk investasi properti Anda.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                    <form action="{{ route('kontak.kirim') }}" method="POST">
                        @csrf

                        @if(session('success'))
                            <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="nama" class="block text-gray-700 font-medium mb-2">Nama Lengkap *</label>
                                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="w-full bg-white border @error('nama') border-red-500 @else border-gray-200 @enderror rounded px-4 py-3 focus:outline-none focus:border-primary" placeholder="Masukkan nama lengkap" required>
                                @error('nama')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email *</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-white border @error('email') border-red-500 @else border-gray-200 @enderror rounded px-4 py-3 focus:outline-none focus:border-primary" placeholder="Masukkan email" required>
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="w-full bg-white border border-gray-200 rounded px-4 py-3 focus:outline-none focus:border-primary" placeholder="Masukkan nomor telepon">
                        </div>

                        <div class="mb-6">
                            <label for="subject" class="block text-gray-700 font-medium mb-2">Saya Tertarik Dengan</label>
                            <div class="relative">
                                <select id="subject" name="subject" class="w-full bg-white border border-gray-200 rounded px-4 py-3 appearance-none focus:outline-none focus:border-primary pr-8">
                                    <option value="" {{ old('subject') == '' ? 'selected' : '' }}>Pilih Kategori</option>
                                    <option value="Membeli Properti" {{ old('subject') == 'Membeli Properti' ? 'selected' : '' }}>Membeli Properti</option>
                                    <option value="Menjual Properti" {{ old('subject') == 'Menjual Properti' ? 'selected' : '' }}>Menjual Properti</option>
                                    <option value="Menyewa Properti" {{ old('subject') == 'Menyewa Properti' ? 'selected' : '' }}>Menyewa Properti</option>
                                    <option value="Investasi Properti" {{ old('subject') == 'Investasi Properti' ? 'selected' : '' }}>Investasi Properti</option>
                                    <option value="Konsultasi" {{ old('subject') == 'Konsultasi' ? 'selected' : '' }}>Konsultasi</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                    <i class="ri-arrow-down-s-line text-gray-500"></i>
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="pesan" class="block text-gray-700 font-medium mb-2">Pesan *</label>
                            <textarea id="pesan" name="pesan" rows="4" class="w-full bg-white border @error('pesan') border-red-500 @else border-gray-200 @enderror rounded px-4 py-3 focus:outline-none focus:border-primary" placeholder="Tuliskan pesan atau pertanyaan Anda" required>{{ old('pesan') }}</textarea>
                            @error('pesan')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6 flex items-start">
                            <input type="checkbox" id="privacy-policy" name="privacy-policy" class="custom-checkbox mt-1" required>
                            <label for="privacy-policy" class="ml-3 text-gray-600 text-sm">Saya menyetujui penggunaan data pribadi untuk keperluan komunikasi.</label>
                        </div>

                        <button type="submit" class="bg-primary text-white px-8 py-3 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-all font-medium w-full md:w-auto">Kirim Pesan</button>
                    </form>
                </div>

                <div>
                    <div class="bg-white p-8 rounded-lg shadow-lg h-full">
                        <div class="mb-8">
                            <h3 class="text-2xl font-bold mb-4">Informasi Kontak</h3>
                            <p class="text-gray-600 mb-6">Jangan ragu untuk menghubungi kami melalui berbagai channel berikut:</p>

                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <div class="w-10 h-10 flex items-center justify-center bg-primary bg-opacity-10 rounded-full mr-4 mt-1">
                                        <i class="ri-map-pin-line text-primary"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold mb-1">Alamat</h4>
                                        <p class="text-gray-600">Jl. Jend. Sudirman No. 28, Senayan, Jakarta Selatan 12190</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="w-10 h-10 flex items-center justify-center bg-primary bg-opacity-10 rounded-full mr-4 mt-1">
                                        <i class="ri-phone-line text-primary"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold mb-1">Telepon</h4>
                                        <p class="text-gray-600">+62 21 5678 9012</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="w-10 h-10 flex items-center justify-center bg-primary bg-opacity-10 rounded-full mr-4 mt-1">
                                        <i class="ri-mail-line text-primary"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold mb-1">Email</h4>
                                        <p class="text-gray-600">info@luxeestate.id</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="w-10 h-10 flex items-center justify-center bg-primary bg-opacity-10 rounded-full mr-4 mt-1">
                                        <i class="ri-time-line text-primary"></i>
                                    </div>
                            <div>
                                        <h4 class="font-bold mb-1">Jam Operasional</h4>
                                        <p class="text-gray-600">Senin - Jumat: 09.00 - 17.00 WIB<br>Sabtu: 09.00 - 15.00 WIB</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold mb-4">Lokasi Kami</h3>
                            <div class="rounded-lg overflow-hidden h-64 bg-gray-200" style="background-image: url('https://public.readdy.ai/gen_page/map_placeholder_1280x720.png'); background-size: cover; background-position: center;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-secondary text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-6">Siap Menemukan Properti Impian Anda?</h2>
            <p class="text-gray-300 max-w-2xl mx-auto mb-8">Jadwalkan konsultasi gratis dengan tim ahli kami dan mulai perjalanan menuju hunian mewah yang sesuai dengan gaya hidup Anda.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-primary text-white px-8 py-3 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-all font-medium">Jadwalkan Konsultasi</button>
                <button class="bg-transparent border-2 border-white text-white px-8 py-3 !rounded-button whitespace-nowrap hover:bg-white hover:text-secondary transition-all font-medium">Hubungi Kami</button>
            </div>
        </div>
    </section>
    <style>
         h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
        }

          .property-card:hover {
            transform: translateY(-5px);
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .article-card:hover {
            transform: translateY(-5px);
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #D4AF37;
        }

        .custom-checkbox {
            appearance: none;
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #D4AF37;
            border-radius: 4px;
            outline: none;
            cursor: pointer;
            position: relative;
        }

        .custom-checkbox:checked {
            background-color: #D4AF37;
        }

        .custom-checkbox:checked::after {
            content: '';
            position: absolute;
            top: 2px;
            left: 6px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .back-to-top {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        /* Swiper Hero Carousel Styles */
        .swiper-hero-section {
            --swiper-theme-color: #D4AF37;
            --swiper-pagination-bullet-inactive-color: #ffffff;
            --swiper-pagination-bullet-inactive-opacity: 0.5;
        }

        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            opacity: var(--swiper-pagination-bullet-inactive-opacity);
            background: var(--swiper-pagination-bullet-inactive-color);
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            background: var(--swiper-theme-color);
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .hero-swiper .swiper-slide {
            transition: opacity 0.4s ease;
        }

        .hero-swiper .swiper-pagination {
            bottom: 30px;
        }

        /* Improved Transition Styles */
        .hero-swiper .swiper-slide-active {
            z-index: 1;
        }

        .hero-swiper .swiper-slide {
            opacity: 0 !important;
            transition: opacity 1s ease;
        }

        .hero-swiper .swiper-slide-active,
        .hero-swiper .swiper-slide-duplicate-active {
            opacity: 1 !important;
        }

        .hero-swiper .swiper-slide .absolute {
            transition: transform 1.2s ease, opacity 1s ease;
            transform: scale(1.05);
            opacity: 0;
        }

        .hero-swiper .swiper-slide-active .absolute,
        .hero-swiper .swiper-slide-duplicate-active .absolute {
            transform: scale(1);
            opacity: 1;
        }

        @media (max-width: 640px) {
            .hero-swiper .swiper-pagination {
                bottom: 20px;
            }
        }

    </style>
@endsection
