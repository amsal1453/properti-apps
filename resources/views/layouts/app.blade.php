<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - PropertiKu</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    {{-- Include Navbar Component --}}
    @include('components.navbar')

    {{-- Content --}}
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <div>
                    <a href="#" class="text-3xl font-['Pacifico'] text-white mb-6 inline-block">logo</a>
                    <p class="text-gray-400 mb-6">Kami adalah agen properti premium yang berdedikasi untuk membantu Anda menemukan hunian mewah yang sesuai dengan gaya hidup eksklusif Anda.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-full hover:bg-primary transition-colors">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-full hover:bg-primary transition-colors">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-full hover:bg-primary transition-colors">
                            <i class="ri-twitter-x-fill"></i>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-800 rounded-full hover:bg-primary transition-colors">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-6">Link Cepat</h3>
                    <ul class="space-y-3">
                        <li><a href="#home" class="text-gray-400 hover:text-primary transition-colors">Beranda</a></li>
                        <li><a href="#properties" class="text-gray-400 hover:text-primary transition-colors">Properti</a></li>
                        <li><a href="#articles" class="text-gray-400 hover:text-primary transition-colors">Artikel</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-primary transition-colors">Kontak</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Karir</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-6">Properti</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Rumah Mewah</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Apartemen</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Villa</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Penthouse</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Properti Komersial</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary transition-colors">Tanah</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-6">Newsletter</h3>
                    <p class="text-gray-400 mb-6">Dapatkan informasi terbaru tentang properti eksklusif dan penawaran spesial.</p>
                    <form>
                        <div class="flex mb-4">
                            <input type="email" placeholder="Email Anda" class="bg-gray-800 border-none text-white px-4 py-3 rounded-l-lg w-full focus:outline-none focus:ring-2 focus:ring-primary">
                            <button type="submit" class="bg-primary text-white px-4 py-3 !rounded-r-lg whitespace-nowrap hover:bg-opacity-90 transition-all">Subscribe</button>
                        </div>
                        <div class="flex items-start">
                            <input type="checkbox" id="newsletter-agree" class="custom-checkbox mt-1">
                            <label for="newsletter-agree" class="ml-3 text-gray-400 text-sm">Saya setuju menerima newsletter dan penawaran melalui email.</label>
                        </div>
                    </form>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm mb-4 md:mb-0">&copy; 2025 Luxe Estate. All rights reserved.</p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-primary text-sm transition-colors">Syarat & Ketentuan</a>
                        <a href="#" class="text-gray-400 hover:text-primary text-sm transition-colors">Kebijakan Privasi</a>
                        <a href="#" class="text-gray-400 hover:text-primary text-sm transition-colors">Peta Situs</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
