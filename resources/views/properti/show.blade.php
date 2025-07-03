@extends('layouts.app')

@section('title', $property->nama_properti)

@section('content')
<main class="container mx-auto px-4 pt-28 pb-20">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Property Images and Info -->
        <div class="lg:col-span-2">
            <!-- Property Images -->
            <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
                <div class="relative">
                    @if($property->hasMedia('gambar_properti'))
                        <!-- Main Image Container -->
                        <div class="relative">
                            @foreach($property->getMedia('gambar_properti') as $index => $media)
                                <div class="property-slide w-full h-96" data-index="{{ $index }}" style="{{ $index > 0 ? 'display: none;' : '' }}">
                                    <img src="{{ $media->getUrl() }}" alt="{{ $property->nama_properti }}" class="w-full h-full object-cover">
                                </div>
                            @endforeach

                            <!-- Navigation Arrows -->
                            @if($property->getMedia('gambar_properti')->count() > 1)
                            <div class="absolute inset-0 flex items-center justify-between px-4">
                                <button class="bg-white/80 hover:bg-white text-gray-800 w-10 h-10 rounded-full flex items-center justify-center shadow-lg prev-slide">
                                    <i class="ri-arrow-left-s-line text-2xl"></i>
                                </button>
                                <button class="bg-white/80 hover:bg-white text-gray-800 w-10 h-10 rounded-full flex items-center justify-center shadow-lg next-slide">
                                    <i class="ri-arrow-right-s-line text-2xl"></i>
                                </button>
                            </div>
                            @endif

                            <!-- Counter for Images -->
                            @if($property->getMedia('gambar_properti')->count() > 1)
                            <div class="absolute bottom-4 right-4 bg-black/60 text-white px-3 py-1 rounded-full text-sm image-counter">
                                <span class="current-slide">1</span>/<span>{{ $property->getMedia('gambar_properti')->count() }}</span>
                            </div>
                            @endif

                        </div>
                        <span class="absolute top-4 left-4 bg-primary text-white px-3 py-1 rounded-full text-sm font-medium">
                            {{ ucfirst($property->status) }}
                        </span>
                    @else
                        <div class="w-full h-96 bg-gray-200 flex items-center justify-center">
                            <i class="ri-image-line text-6xl text-gray-400"></i>
                        </div>
                    @endif
                </div>

                <!-- Property Gallery -->
                @if($property->getMedia('gambar_properti')->count() > 1)
                <div class="p-4 grid grid-cols-5 gap-2">
                    @foreach($property->getMedia('gambar_properti')->take(5) as $index => $media)
                        <img src="{{ $media->getUrl('thumb') }}" alt="{{ $property->nama_properti }}" class="w-full h-20 object-cover rounded cursor-pointer thumbnail" data-index="{{ $index }}">
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Property Details -->
            <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
                <div class="p-6">
                    <h1 class="text-2xl font-bold text-gray-900 mb-2">{{ $property->nama_properti }}</h1>
                    <div class="flex items-center text-gray-600 mb-4">
                        <div class="w-5 h-5 flex items-center justify-center mr-2">
                            <i class="ri-map-pin-line"></i>
                        </div>
                        <span>{{ $property->lokasi }}</span>
                    </div>
                    <div class="flex flex-wrap items-center mb-6">
                        <span class="text-primary text-3xl font-bold mr-2">
                            Rp {{ number_format($property->harga, 0, ',', '.') }}
                        </span>
                        <span class="text-gray-700">
                            @if($property->satuan_harga == 'juta')
                                Juta
                            @elseif($property->satuan_harga == 'miliar')
                                Miliar
                            @elseif($property->satuan_harga == 'perbulan')
                                /bulan
                            @elseif($property->satuan_harga == 'pertahun')
                                /tahun
                            @endif
                        </span>
                    </div>

                    <!-- Property Features -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8 pb-8 border-b border-gray-200">
                        @if($property->tipe_properti != 'tanah')
                        <div class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 flex items-center justify-center text-primary text-xl mb-2">
                                <i class="ri-hotel-bed-line"></i>
                            </div>
                            <span class="text-gray-500 text-sm">Kamar Tidur</span>
                            <span class="font-bold text-gray-800">{{ $property->jumlah_kamar }}</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 flex items-center justify-center text-primary text-xl mb-2">
                                <i class="ri-shower-line"></i>
                            </div>
                            <span class="text-gray-500 text-sm">Kamar Mandi</span>
                            <span class="font-bold text-gray-800">{{ $property->jumlah_kamar_mandi }}</span>
                        </div>
                        <div class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 flex items-center justify-center text-primary text-xl mb-2">
                                <i class="ri-car-line"></i>
                            </div>
                            <span class="text-gray-500 text-sm">Parkir</span>
                            <span class="font-bold text-gray-800">{{ $property->jumlah_parkir }}</span>
                        </div>
                        @endif
                        <div class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg">
                            <div class="w-10 h-10 flex items-center justify-center text-primary text-xl mb-2">
                                <i class="ri-ruler-line"></i>
                            </div>
                            <span class="text-gray-500 text-sm">Luas</span>
                            <span class="font-bold text-gray-800">{{ $property->luas_bangunan }} m²</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-8">
                        <h2 class="text-xl font-bold text-gray-900 mb-4">Deskripsi</h2>
                        <div class="text-gray-700 leading-relaxed space-y-4">
                            {!! nl2br(e($property->deskripsi)) !!}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            @if($property->latitude && $property->longitude)
            <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Lokasi</h2>
                    <div class="h-96 bg-gray-200 rounded-lg" id="map"></div>
                </div>
            </div>
            @endif
        </div>

        <!-- Sidebar -->
        <div class="lg:col-span-1">
            <!-- Contact Agent -->
            <div class="bg-white rounded-lg shadow overflow-hidden mb-8 sticky top-28">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Hubungi Pemilik</h2>
                    <div class="flex items-start mb-6">
                        <div class="w-12 h-12 flex items-center justify-center bg-gray-100 rounded-full mr-4">
                            <i class="ri-user-3-line text-2xl text-gray-500"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800">{{ $property->pemilik }}</h3>
                            <p class="text-gray-500 text-sm">Pemilik Properti</p>
                        </div>
                    </div>

                    <a href="https://wa.me/{{ $property->whatsapp_pemilik }}" target="_blank" class="flex items-center justify-center w-full bg-green-500 hover:bg-green-600 text-white py-3 px-4 rounded !rounded-button whitespace-nowrap transition-colors mb-4">
                        <div class="w-5 h-5 flex items-center justify-center mr-2">
                            <i class="ri-whatsapp-line"></i>
                        </div>
                        <span>Hubungi via WhatsApp</span>
                    </a>

                    <a href="tel:{{ $property->whatsapp_pemilik }}" class="flex items-center justify-center w-full bg-primary hover:bg-primary/90 text-white py-3 px-4 rounded !rounded-button whitespace-nowrap transition-colors">
                        <div class="w-5 h-5 flex items-center justify-center mr-2">
                            <i class="ri-phone-line"></i>
                        </div>
                        <span>Hubungi via Telepon</span>
                    </a>
                </div>
            </div>

            <!-- Similar Properties -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Properti Serupa</h2>
                    <div class="space-y-4">
                        @php
                            $similarProperties = \App\Models\Properti::where('tipe_properti', $property->tipe_properti)
                                ->where('id', '!=', $property->id)
                                ->where('status', 'tersedia')
                                ->take(3)
                                ->get();
                        @endphp

                        @forelse($similarProperties as $similarProperty)
                        <div class="flex border-b border-gray-100 pb-4">
                            <div class="w-24 h-20 bg-gray-100 rounded overflow-hidden mr-4 flex-shrink-0">
                                @if($similarProperty->hasMedia('gambar_properti'))
                                    <img src="{{ $similarProperty->getFirstMediaUrl('gambar_properti', 'thumb') }}" alt="{{ $similarProperty->nama_properti }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center">
                                        <i class="ri-image-line text-2xl text-gray-400"></i>
                                    </div>
                                @endif
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-900">{{ $similarProperty->nama_properti }}</h3>
                                <p class="text-primary font-bold">
                                    Rp {{ number_format($similarProperty->harga, 0, ',', '.') }}
                                    @if($similarProperty->satuan_harga == 'juta')
                                        Juta
                                    @elseif($similarProperty->satuan_harga == 'miliar')
                                        Miliar
                                    @elseif($similarProperty->satuan_harga == 'perbulan')
                                        /bulan
                                    @elseif($similarProperty->satuan_harga == 'pertahun')
                                        /tahun
                                    @endif
                                </p>
                                <a href="{{ route('properti.show', $similarProperty->slug) }}" class="text-primary text-sm hover:underline">Lihat Detail</a>
                            </div>
                        </div>
                        @empty
                        <p class="text-gray-500">Tidak ada properti serupa saat ini.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@if($property->latitude && $property->longitude)
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Google Maps Initialization
        function initMap() {
            const propertyLocation = {
                lat: {{ $property->latitude }},
                lng: {{ $property->longitude }}
            };

            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 15,
                center: propertyLocation,
                mapTypeControl: true,
                streetViewControl: true,
                fullscreenControl: true
            });

            const marker = new google.maps.Marker({
                position: propertyLocation,
                map: map,
                title: "{{ $property->nama_properti }}"
            });

            const infowindow = new google.maps.InfoWindow({
                content: '<div class="p-2"><strong>{{ $property->nama_properti }}</strong><br>{{ $property->lokasi }}</div>'
            });

            marker.addListener("click", () => {
                infowindow.open({
                    anchor: marker,
                    map,
                });
            });
        }

        // Load Google Maps API
        const script = document.createElement('script');
        script.src = "https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap";
        script.async = true;
        script.defer = true;
        window.initMap = initMap;
        document.head.appendChild(script);

        // Image Slider Functionality
        if(document.querySelectorAll('.property-slide').length > 1) {
            const slides = document.querySelectorAll('.property-slide');
            const thumbnails = document.querySelectorAll('.thumbnail');
            const prevButton = document.querySelector('.prev-slide');
            const nextButton = document.querySelector('.next-slide');
            const currentSlideIndicator = document.querySelector('.current-slide');
            let currentIndex = 0;
            const totalSlides = slides.length;

            // Function to update slides
            function showSlide(index) {
                // Hide all slides
                slides.forEach(slide => slide.style.display = 'none');

                // Show the selected slide
                slides[index].style.display = 'block';

                // Update counter
                if(currentSlideIndicator) {
                    currentSlideIndicator.textContent = index + 1;
                }

                // Update thumbnail active state
                thumbnails.forEach(thumb => thumb.classList.remove('ring-2', 'ring-primary'));
                if(thumbnails[index]) {
                    thumbnails[index].classList.add('ring-2', 'ring-primary');
                }

                // Update current index
                currentIndex = index;
            }

            // Next slide function
            function nextSlide() {
                let newIndex = currentIndex + 1;
                if(newIndex >= totalSlides) {
                    newIndex = 0;
                }
                showSlide(newIndex);
            }

            // Previous slide function
            function prevSlide() {
                let newIndex = currentIndex - 1;
                if(newIndex < 0) {
                    newIndex = totalSlides - 1;
                }
                showSlide(newIndex);
            }

            // Event listeners
            if(nextButton) nextButton.addEventListener('click', nextSlide);
            if(prevButton) prevButton.addEventListener('click', prevSlide);

            // Thumbnail click events
            thumbnails.forEach(thumb => {
                thumb.addEventListener('click', () => {
                    const index = parseInt(thumb.dataset.index);
                    showSlide(index);
                });
            });

            // Initialize first slide
            showSlide(0);
        }
    });
</script>
@endpush
@endif

@endsection
