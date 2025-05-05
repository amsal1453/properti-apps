<!-- Navbar Component -->
<nav class="navbar fixed top-0 left-0 w-full z-50 transition-all duration-300">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-2xl font-bold text-white">logo</a>

        <div class="hidden md:flex items-center space-x-8">
            <a href="{{ url('/home') }}" class="nav-link text-white hover:text-primary transition-colors">Beranda</a>
            <a href="{{ url('/properti') }}" class="nav-link text-white hover:text-primary transition-colors">Properti</a>
            <a href="{{ url('/artikel') }}" class="nav-link text-white hover:text-primary transition-colors">Artikel</a>
            <a href="{{ url('/kontak') }}" class="nav-link text-white hover:text-primary transition-colors">Kontak</a>
            <a href="{{ url('/contact') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-full transition-all">Hubungi Kami</a>
        </div>

        <!-- Mobile Menu Button -->
        <button type="button" class="md:hidden w-10 h-10 flex items-center justify-center text-white">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>

    <!-- Mobile Menu (Hidden by default) -->
    <div class="md:hidden hidden bg-white/90 backdrop-blur-md w-full absolute top-full left-0 shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex flex-col space-y-4">
                <a href="{{ url('/home') }}" class="text-gray-800 hover:text-blue-500 transition-colors">Beranda</a>
                <a href="{{ url('/properti') }}" class="text-gray-800 hover:text-blue-500 transition-colors">Properti</a>
                <a href="{{ url('/artikel') }}" class="text-gray-800 hover:text-blue-500 transition-colors">Artikel</a>
                <a href="{{ url('/kontak') }}" class="text-gray-800 hover:text-blue-500 transition-colors">Kontak</a>
                <a href="{{ url('/contact') }}" class="bg-blue-500 text-white px-4 py-2 rounded-full text-center hover:bg-blue-600 transition-all">Hubungi Kami</a>
            </div>
        </div>
    </div>
</nav>

<!-- Add required styles -->
<style>
.navbar {
    background-color: rgba(0, 0, 0, 0.2);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

.nav-link {
    position: relative;
}

.nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: -4px;
    left: 0;
    background-color: #fff;
    transition: width 0.3s ease;
}

.nav-link:hover::after {
    width: 100%;
}
</style>

<!-- Add required scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const menuButton = document.querySelector('.md\\:hidden button');
    const mobileMenu = document.querySelector('.md\\:hidden.hidden.bg-white\\/90');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
});
</script>

