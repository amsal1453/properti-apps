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
            @forelse($artikel as $article)
            <!-- Article Card -->
            <article class="bg-white rounded-md shadow-sm overflow-hidden">
                <div class="aspect-[16/9] overflow-hidden">
                    @if($article->gambar)
                        <img src="{{ asset('storage/' . $article->gambar) }}" alt="{{ $article->judul }}" class="w-full h-full object-cover object-top">
                    @else
                        <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                            <i class="ri-image-line text-4xl text-gray-400"></i>
                        </div>
                    @endif
                </div>
                <div class="p-5">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <div class="w-4 h-4 flex items-center justify-center mr-1">
                            <i class="ri-calendar-line"></i>
                        </div>
                        <span>{{ \Carbon\Carbon::parse($article->tanggal_posting)->format('j F Y') }}</span>
                        <span class="mx-2">•</span>
                        <span>{{ ucfirst($article->kategori) }}</span>
                    </div>
                    <h2 class="text-xl font-semibold mb-2 text-gray-900">{{ $article->judul }}</h2>
                    <p class="text-gray-600 mb-4 line-clamp-3">{{ $article->excerpt ?? \Illuminate\Support\Str::limit(strip_tags($article->konten), 150) }}</p>
                    <a href="{{ route('artikel.show', $article->slug) }}" class="inline-flex items-center text-samudra-red font-medium">
                        Baca Selengkapnya
                        <div class="w-4 h-4 flex items-center justify-center ml-1">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </a>
                </div>
            </article>
            @empty
            <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-10">
                <p class="text-gray-500">Belum ada artikel yang ditampilkan. Silakan cek kembali nanti.</p>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-12">
            {{ $artikel->links() }}
        </div>
    </main>
@endsection

@push('scripts')
<script>
    // Toggle category dropdown
    document.addEventListener('DOMContentLoaded', function() {
        const categoryButton = document.getElementById('categoryButton');
        const categoryDropdown = document.getElementById('categoryDropdown');

        if (categoryButton && categoryDropdown) {
            categoryButton.addEventListener('click', function() {
                categoryDropdown.classList.toggle('hidden');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(event) {
                if (!categoryButton.contains(event.target) && !categoryDropdown.contains(event.target)) {
                    categoryDropdown.classList.add('hidden');
                }
            });
        }
    });
</script>
@endpush
