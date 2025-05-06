@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
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
                                <div class="flex items-center justify-center bg-primary/10 rounded-lg w-12 h-12 mr-4">
                                    <i class="ri-map-pin-line text-xl text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Alamat Kantor</h3>
                                    <p class="text-gray-600">Jl. Properti Indah No. 123, Menteng, Jakarta Pusat, 10310</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex items-center justify-center bg-primary/10 rounded-lg w-12 h-12 mr-4">
                                    <i class="ri-phone-line text-xl text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Telepon</h3>
                                    <p class="text-gray-600">+62 21 5566 7788</p>
                                    <p class="text-gray-600">+62 812 3456 7890</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex items-center justify-center bg-primary/10 rounded-lg w-12 h-12 mr-4">
                                    <i class="ri-mail-line text-xl text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Email</h3>
                                    <p class="text-gray-600">info@propertiku.com</p>
                                    <p class="text-gray-600">sales@propertiku.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="flex items-center justify-center bg-primary/10 rounded-lg w-12 h-12 mr-4">
                                    <i class="ri-time-line text-xl text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-1">Jam Operasional</h3>
                                    <p class="text-gray-600">Senin - Jumat: 09:00 - 17:00</p>
                                    <p class="text-gray-600">Sabtu: 09:00 - 15:00</p>
                                    <p class="text-gray-600">Minggu & Hari Libur: Tutup</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <h3 class="font-semibold text-gray-900 mb-3">Ikuti Kami</h3>
                            <div class="flex space-x-3">
                                <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-primary hover:text-white transition-colors">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                                <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-primary hover:text-white transition-colors">
                                    <i class="ri-instagram-fill"></i>
                                </a>
                                <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-primary hover:text-white transition-colors">
                                    <i class="ri-twitter-x-fill"></i>
                                </a>
                                <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-primary hover:text-white transition-colors">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                                <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-full hover:bg-primary hover:text-white transition-colors">
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

                        <form>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap *</label>
                                    <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary" required>
                                </div>
                                <div>
                                    <label for="email" class="block text-gray-700 font-medium mb-2">Email *</label>
                                    <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary" required>
                                </div>
                                <div>
                                    <label for="phone" class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
                                    <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 rounded px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary">
                                </div>
                                <div>
                                    <label for="subject" class="block text-gray-700 font-medium mb-2">Subjek *</label>
                                    <select id="subject" name="subject" class="w-full border border-gray-300 rounded px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary appearance-none bg-white" required>
                                        <option value="" disabled selected>Pilih subjek</option>
                                        <option value="general">Pertanyaan Umum</option>
                                        <option value="property">Informasi Properti</option>
                                        <option value="appointment">Janji Temu</option>
                                        <option value="feedback">Umpan Balik</option>
                                        <option value="other">Lainnya</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="message" class="block text-gray-700 font-medium mb-2">Pesan *</label>
                                <textarea id="message" name="message" rows="6" class="w-full border border-gray-300 rounded px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary" required></textarea>
                            </div>

                            <div class="flex items-start mb-6">
                                <input type="checkbox" id="privacy-policy" name="privacy-policy" class="custom-checkbox mt-1" required>
                                <label for="privacy-policy" class="ml-3 text-gray-600">Saya menyetujui <a href="#" class="text-primary hover:underline">kebijakan privasi</a> dan penggunaan data pribadi untuk keperluan komunikasi.</label>
                            </div>

                            <button type="submit" class="w-full md:w-auto bg-primary hover:bg-primary/90 text-white py-3 px-6 rounded !rounded-button whitespace-nowrap transition-colors font-medium">
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666466960186!2d106.82596361513818!3d-6.175387995531605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d2e764b12d%3A0x3d2ad6e1e0e9bcc8!2sNational%20Monument!5e0!3m2!1sen!2sid!4v1623321351629!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
