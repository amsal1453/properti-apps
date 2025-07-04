@extends('layouts.app')

@section('title', $artikel->judul)

@section('content')
    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12 mt-10">
        <div class="mb-8">
            <a href="{{ route('artikel.index') }}" class="inline-flex items-center text-gray-600 hover:text-samudra-red">
                <div class="w-5 h-5 flex items-center justify-center mr-1">
                    <i class="ri-arrow-left-line"></i>
                </div>
                Kembali ke Artikel
            </a>
        </div>

        <article class="bg-white rounded-xl shadow-sm overflow-hidden">
            @if ($artikel->gambar)
                <div class="aspect-video w-full overflow-hidden">
                    <img src="{{ asset('storage/' . $artikel->gambar) }}" alt="{{ $artikel->judul }}"
                        class="w-full h-full object-cover">
                </div>
            @endif

            <div class="p-8">
                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <div class="w-4 h-4 flex items-center justify-center mr-1">
                        <i class="ri-calendar-line"></i>
                    </div>
                    <span>{{ \Carbon\Carbon::parse($artikel->tanggal_posting)->format('j F Y') }}</span>
                    <span class="mx-2">•</span>
                    <span>{{ ucfirst($artikel->kategori) }}</span>
                    @if ($artikel->admin)
                        <span class="mx-2">•</span>
                        <span>Oleh: {{ $artikel->admin->name }}</span>
                    @endif
                </div>

                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">{{ $artikel->judul }}</h1>

                <div class="prose prose-lg max-w-none">
                    {!! $artikel->konten !!}
                </div>

                <div class="mt-12 pt-6 border-t border-gray-200">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="flex items-center space-x-4 mb-4 sm:mb-0">
                            <span class="text-gray-600">Bagikan artikel:</span>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                target="_blank" rel="noopener noreferrer"
                                class="w-8 h-8 flex items-center justify-center bg-blue-600 text-white rounded-full hover:bg-blue-700">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($artikel->judul) }}"
                                target="_blank" rel="noopener noreferrer"
                                class="w-8 h-8 flex items-center justify-center bg-sky-500 text-white rounded-full hover:bg-sky-600">
                                <i class="ri-twitter-x-fill"></i>
                            </a>
                            <a href="https://wa.me/?text={{ urlencode($artikel->judul . ' ' . url()->current()) }}"
                                target="_blank" rel="noopener noreferrer"
                                class="w-8 h-8 flex items-center justify-center bg-green-500 text-white rounded-full hover:bg-green-600">
                                <i class="ri-whatsapp-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
@endsection
