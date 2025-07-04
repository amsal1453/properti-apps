@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
    <style>
        .custom-checkbox {
            appearance: none;
            width: 1.25rem;
            height: 1.25rem;
            border: 2px solid #E6E6E6;
            border-radius: 0.25rem;
            position: relative;
            cursor: pointer;
        }

        .custom-checkbox:checked {
            background-color: var(--samudra-red);
            border-color: var(--samudra-red);
        }

        .custom-checkbox:checked::after {
            content: '';
            position: absolute;
            left: 6px;
            top: 2px;
            width: 6px;
            height: 12px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .custom-select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
        }

        .!rounded-button {
            border-radius: 9999px !important;
        }
    </style>

    <main class="pt-28 pb-20">
        <!-- Hero Section -->
        <div class="bg-gray-50 py-12 mb-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Hubungi Kami</h1>
                    <p class="text-lg text-gray-600 max-w-3xl mx-auto">Silakan hubungi tim kami untuk informasi lebih lanjut tentang properti atau layanan yang kami sediakan. Kami siap membantu Anda.</p>
                </div>
            </div>
        </div>

        <!-- Contact Info & Form Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Contact Information -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-sm p-6 h-full">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Informasi Kontak</h2>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="flex items-center justify-center bg-samudra-red/10 rounded-lg w-12 h-12 mr-4">
                                    <i class="ri-map-pin-line text-xl text-samudra-red"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Alamat Kantor</h3>
                                    <p class="text-gray-600">Jl. Tgk Chik Ditiro No.88, Peuniti, Kec. Baiturrahman, Kota Banda Aceh</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex items-center justify-center bg-samudra-red/10 rounded-lg w-12 h-12 mr-4">
                                    <i class="ri-phone-line text-xl text-samudra-red"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Telepon</h3>
                                    <p class="text-gray-600">+62 852-7087-7887</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex items-center justify-center bg-samudra-red/10 rounded-lg w-12 h-12 mr-4">
                                    <i class="ri-mail-line text-xl text-samudra-red"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Email</h3>
                                    <p class="text-gray-600">info@samudraindahproperti.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex items-center justify-center bg-samudra-red/10 rounded-lg w-12 h-12 mr-4">
                                    <i class="ri-time-line text-xl text-samudra-red"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Jam Operasional</h3>
                                    <p class="text-gray-600">Senin - Jumat: 09.00 - 17.00 WIB<br>Sabtu: 09.00 - 15.00 WIB<br>Minggu & Hari Libur: Tutup</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h3 class="font-semibold text-gray-900 mb-3">Ikuti Kami</h3>
                            <div class="flex space-x-3">
                                <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-samudra-red hover:text-white transition-colors">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                                <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-samudra-red hover:text-white transition-colors">
                                    <i class="ri-instagram-fill"></i>
                                </a>
                                <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-samudra-red hover:text-white transition-colors">
                                    <i class="ri-twitter-x-fill"></i>
                                </a>
                                <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-samudra-red hover:text-white transition-colors">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                                <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-samudra-red hover:text-white transition-colors">
                                    <i class="ri-youtube-fill"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Kirim Pesan</h2>

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
                                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="w-full border @error('nama') border-red-500 @else border-gray-300 @enderror rounded px-4 py-3 focus:ring-2 focus:ring-samudra-red focus:border-samudra-red" required>
                                    @error('nama')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="email" class="block text-gray-700 font-medium mb-2">Email *</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full border @error('email') border-red-500 @else border-gray-300 @enderror rounded px-4 py-3 focus:ring-2 focus:ring-samudra-red focus:border-samudra-red" required>
                                    @error('email')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="phone" class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
                                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="w-full border border-gray-300 rounded px-4 py-3 focus:ring-2 focus:ring-samudra-red focus:border-samudra-red">
                                </div>
                                <div>
                                    <label for="subject" class="block text-gray-700 font-medium mb-2">Subjek *</label>
                                    <select id="subject" name="subject" class="w-full border border-gray-300 rounded px-4 py-3 focus:ring-2 focus:ring-samudra-red focus:border-samudra-red appearance-none bg-white" required>
                                        <option value="" disabled selected>Pilih Kategori</option>
                                        <option value="Membeli Properti" {{ old('subject') == 'Membeli Properti' ? 'selected' : '' }}>Membeli Properti</option>
                                        <option value="Menjual Properti" {{ old('subject') == 'Menjual Properti' ? 'selected' : '' }}>Menjual Properti</option>
                                        <option value="Menyewa Properti" {{ old('subject') == 'Menyewa Properti' ? 'selected' : '' }}>Menyewa Properti</option>
                                        <option value="Investasi Properti" {{ old('subject') == 'Investasi Properti' ? 'selected' : '' }}>Investasi Properti</option>
                                        <option value="Konsultasi" {{ old('subject') == 'Konsultasi' ? 'selected' : '' }}>Konsultasi</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="pesan" class="block text-gray-700 font-medium mb-2">Pesan *</label>
                                <textarea id="pesan" name="pesan" rows="6" class="w-full border @error('pesan') border-red-500 @else border-gray-300 @enderror rounded px-4 py-3 focus:ring-2 focus:ring-samudra-red focus:border-samudra-red" required>{{ old('pesan') }}</textarea>
                                @error('pesan')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex items-start mb-6">
                                <input type="checkbox" id="privacy-policy" name="privacy-policy" class="custom-checkbox mt-1" required>
                                <label for="privacy-policy" class="ml-3 text-gray-600">Saya menyetujui <a href="#" class="text-samudra-red hover:underline">kebijakan privasi</a> dan penggunaan data pribadi untuk keperluan komunikasi.</label>
                            </div>

                            <button type="submit" class="w-full md:w-auto bg-samudra-red hover:bg-samudra-red/90 text-white py-3 px-6 rounded !rounded-button whitespace-nowrap transition-colors font-medium">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12">
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Lokasi Kami</h2>
                <div class="aspect-[16/9] rounded-lg overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.000174806287!2d95.3222373739693!3d5.566988533541185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3040376870b5b873%3A0xac4db22f09aa61de!2sPT.%20SAMUDRA%20INDAH%20PROPERTI!5e0!3m2!1sid!2sid!4v1751597796191!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Pertanyaan yang Sering Diajukan</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">Berikut adalah beberapa pertanyaan yang sering diajukan oleh klien kami</p>
            </div>

            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="space-y-4">
                    <div class="border-b border-gray-200 pb-4">
                        <button class="flex justify-between items-center w-full text-left focus:outline-none">
                            <h3 class="font-semibold text-lg text-gray-900">Bagaimana cara menjadwalkan pertemuan dengan agen properti?</h3>
                            <i class="ri-add-line text-primary text-xl"></i>
                        </button>
                        <div class="mt-2">
                            <p class="text-gray-600">Anda dapat menjadwalkan pertemuan dengan agen properti kami melalui formulir kontak di atas, menelepon langsung ke nomor kami, atau mengirimkan email. Tim kami akan merespons dalam waktu 24 jam kerja.</p>
                        </div>
                    </div>

                    <div class="border-b border-gray-200 pb-4">
                        <button class="flex justify-between items-center w-full text-left focus:outline-none">
                            <h3 class="font-semibold text-lg text-gray-900">Apakah ada biaya untuk konsultasi properti?</h3>
                            <i class="ri-add-line text-primary text-xl"></i>
                        </button>
                        <div class="mt-2 hidden">
                            <p class="text-gray-600">Tidak, konsultasi awal dengan tim properti kami tidak dikenakan biaya. Kami ingin memahami kebutuhan Anda terlebih dahulu sebelum memberikan rekomendasi properti yang sesuai.</p>
                        </div>
                    </div>

                    <div class="border-b border-gray-200 pb-4">
                        <button class="flex justify-between items-center w-full text-left focus:outline-none">
                            <h3 class="font-semibold text-lg text-gray-900">Berapa lama proses pembelian properti biasanya berlangsung?</h3>
                            <i class="ri-add-line text-primary text-xl"></i>
                        </button>
                        <div class="mt-2 hidden">
                            <p class="text-gray-600">Proses pembelian properti dapat bervariasi tergantung pada kompleksitas transaksi, tetapi umumnya membutuhkan waktu 1-3 bulan dari penawaran hingga serah terima. Tim kami akan membimbing Anda di setiap tahap proses.</p>
                        </div>
                    </div>

                    <div class="border-b border-gray-200 pb-4">
                        <button class="flex justify-between items-center w-full text-left focus:outline-none">
                            <h3 class="font-semibold text-lg text-gray-900">Apakah kalian membantu proses KPR?</h3>
                            <i class="ri-add-line text-primary text-xl"></i>
                        </button>
                        <div class="mt-2 hidden">
                            <p class="text-gray-600">Ya, kami memiliki kerja sama dengan berbagai bank dan lembaga keuangan untuk membantu proses KPR Anda. Kami dapat membantu mulai dari simulasi KPR, pemilihan bank dengan suku bunga kompetitif, hingga pengajuan dokumen.</p>
                        </div>
                    </div>

                    <div class="pb-2">
                        <button class="flex justify-between items-center w-full text-left focus:outline-none">
                            <h3 class="font-semibold text-lg text-gray-900">Di kota mana saja kalian memiliki properti?</h3>
                            <i class="ri-add-line text-primary text-xl"></i>
                        </button>
                        <div class="mt-2 hidden">
                            <p class="text-gray-600">Saat ini, kami memiliki properti di beberapa kota besar di Indonesia seperti Jakarta, Bandung, Surabaya, Bali, Medan, Makassar, dan Yogyakarta. Kami juga terus memperluas jaringan kami ke kota-kota lainnya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
