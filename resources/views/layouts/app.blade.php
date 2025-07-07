<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - PT. Samudra Indah Properti</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        :root {
            --samudra-red: #E31E24;
            --samudra-red-dark: #c41a1f;
            --primary: var(--samudra-red);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    {{-- Include Navbar Component --}}
    @include('components.navbar')

    {{-- Content --}}
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white text-gray-600 pt-16 pb-8 ">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center mb-6">
                        <img src="{{ asset('images/logo.png') }}" alt="PT. Samudra Indah Properti" class="h-12 w-auto">
                        <div class="ml-3">
                            <h3 class="text-xl font-bold text-samudra-red">PT. Samudra Indah</h3>
                            <p class="text-sm text-gray-600">Properti</p>
                        </div>
                    </div>
                    <p class="text-gray-500 mb-6">Kami adalah agen properti terpercaya yang berdedikasi untuk membantu Anda menemukan properti impian Anda di Aceh.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 text-samudra-red rounded-full hover:bg-samudra-red hover:text-white transition-colors">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 text-samudra-red rounded-full hover:bg-samudra-red hover:text-white transition-colors">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 text-samudra-red rounded-full hover:bg-samudra-red hover:text-white transition-colors">
                            <i class="ri-whatsapp-fill"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Link Cepat</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ url('/') }}" class="hover:text-samudra-red transition-colors">Beranda</a></li>
                        <li><a href="{{ url('/properti') }}" class="hover:text-samudra-red transition-colors">Properti</a></li>
                        <li><a href="{{ url('/artikel') }}" class="hover:text-samudra-red transition-colors">Artikel</a></li>
                        <li><a href="{{ url('/kontak') }}" class="hover:text-samudra-red transition-colors">Kontak</a></li>
                        <li><a href="#" class="hover:text-samudra-red transition-colors">Tentang Kami</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Kontak</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <i class="ri-map-pin-2-fill text-samudra-red mt-1"></i>
                            <span>Jl. Tgk Chik Ditiro No.88, Peuniti, Kec. Baiturrahman, Kota Banda Aceh</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="ri-phone-fill text-samudra-red"></i>
                            <span>+62 852-7087-7887</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="ri-mail-fill text-samudra-red"></i>
                            <span>info@samudraindahproperti.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-100 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm mb-4 md:mb-0">&copy; 2024 PT. Samudra Indah Properti. All rights reserved.</p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-sm hover:text-samudra-red transition-colors">Syarat & Ketentuan</a>
                        <a href="#" class="text-sm hover:text-samudra-red transition-colors">Kebijakan Privasi</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Swiper.js JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Stack for page-specific scripts -->
    @stack('scripts')
</body>
</html>
