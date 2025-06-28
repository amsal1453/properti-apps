@extends('layouts.app')

@section('title', 'Artikel')

@section('content')
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">Artikel & Tips Properti</h1>

        <div class="flex flex-col md:flex-row gap-4 mb-8">
            <div class="relative flex-1">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <div class="w-5 h-5 flex items-center justify-center text-gray-400">
                        <i class="ri-search-line"></i>
                    </div>
                </div>
                <input type="text" class="w-full pl-10 pr-4 py-3 bg-white border border-gray-200 rounded shadow-sm" placeholder="Cari artikel..." />
            </div>

            <div class="relative">
                <button id="categoryButton" class="flex items-center justify-between w-full md:w-48 px-4 py-3 bg-white border border-gray-200 rounded shadow-sm !rounded-button whitespace-nowrap">
                    <span>Semua Kategori</span>
                    <div class="w-5 h-5 flex items-center justify-center ml-2">
                        <i class="ri-arrow-down-s-line"></i>
                    </div>
                </button>

                <div id="categoryDropdown" class="hidden absolute z-10 mt-1 w-full bg-white border border-gray-200 rounded shadow-lg">
                    <div class="py-1">
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Semua Kategori</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Tips Properti</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Investasi</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Interior</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Arsitektur</a>
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Berita Properti</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Article 1 -->
            <article class="bg-white rounded-md shadow-sm overflow-hidden">
                <div class="aspect-[16/9] overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=modern%20minimalist%20living%20room%20with%20large%20windows%2C%20natural%20light%2C%20wooden%20floors%2C%20and%20simple%20furniture%2C%20professional%20real%20estate%20photography%20style&width=600&height=338&seq=1&orientation=landscape" alt="Tips Memilih Lokasi Properti" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-5">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <div class="w-4 h-4 flex items-center justify-center mr-1">
                            <i class="ri-calendar-line"></i>
                        </div>
                        <span>6 Mei 2025</span>
                        <span class="mx-2">•</span>
                        <span>Tips Properti</span>
                    </div>
                    <h2 class="text-xl font-semibold mb-2 text-gray-900">Tips Memilih Lokasi Properti yang Strategis</h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">Lokasi menjadi faktor penting dalam investasi properti. Artikel ini membahas bagaimana memilih lokasi strategis yang memberikan nilai tambah dan potensi kenaikan harga di masa depan.</p>
                    <a href="#" class="inline-flex items-center text-primary font-medium">
                        Baca Selengkapnya
                        <div class="w-4 h-4 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="bg-white rounded-md shadow-sm overflow-hidden">
                <div class="aspect-[16/9] overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=modern%20house%20exterior%20with%20beautiful%20garden%20and%20landscape%20design%2C%20professional%20real%20estate%20photography%20with%20natural%20lighting&width=600&height=338&seq=2&orientation=landscape" alt="Tren Desain Rumah" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-5">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <div class="w-4 h-4 flex items-center justify-center mr-1">
                            <i class="ri-calendar-line"></i>
                        </div>
                        <span>2 Mei 2025</span>
                        <span class="mx-2">•</span>
                        <span>Interior</span>
                    </div>
                    <h2 class="text-xl font-semibold mb-2 text-gray-900">7 Tren Desain Rumah yang Populer di Tahun 2025</h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">Desain rumah terus berkembang mengikuti kebutuhan dan gaya hidup. Simak tren desain rumah terbaru yang populer di tahun 2025 untuk inspirasi rumah impian Anda.</p>
                    <a href="#" class="inline-flex items-center text-primary font-medium">
                        Baca Selengkapnya
                        <div class="w-4 h-4 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="bg-white rounded-md shadow-sm overflow-hidden">
                <div class="aspect-[16/9] overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=person%20signing%20real%20estate%20contract%20documents%20with%20calculator%20and%20house%20model%20on%20desk%2C%20professional%20business%20photography&width=600&height=338&seq=3&orientation=landscape" alt="Investasi Properti" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-5">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <div class="w-4 h-4 flex items-center justify-center mr-1">
                            <i class="ri-calendar-line"></i>
                        </div>
                        <span>28 April 2025</span>
                        <span class="mx-2">•</span>
                        <span>Investasi</span>
                    </div>
                    <h2 class="text-xl font-semibold mb-2 text-gray-900">Panduan Lengkap Investasi Properti untuk Pemula</h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">Investasi properti bisa menjadi pilihan menjanjikan untuk masa depan finansial Anda. Artikel ini membahas langkah-langkah awal berinvestasi properti bagi pemula.</p>
                    <a href="#" class="inline-flex items-center text-primary font-medium">
                        Baca Selengkapnya
                        <div class="w-4 h-4 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </article>

            <!-- Article 4 -->
            <article class="bg-white rounded-md shadow-sm overflow-hidden">
                <div class="aspect-[16/9] overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=modern%20kitchen%20interior%20with%20island%2C%20minimalist%20design%2C%20clean%20lines%2C%20and%20high-end%20appliances%2C%20professional%20interior%20photography&width=600&height=338&seq=4&orientation=landscape" alt="Renovasi Dapur" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-5">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <div class="w-4 h-4 flex items-center justify-center mr-1">
                            <i class="ri-calendar-line"></i>
                        </div>
                        <span>25 April 2025</span>
                        <span class="mx-2">•</span>
                        <span>Interior</span>
                    </div>
                    <h2 class="text-xl font-semibold mb-2 text-gray-900">5 Ide Renovasi Dapur yang Hemat Biaya</h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">Renovasi dapur tidak harus mahal. Simak ide-ide renovasi dapur yang bisa menyulap dapur Anda menjadi lebih modern dan fungsional dengan biaya terjangkau.</p>
                    <a href="#" class="inline-flex items-center text-primary font-medium">
                        Baca Selengkapnya
                        <div class="w-4 h-4 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </article>

            <!-- Article 5 -->
            <article class="bg-white rounded-md shadow-sm overflow-hidden">
                <div class="aspect-[16/9] overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=urban%20apartment%20buildings%20with%20modern%20architecture%2C%20city%20skyline%20in%20background%2C%20professional%20real%20estate%20photography%20with%20clear%20blue%20sky&width=600&height=338&seq=5&orientation=landscape" alt="Apartemen vs Rumah" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-5">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <div class="w-4 h-4 flex items-center justify-center mr-1">
                            <i class="ri-calendar-line"></i>
                        </div>
                        <span>20 April 2025</span>
                        <span class="mx-2">•</span>
                        <span>Tips Properti</span>
                    </div>
                    <h2 class="text-xl font-semibold mb-2 text-gray-900">Apartemen vs Rumah: Mana yang Lebih Menguntungkan?</h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">Bingung memilih antara apartemen atau rumah? Artikel ini menganalisis kelebihan dan kekurangan kedua jenis hunian untuk membantu Anda membuat keputusan terbaik.</p>
                    <a href="#" class="inline-flex items-center text-primary font-medium">
                        Baca Selengkapnya
                        <div class="w-4 h-4 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </article>

            <!-- Article 6 -->
            <article class="bg-white rounded-md shadow-sm overflow-hidden">
                <div class="aspect-[16/9] overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=person%20reviewing%20mortgage%20documents%20with%20calculator%20and%20laptop%2C%20financial%20planning%20for%20home%20purchase%2C%20professional%20business%20photography&width=600&height=338&seq=6&orientation=landscape" alt="KPR" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-5">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <div class="w-4 h-4 flex items-center justify-center mr-1">
                            <i class="ri-calendar-line"></i>
                        </div>
                        <span>15 April 2025</span>
                        <span class="mx-2">•</span>
                        <span>Investasi</span>
                    </div>
                    <h2 class="text-xl font-semibold mb-2 text-gray-900">Cara Mendapatkan KPR dengan Bunga Rendah</h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">Kredit Pemilikan Rumah (KPR) menjadi solusi bagi banyak orang untuk memiliki hunian. Pelajari tips mendapatkan KPR dengan bunga kompetitif dan syarat yang menguntungkan.</p>
                    <a href="#" class="inline-flex items-center text-primary font-medium">
                        Baca Selengkapnya
                        <div class="w-4 h-4 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </article>

            <!-- Article 7 -->
            <article class="bg-white rounded-md shadow-sm overflow-hidden">
                <div class="aspect-[16/9] overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=small%20apartment%20living%20room%20with%20smart%20space-saving%20furniture%2C%20bright%20and%20airy%2C%20professional%20interior%20photography&width=600&height=338&seq=7&orientation=landscape" alt="Rumah Mungil" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-5">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <div class="w-4 h-4 flex items-center justify-center mr-1">
                            <i class="ri-calendar-line"></i>
                        </div>
                        <span>10 April 2025</span>
                        <span class="mx-2">•</span>
                        <span>Interior</span>
                    </div>
                    <h2 class="text-xl font-semibold mb-2 text-gray-900">Desain Rumah Mungil yang Tetap Nyaman dan Fungsional</h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">Rumah mungil bisa tetap nyaman dan fungsional dengan desain yang tepat. Temukan ide-ide kreatif untuk memaksimalkan ruang terbatas tanpa mengorbankan kenyamanan.</p>
                    <a href="#" class="inline-flex items-center text-primary font-medium">
                        Baca Selengkapnya
                        <div class="w-4 h-4 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </article>

            <!-- Article 8 -->
            <article class="bg-white rounded-md shadow-sm overflow-hidden">
                <div class="aspect-[16/9] overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=modern%20house%20with%20solar%20panels%20on%20roof%2C%20green%20landscaping%2C%20and%20sustainable%20features%2C%20professional%20real%20estate%20photography&width=600&height=338&seq=8&orientation=landscape" alt="Rumah Ramah Lingkungan" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-5">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <div class="w-4 h-4 flex items-center justify-center mr-1">
                            <i class="ri-calendar-line"></i>
                        </div>
                        <span>5 April 2025</span>
                        <span class="mx-2">•</span>
                        <span>Arsitektur</span>
                    </div>
                    <h2 class="text-xl font-semibold mb-2 text-gray-900">Rumah Ramah Lingkungan: Investasi Masa Depan</h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">Rumah ramah lingkungan tidak hanya baik untuk planet, tetapi juga untuk dompet Anda. Pelajari manfaat dan cara menerapkan konsep eco-friendly dalam hunian Anda.</p>
                    <a href="#" class="inline-flex items-center text-primary font-medium">
                        Baca Selengkapnya
                        <div class="w-4 h-4 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </article>

            <!-- Article 9 -->
            <article class="bg-white rounded-md shadow-sm overflow-hidden">
                <div class="aspect-[16/9] overflow-hidden">
                    <img src="https://readdy.ai/api/search-image?query=real%20estate%20agent%20showing%20property%20to%20young%20couple%2C%20professional%20real%20estate%20photography%20with%20bright%20interior&width=600&height=338&seq=9&orientation=landscape" alt="Agen Properti" class="w-full h-full object-cover object-top">
                </div>
                <div class="p-5">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <div class="w-4 h-4 flex items-center justify-center mr-1">
                            <i class="ri-calendar-line"></i>
                        </div>
                        <span>1 April 2025</span>
                        <span class="mx-2">•</span>
                        <span>Tips Properti</span>
                    </div>
                    <h2 class="text-xl font-semibold mb-2 text-gray-900">Cara Memilih Agen Properti yang Terpercaya</h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">Agen properti yang tepat dapat memudahkan proses jual beli properti. Artikel ini membahas kriteria dan tips memilih agen properti yang profesional dan terpercaya.</p>
                    <a href="#" class="inline-flex items-center text-primary font-medium">
                        Baca Selengkapnya
                        <div class="w-4 h-4 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </article>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-12">
            <nav class="flex items-center space-x-1">
                <a href="#" class="px-3 py-2 border border-gray-300 rounded-md text-gray-500 hover:bg-gray-50 !rounded-button whitespace-nowrap">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <i class="ri-arrow-left-s-line"></i>
                    </div>
                </a>
                <a href="#" class="px-4 py-2 border border-primary bg-primary text-white rounded-md !rounded-button whitespace-nowrap">1</a>
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 !rounded-button whitespace-nowrap">2</a>
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 !rounded-button whitespace-nowrap">3</a>
                <span class="px-2 text-gray-500">...</span>
                <a href="#" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 !rounded-button whitespace-nowrap">8</a>
                <a href="#" class="px-3 py-2 border border-gray-300 rounded-md text-gray-500 hover:bg-gray-50 !rounded-button whitespace-nowrap">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                </a>
            </nav>\
            
        </div>
    </main>
@endsection
