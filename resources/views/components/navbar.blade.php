<!-- Navbar Component -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md"
     x-data="{ isOpen: false }"
     x-init="window.addEventListener('scroll', () => { isScrolled = window.scrollY > 20 })">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo Section -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center">
                    <div class="flex items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="PT. Samudra Indah Properti" class="h-12 w-auto">
                        <div class="ml-3">
                            <h1 class="text-xl font-bold text-samudra-red">PT. Samudra Indah</h1>
                            <p class="text-sm text-gray-600">Properti</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ url('/') }}" class="nav-link flex items-center space-x-2 text-gray-700 hover:text-samudra-red font-medium">
                    <i class="fas fa-home text-sm"></i>
                    <span>Beranda</span>
                </a>
                <a href="{{ url('/properti') }}" class="nav-link flex items-center space-x-2 text-gray-700 hover:text-samudra-red font-medium">
                    <i class="fas fa-building text-sm"></i>
                    <span>Properti</span>
                </a>
                <a href="{{ url('/artikel') }}" class="nav-link flex items-center space-x-2 text-gray-700 hover:text-samudra-red font-medium">
                    <i class="fas fa-newspaper text-sm"></i>
                    <span>Artikel</span>
                </a>
                <a href="{{ url('/kontak') }}" class="nav-link flex items-center space-x-2 text-gray-700 hover:text-samudra-red font-medium">
                    <i class="fas fa-phone text-sm"></i>
                    <span>Kontak</span>
                </a>

                <!-- Desktop CTA Button -->
                <a href="{{ url('/kontak') }}" class="bg-samudra-red hover:bg-samudra-red-dark text-white px-6 py-2 rounded-full font-medium transition-colors">
                    Hubungi Kami
                </a>
            </div>

            <!-- Mobile Menu Toggle -->
            <button
                @click="isOpen = !isOpen"
                class="lg:hidden w-10 h-10 flex items-center justify-center text-samudra-red"
                aria-label="Toggle mobile menu"
            >
                <i class="fas" :class="isOpen ? 'fa-times' : 'fa-bars'"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div
        class="lg:hidden bg-white border-t"
        :class="isOpen ? 'block' : 'hidden'"
    >
        <div class="px-4 py-4 space-y-3">
            <a href="{{ url('/') }}" @click="isOpen = false" class="flex items-center space-x-3 text-gray-700 hover:text-samudra-red font-medium py-2">
                <i class="fas fa-home text-base w-5"></i>
                <span>Beranda</span>
            </a>
            <a href="{{ url('/properti') }}" @click="isOpen = false" class="flex items-center space-x-3 text-gray-700 hover:text-samudra-red font-medium py-2">
                <i class="fas fa-building text-base w-5"></i>
                <span>Properti</span>
            </a>
            <a href="{{ url('/artikel') }}" @click="isOpen = false" class="flex items-center space-x-3 text-gray-700 hover:text-samudra-red font-medium py-2">
                <i class="fas fa-newspaper text-base w-5"></i>
                <span>Artikel</span>
            </a>
            <a href="{{ url('/kontak') }}" @click="isOpen = false" class="flex items-center space-x-3 text-gray-700 hover:text-samudra-red font-medium py-2">
                <i class="fas fa-phone text-base w-5"></i>
                <span>Kontak</span>
            </a>

            <!-- Mobile CTA Button -->
            <div class="pt-3">
                <a href="{{ url('/kontak') }}" @click="isOpen = false" class="block w-full bg-samudra-red hover:bg-samudra-red-dark text-white text-center py-2 rounded-full font-medium">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Add required styles -->
<style>
:root {
    --samudra-red: #E31E24;
    --samudra-red-dark: #c41a1f;
}

.text-samudra-red {
    color: var(--samudra-red);
}

.bg-samudra-red {
    background-color: var(--samudra-red);
}

.hover\:bg-samudra-red-dark:hover {
    background-color: var(--samudra-red-dark);
}

.nav-link {
    position: relative;
    padding: 0.5rem 0;
}

.nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: var(--samudra-red);
    transition: width 0.3s ease;
}

.nav-link:hover::after {
    width: 100%;
}

.transition-colors {
    transition: background-color 0.3s ease, color 0.3s ease;
}
</style>

<!-- Add Alpine.js for interactivity -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

