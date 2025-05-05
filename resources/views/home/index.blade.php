@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <!-- New Hero Section -->
    <section id="home" class="relative h-screen flex items-center" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://readdy.ai/api/search-image?query=A%20luxurious%20modern%20mansion%20with%20a%20sleek%20architectural%20design%2C%20surrounded%20by%20lush%20landscaping%20and%20palm%20trees.%20The%20property%20features%20large%20glass%20windows%2C%20a%20beautiful%20infinity%20pool%2C%20and%20an%20elegant%20entrance.%20The%20scene%20is%20captured%20during%20golden%20hour%20with%20warm%20lighting%2C%20creating%20a%20sophisticated%20and%20high-end%20atmosphere.%20The%20left%20side%20of%20the%20image%20has%20a%20darker%20gradient%20to%20allow%20white%20text%20to%20be%20clearly%20visible.&width=1920&height=1080&seq=hero1&orientation=landscape'); background-size: cover; background-position: center;">
        <div class="container mx-auto px-6 w-full">
            <div class="max-w-2xl">
                <h1 class="text-5xl md:text-6xl font-bold text-white leading-tight mb-4">Temukan Hunian Mewah Impian Anda</h1>
                <p class="text-xl text-gray-200 mb-8">Kami menawarkan koleksi properti eksklusif dengan desain arsitektur terbaik dan lokasi strategis di seluruh Indonesia.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="bg-primary text-white px-8 py-3 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-all text-lg font-medium">Jelajahi Properti</button>
                    <button class="bg-transparent border-2 border-white text-white px-8 py-3 !rounded-button whitespace-nowrap hover:bg-white hover:text-secondary transition-all text-lg font-medium">Konsultasi Gratis</button>
                </div>
            </div>
        </div>
    </section>

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
                <!-- Property 1 -->
                <div class="property-card bg-white rounded-lg overflow-hidden shadow-lg transition-all duration-300">
                    <div class="relative">
                        <img src="https://readdy.ai/api/search-image?query=A%20luxurious%20modern%20villa%20with%20clean%20architectural%20lines%2C%20floor-to-ceiling%20windows%2C%20and%20a%20beautiful%20infinity%20pool%20overlooking%20a%20spectacular%20view.%20The%20property%20features%20elegant%20landscaping%20with%20tropical%20plants%2C%20a%20spacious%20terrace%2C%20and%20premium%20outdoor%20furniture.%20The%20image%20captures%20the%20property%20during%20sunset%20with%20warm%20golden%20lighting%20creating%20a%20sophisticated%20and%20high-end%20atmosphere.&width=600&height=400&seq=prop1&orientation=landscape" alt="Luxury Villa" class="w-full h-64 object-cover object-top">
                        <div class="absolute top-4 left-4 bg-primary text-white px-3 py-1 rounded-full text-sm font-medium">Dijual</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold">Villa Serenity</h3>
                            <p class="text-primary font-bold text-lg">Rp 12,5 Miliar</p>
                        </div>
                        <p class="text-gray-600 mb-4">Jl. Pantai Berawa No. 88, Canggu, Bali</p>
                        <div class="flex justify-between text-gray-500 border-t pt-4">
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2">
                                    <i class="ri-hotel-bed-line"></i>
                                </div>
                                <span>5 Kamar</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2">
                                    <i class="ri-home-4-line"></i>
                                </div>
                                <span>650 m²</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2">
                                    <i class="ri-car-line"></i>
                                </div>
                                <span>3 Garasi</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property 2 -->
                <div class="property-card bg-white rounded-lg overflow-hidden shadow-lg transition-all duration-300">
                    <div class="relative">
                        <img src="https://readdy.ai/api/search-image?query=A%20modern%20luxury%20apartment%20with%20an%20open-concept%20design%2C%20featuring%20floor-to-ceiling%20windows%20with%20panoramic%20city%20views.%20The%20interior%20showcases%20high-end%20finishes%2C%20contemporary%20furniture%2C%20and%20a%20sleek%20kitchen%20with%20marble%20countertops.%20The%20living%20space%20flows%20seamlessly%20to%20a%20private%20balcony%20with%20glass%20railings.%20The%20image%20captures%20the%20space%20during%20evening%20with%20city%20lights%20visible%2C%20creating%20a%20sophisticated%20urban%20luxury%20atmosphere.&width=600&height=400&seq=prop2&orientation=landscape" alt="Luxury Apartment" class="w-full h-64 object-cover object-top">
                        <div class="absolute top-4 left-4 bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-medium">Disewa</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold">Apartemen Sky Residence</h3>
                            <p class="text-primary font-bold text-lg">Rp 45 Juta/bulan</p>
                        </div>
                        <p class="text-gray-600 mb-4">Jl. Jend. Sudirman Kav. 52-53, SCBD, Jakarta</p>
                        <div class="flex justify-between text-gray-500 border-t pt-4">
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2">
                                    <i class="ri-hotel-bed-line"></i>
                                </div>
                                <span>3 Kamar</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2">
                                    <i class="ri-home-4-line"></i>
                                </div>
                                <span>210 m²</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2">
                                    <i class="ri-car-line"></i>
                                </div>
                                <span>2 Parkir</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property 3 -->
                <div class="property-card bg-white rounded-lg overflow-hidden shadow-lg transition-all duration-300">
                    <div class="relative">
                        <img src="https://readdy.ai/api/search-image?query=A%20luxurious%20modern%20mansion%20with%20elegant%20architecture%2C%20featuring%20a%20grand%20entrance%20with%20double%20doors%20and%20columns.%20The%20property%20showcases%20expansive%20windows%2C%20multiple%20balconies%2C%20and%20a%20perfectly%20manicured%20garden%20with%20a%20fountain.%20The%20exterior%20combines%20stone%20and%20glass%20elements%20with%20sophisticated%20lighting.%20The%20image%20captures%20the%20property%20during%20daytime%20with%20perfect%20blue%20skies%2C%20creating%20an%20atmosphere%20of%20exclusivity%20and%20opulence.&width=600&height=400&seq=prop3&orientation=landscape" alt="Luxury Mansion" class="w-full h-64 object-cover object-top">
                        <div class="absolute top-4 left-4 bg-primary text-white px-3 py-1 rounded-full text-sm font-medium">Dijual</div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold">Mansion Pondok Indah</h3>
                            <p class="text-primary font-bold text-lg">Rp 32 Miliar</p>
                        </div>
                        <p class="text-gray-600 mb-4">Jl. Metro Pondok Indah, Jakarta Selatan</p>
                        <div class="flex justify-between text-gray-500 border-t pt-4">
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2">
                                    <i class="ri-hotel-bed-line"></i>
                                </div>
                                <span>7 Kamar</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2">
                                    <i class="ri-home-4-line"></i>
                                </div>
                                <span>1200 m²</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2">
                                    <i class="ri-car-line"></i>
                                </div>
                                <span>5 Garasi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <button class="bg-white border border-primary text-primary px-8 py-3 !rounded-button whitespace-nowrap hover:bg-primary hover:text-white transition-all font-medium">Lihat Semua Properti</button>
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
                <!-- Article 1 -->
                <div class="article-card bg-white rounded-lg overflow-hidden shadow-lg transition-all duration-300">
                    <img src="https://readdy.ai/api/search-image?query=A%20sophisticated%20real%20estate%20investment%20concept%20image%20showing%20modern%20luxury%20buildings%2C%20financial%20charts%20and%20graphs%2C%20and%20investment%20documents.%20The%20scene%20includes%20elements%20like%20a%20calculator%2C%20property%20blueprints%2C%20and%20a%20tablet%20displaying%20real%20estate%20analytics.%20The%20composition%20has%20a%20professional%20business%20atmosphere%20with%20a%20clean%2C%20modern%20aesthetic%20perfect%20for%20a%20real%20estate%20investment%20article.&width=600&height=400&seq=art1&orientation=landscape" alt="Investment Tips" class="w-full h-56 object-cover object-top">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Investasi</span>
                            <span class="text-gray-400 text-sm ml-4">29 April 2025</span>
                            <span class="text-gray-400 text-sm ml-4">5 menit baca</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">10 Tips Investasi Properti Mewah yang Menguntungkan</h3>
                        <p class="text-gray-600 mb-4">Panduan lengkap untuk memaksimalkan return investasi pada properti premium di lokasi strategis.</p>
                        <a href="#" class="text-primary font-medium inline-flex items-center hover:underline">
                            Baca Selengkapnya
                            <div class="w-5 h-5 flex items-center justify-center ml-1">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Article 2 -->
                <div class="article-card bg-white rounded-lg overflow-hidden shadow-lg transition-all duration-300">
                    <img src="https://readdy.ai/api/search-image?query=A%20luxurious%20interior%20design%20concept%20showing%20an%20elegant%20living%20room%20with%20high%20ceilings%2C%20floor-to-ceiling%20windows%20with%20spectacular%20views%2C%20designer%20furniture%2C%20and%20sophisticated%20decor%20elements.%20The%20space%20features%20a%20harmonious%20color%20palette%20with%20neutral%20tones%20accented%20by%20gold%20details%2C%20custom%20lighting%20fixtures%2C%20and%20premium%20materials%20like%20marble%20and%20wood.%20The%20composition%20has%20a%20clean%2C%20modern%20aesthetic%20perfect%20for%20a%20luxury%20interior%20design%20article.&width=600&height=400&seq=art2&orientation=landscape" alt="Interior Design" class="w-full h-56 object-cover object-top">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">Desain Interior</span>
                            <span class="text-gray-400 text-sm ml-4">25 April 2025</span>
                            <span class="text-gray-400 text-sm ml-4">7 menit baca</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Tren Desain Interior Mewah 2025 yang Wajib Anda Ketahui</h3>
                        <p class="text-gray-600 mb-4">Eksplorasi tren desain terkini yang menggabungkan kemewahan, kenyamanan, dan keberlanjutan.</p>
                        <a href="#" class="text-primary font-medium inline-flex items-center hover:underline">
                            Baca Selengkapnya
                            <div class="w-5 h-5 flex items-center justify-center ml-1">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Article 3 -->
                <div class="article-card bg-white rounded-lg overflow-hidden shadow-lg transition-all duration-300">
                    <img src="https://readdy.ai/api/search-image?query=A%20beautiful%20Bali%20luxury%20villa%20scene%20showing%20a%20stunning%20private%20villa%20with%20traditional%20Balinese%20architectural%20elements%20blended%20with%20modern%20luxury.%20The%20image%20features%20an%20infinity%20pool%20overlooking%20lush%20tropical%20gardens%2C%20open-air%20living%20spaces%20with%20elegant%20furnishings%2C%20and%20natural%20stone%20elements.%20The%20scene%20is%20captured%20during%20sunset%20with%20warm%20golden%20lighting%20creating%20a%20serene%20and%20exclusive%20atmosphere%20perfect%20for%20a%20Bali%20luxury%20property%20article.&width=600&height=400&seq=art3&orientation=landscape" alt="Bali Property" class="w-full h-56 object-cover object-top">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Destinasi</span>
                            <span class="text-gray-400 text-sm ml-4">20 April 2025</span>
                            <span class="text-gray-400 text-sm ml-4">6 menit baca</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Mengapa Bali Tetap Menjadi Surga Investasi Properti</h3>
                        <p class="text-gray-600 mb-4">Analisis mendalam tentang daya tarik Bali sebagai lokasi investasi properti premium yang berkelanjutan.</p>
                        <a href="#" class="text-primary font-medium inline-flex items-center hover:underline">
                            Baca Selengkapnya
                            <div class="w-5 h-5 flex items-center justify-center ml-1">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <button class="bg-white border border-primary text-primary px-8 py-3 !rounded-button whitespace-nowrap hover:bg-primary hover:text-white transition-all font-medium">Lihat Semua Artikel</button>
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
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                                <input type="text" id="name" class="w-full bg-white border border-gray-200 rounded px-4 py-3 focus:outline-none focus:border-primary" placeholder="Masukkan nama lengkap">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                <input type="email" id="email" class="w-full bg-white border border-gray-200 rounded px-4 py-3 focus:outline-none focus:border-primary" placeholder="Masukkan email">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="phone" class="block text-gray-700 font-medium mb-2">Nomor Telepon</label>
                            <input type="tel" id="phone" class="w-full bg-white border border-gray-200 rounded px-4 py-3 focus:outline-none focus:border-primary" placeholder="Masukkan nomor telepon">
                        </div>

                        <div class="mb-6">
                            <label for="interest" class="block text-gray-700 font-medium mb-2">Saya Tertarik Dengan</label>
                            <div class="relative">
                                <select id="interest" class="w-full bg-white border border-gray-200 rounded px-4 py-3 appearance-none focus:outline-none focus:border-primary pr-8">
                                    <option>Pilih Kategori</option>
                                    <option>Membeli Properti</option>
                                    <option>Menjual Properti</option>
                                    <option>Menyewa Properti</option>
                                    <option>Investasi Properti</option>
                                    <option>Konsultasi</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                    <i class="ri-arrow-down-s-line text-gray-500"></i>
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                            <textarea id="message" rows="4" class="w-full bg-white border border-gray-200 rounded px-4 py-3 focus:outline-none focus:border-primary" placeholder="Tuliskan pesan atau pertanyaan Anda"></textarea>
                        </div>

                        <div class="mb-6 flex items-start">
                            <input type="checkbox" id="agree" class="custom-checkbox mt-1">
                            <label for="agree" class="ml-3 text-gray-600 text-sm">Saya setuju untuk menerima informasi dan penawaran terkait properti melalui email dan telepon.</label>
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

    </style>
@endsection
