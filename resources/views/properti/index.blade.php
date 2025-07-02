@extends('layouts.app')

@section('title', 'Properti')

@section('content')
   <main class="container mx-auto px-4 pt-28 pb-20">
        <!-- Hero Title -->
        <h1 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-10">Explore Available Properties</h1>

        <!-- Filter Section -->
        <div class="bg-white rounded shadow-sm p-4 md:p-6 mb-8">
            <form action="{{ route('properti.index') }}" method="GET">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 md:flex-none md:w-5/12">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-10 h-10">
                                <i class="ri-search-line text-gray-400"></i>
                            </div>
                            <input type="text" name="search" value="{{ request('search') }}" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary text-sm" placeholder="Cari berdasarkan lokasi, area, atau nama properti">
                        </div>
                    </div>

                    <div class="md:w-3/12">
                        <div class="relative">
                            <select name="tipe_properti" class="custom-select w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary text-sm appearance-none pr-10">
                                <option value="all" {{ request('tipe_properti') == 'all' ? 'selected' : '' }}>Semua Tipe</option>
                                <option value="rumah" {{ request('tipe_properti') == 'rumah' ? 'selected' : '' }}>Rumah</option>
                                <option value="apartemen" {{ request('tipe_properti') == 'apartemen' ? 'selected' : '' }}>Apartemen</option>
                                <option value="tanah" {{ request('tipe_properti') == 'tanah' ? 'selected' : '' }}>Tanah</option>
                                <option value="ruko" {{ request('tipe_properti') == 'ruko' ? 'selected' : '' }}>Ruko</option>
                                <option value="villa" {{ request('tipe_properti') == 'villa' ? 'selected' : '' }}>Villa</option>
                                <option value="gudang" {{ request('tipe_properti') == 'gudang' ? 'selected' : '' }}>Gudang</option>
                            </select>
                        </div>
                    </div>

                    <div class="md:w-3/12">
                        <div class="relative">
                            <select name="status" class="custom-select w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary text-sm appearance-none pr-10">
                                <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>Semua Status</option>
                                <option value="tersedia" {{ request('status') == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                                <option value="terjual" {{ request('status') == 'terjual' ? 'selected' : '' }}>Terjual</option>
                                <option value="disewa" {{ request('status') == 'disewa' ? 'selected' : '' }}>Disewa</option>
                                <option value="tersewa" {{ request('status') == 'tersewa' ? 'selected' : '' }}>Tersewa</option>
                            </select>
                        </div>
                    </div>

                    <div class="md:w-1/12">
                        <button type="submit" class="w-full bg-primary hover:bg-primary/90 text-white py-3 px-4 rounded !rounded-button whitespace-nowrap transition-colors flex items-center justify-center">
                            <i class="ri-filter-3-line mr-2"></i>
                            <span>Filter</span>
                        </button>
                    </div>
                </div>

                <!-- Sort input (hidden) -->
                @if(request('sort'))
                    <input type="hidden" name="sort" value="{{ request('sort') }}">
                @endif
            </form>
        </div>

        <!-- Property Results -->
        <div class="mb-8">
            <div class="flex justify-between items-center mb-6">
                <p class="text-gray-700"><span class="font-medium">{{ $properties->total() }}</span> properti ditemukan</p>
                <div class="flex items-center">
                    <span class="text-sm text-gray-600 mr-2">Urutkan:</span>
                    <select id="sort-select" class="custom-select border border-gray-300 rounded text-sm py-2 pl-3 pr-8" onchange="window.location = this.value;">
                        <option value="{{ request()->fullUrlWithQuery(['sort' => 'newest']) }}" {{ request('sort', 'newest') == 'newest' ? 'selected' : '' }}>Terbaru</option>
                        <option value="{{ request()->fullUrlWithQuery(['sort' => 'price_asc']) }}" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Harga: Rendah ke Tinggi</option>
                        <option value="{{ request()->fullUrlWithQuery(['sort' => 'price_desc']) }}" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Harga: Tinggi ke Rendah</option>
                    </select>
                </div>
            </div>

            <!-- Property Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($properties as $property)
                <!-- Property Card -->
                <div class="bg-white rounded shadow-sm overflow-hidden transition-transform hover:shadow-md hover:-translate-y-1">
                    <a href="{{ route('properti.show', $property->id) }}" class="relative block">
                        @if($property->hasMedia('gambar_properti'))
                            <img src="{{ $property->getFirstMediaUrl('gambar_properti', 'thumb') }}" alt="{{ $property->nama_properti }}" class="w-full h-56 object-cover object-top">
                        @else
                            <div class="w-full h-56 bg-gray-200 flex items-center justify-center">
                                <i class="ri-image-line text-4xl text-gray-400"></i>
                            </div>
                        @endif
                        <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-medium px-2 py-1 rounded">
                            {{ ucfirst($property->status) }}
                        </span>
                    </a>
                    <div class="p-4">
                        <a href="{{ route('properti.show', $property->id) }}" class="text-lg font-semibold text-gray-900 hover:text-primary mb-1 block">{{ $property->nama_properti }}</a>
                        <p class="text-primary text-xl font-bold mb-2">
                            Rp {{ number_format($property->harga, 0, ',', '.') }}
                            @if($property->satuan_harga == 'juta')
                                Juta
                            @elseif($property->satuan_harga == 'miliar')
                                Miliar
                            @elseif($property->satuan_harga == 'perbulan')
                                /bulan
                            @elseif($property->satuan_harga == 'pertahun')
                                /tahun
                            @endif
                        </p>
                        <div class="flex items-center text-gray-600 mb-3">
                            <div class="w-5 h-5 flex items-center justify-center mr-1">
                                <i class="ri-map-pin-line"></i>
                            </div>
                            <span class="text-sm">{{ $property->lokasi }}</span>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                @if($property->tipe_properti != 'tanah')
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-hotel-bed-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">{{ $property->jumlah_kamar }} kamar</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-shower-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">{{ $property->jumlah_kamar_mandi }} kamar mandi</span>
                                </div>
                                @endif
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-ruler-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">{{ $property->luas_bangunan }} m²</span>
                                </div>
                            </div>
                        </div>
                        <a href="https://wa.me/{{ $property->whatsapp_pemilik }}" target="_blank" class="flex items-center justify-center w-full bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded !rounded-button whitespace-nowrap transition-colors">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-whatsapp-line"></i>
                            </div>
                            <span>Hubungi via WhatsApp</span>
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-3 text-center py-10">
                    <p class="text-gray-500">Belum ada properti yang tersedia. Silakan cek kembali nanti.</p>
                </div>
                @endforelse
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-10">
            {{ $properties->withQueryString()->links() }}
        </div>
    </main>
@endsection
