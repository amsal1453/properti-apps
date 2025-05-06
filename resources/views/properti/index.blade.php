@extends('layouts.app')

@section('title', 'Properti')

@section('content')
   <main class="container mx-auto px-4 pt-28 pb-20">
        <!-- Hero Title -->
        <h1 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-10">Explore Available Properties</h1>

        <!-- Filter Section -->
        <div class="bg-white rounded shadow-sm p-4 md:p-6 mb-8">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1 md:flex-none md:w-5/12">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-10 h-10">
                            <i class="ri-search-line text-gray-400"></i>
                        </div>
                        <input type="text" class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary text-sm" placeholder="Search by location, area or property name">
                    </div>
                </div>

                <div class="md:w-3/12">
                    <div class="relative">
                        <select class="custom-select w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary text-sm appearance-none pr-10">
                            <option value="" disabled selected>Property Type</option>
                            <option value="house">House</option>
                            <option value="land">Land</option>
                            <option value="shophouse">Shop House</option>
                            <option value="apartment">Apartment</option>
                        </select>
                    </div>
                </div>

                <div class="md:w-3/12">
                    <div class="relative">
                        <select class="custom-select w-full px-4 py-3 border border-gray-300 rounded focus:ring-2 focus:ring-primary focus:border-primary text-sm appearance-none pr-10">
                            <option value="" disabled selected>Property Status</option>
                            <option value="available">Available</option>
                            <option value="sold">Sold</option>
                        </select>
                    </div>
                </div>

                <div class="md:w-1/12">
                    <button class="w-full bg-primary hover:bg-primary/90 text-white py-3 px-4 rounded !rounded-button whitespace-nowrap transition-colors flex items-center justify-center">
                        <i class="ri-filter-3-line mr-2"></i>
                        <span>Filter</span>
                    </button>
                </div>
            </div>

            <!-- Advanced Filters (Hidden by default) -->
            <div class="hidden mt-5 pt-5 border-t border-gray-100">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <h3 class="font-medium mb-3 text-gray-700">Price Range</h3>
                        <div class="flex items-center space-x-4">
                            <div class="relative flex-1">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">$</span>
                                <input type="number" class="w-full pl-8 pr-4 py-2 border border-gray-300 rounded text-sm" placeholder="Min">
                            </div>
                            <span class="text-gray-400">-</span>
                            <div class="relative flex-1">
                                <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">$</span>
                                <input type="number" class="w-full pl-8 pr-4 py-2 border border-gray-300 rounded text-sm" placeholder="Max">
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="font-medium mb-3 text-gray-700">Bedrooms</h3>
                        <div class="flex items-center space-x-3">
                            <button class="px-3 py-1 border border-gray-300 rounded hover:border-primary hover:text-primary transition-colors">Any</button>
                            <button class="px-3 py-1 border border-primary bg-primary/10 text-primary rounded">1+</button>
                            <button class="px-3 py-1 border border-gray-300 rounded hover:border-primary hover:text-primary transition-colors">2+</button>
                            <button class="px-3 py-1 border border-gray-300 rounded hover:border-primary hover:text-primary transition-colors">3+</button>
                            <button class="px-3 py-1 border border-gray-300 rounded hover:border-primary hover:text-primary transition-colors">4+</button>
                        </div>
                    </div>

                    <div>
                        <h3 class="font-medium mb-3 text-gray-700">Amenities</h3>
                        <div class="grid grid-cols-2 gap-2">
                            <label class="flex items-center">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <span class="text-sm">Swimming Pool</span>
                            </label>
                            <label class="flex items-center">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <span class="text-sm">Garage</span>
                            </label>
                            <label class="flex items-center">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <span class="text-sm">Garden</span>
                            </label>
                            <label class="flex items-center">
                                <span class="custom-checkbox">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </span>
                                <span class="text-sm">Air Conditioning</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Toggle Advanced Filters -->
            <button class="mt-4 text-primary flex items-center text-sm font-medium">
                <span>Advanced Filters</span>
                <i class="ri-arrow-down-s-line ml-1"></i>
            </button>
        </div>

        <!-- Property Results -->
        <div class="mb-8">
            <div class="flex justify-between items-center mb-6">
                <p class="text-gray-700"><span class="font-medium">24</span> properties found</p>
                <div class="flex items-center">
                    <span class="text-sm text-gray-600 mr-2">Sort by:</span>
                    <select class="custom-select border border-gray-300 rounded text-sm py-2 pl-3 pr-8">
                        <option>Newest</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                    </select>
                </div>
            </div>

            <!-- Property Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Property Card 1 -->
                <div class="bg-white rounded shadow-sm overflow-hidden transition-transform hover:shadow-md hover:-translate-y-1">
                    <div class="relative">
                        <img src="https://readdy.ai/api/search-image?query=modern%20luxury%20house%20with%20swimming%20pool%2C%20professional%20real%20estate%20photography%2C%20high%20quality%2C%20bright%20daylight%2C%20clear%20blue%20sky%2C%20well-maintained%20garden%2C%20no%20people%2C%20architectural%20photography&width=600&height=400&seq=1&orientation=landscape" alt="Modern Luxury Villa" class="w-full h-56 object-cover object-top">
                        <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-medium px-2 py-1 rounded">Available</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Riverside Modern Villa</h3>
                        <p class="text-primary text-xl font-bold mb-2">$1,250,000</p>
                        <div class="flex items-center text-gray-600 mb-3">
                            <div class="w-5 h-5 flex items-center justify-center mr-1">
                                <i class="ri-map-pin-line"></i>
                            </div>
                            <span class="text-sm">Beverly Hills, Los Angeles, CA</span>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-hotel-bed-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">4 beds</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-shower-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">3 baths</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-ruler-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">3,500 sq ft</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="flex items-center justify-center w-full bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded !rounded-button whitespace-nowrap transition-colors">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-whatsapp-line"></i>
                            </div>
                            <span>Contact via WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- Property Card 2 -->
                <div class="bg-white rounded shadow-sm overflow-hidden transition-transform hover:shadow-md hover:-translate-y-1">
                    <div class="relative">
                        <img src="https://readdy.ai/api/search-image?query=modern%20apartment%20interior%20with%20large%20windows%2C%20minimalist%20design%2C%20bright%20and%20airy%2C%20professional%20real%20estate%20photography%2C%20high%20quality%2C%20natural%20lighting%2C%20contemporary%20furniture%2C%20clean%20aesthetic%2C%20urban%20view&width=600&height=400&seq=2&orientation=landscape" alt="Luxury Apartment" class="w-full h-56 object-cover object-top">
                        <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-medium px-2 py-1 rounded">Available</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Downtown Luxury Apartment</h3>
                        <p class="text-primary text-xl font-bold mb-2">$850,000</p>
                        <div class="flex items-center text-gray-600 mb-3">
                            <div class="w-5 h-5 flex items-center justify-center mr-1">
                                <i class="ri-map-pin-line"></i>
                            </div>
                            <span class="text-sm">Midtown, Manhattan, NY</span>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-hotel-bed-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">2 beds</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-shower-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">2 baths</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-ruler-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">1,200 sq ft</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="flex items-center justify-center w-full bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded !rounded-button whitespace-nowrap transition-colors">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-whatsapp-line"></i>
                            </div>
                            <span>Contact via WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- Property Card 3 -->
                <div class="bg-white rounded shadow-sm overflow-hidden transition-transform hover:shadow-md hover:-translate-y-1">
                    <div class="relative">
                        <img src="https://readdy.ai/api/search-image?query=commercial%20shop%20house%20exterior%2C%20modern%20design%2C%20retail%20space%20with%20large%20display%20windows%2C%20professional%20real%20estate%20photography%2C%20high%20quality%2C%20bright%20daylight%2C%20urban%20setting%2C%20business%20district&width=600&height=400&seq=3&orientation=landscape" alt="Commercial Shop House" class="w-full h-56 object-cover object-top">
                        <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-medium px-2 py-1 rounded">Available</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Prime Location Shop House</h3>
                        <p class="text-primary text-xl font-bold mb-2">$780,000</p>
                        <div class="flex items-center text-gray-600 mb-3">
                            <div class="w-5 h-5 flex items-center justify-center mr-1">
                                <i class="ri-map-pin-line"></i>
                            </div>
                            <span class="text-sm">Marina Bay, Singapore</span>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-building-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">2 floors</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-ruler-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">2,800 sq ft</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="flex items-center justify-center w-full bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded !rounded-button whitespace-nowrap transition-colors">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-whatsapp-line"></i>
                            </div>
                            <span>Contact via WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- Property Card 4 -->
                <div class="bg-white rounded shadow-sm overflow-hidden transition-transform hover:shadow-md hover:-translate-y-1">
                    <div class="relative">
                        <img src="https://readdy.ai/api/search-image?query=vacant%20land%20with%20mountain%20view%2C%20development%20opportunity%2C%20professional%20real%20estate%20photography%2C%20high%20quality%2C%20clear%20sky%2C%20natural%20landscape%2C%20panoramic%20view%2C%20no%20buildings&width=600&height=400&seq=4&orientation=landscape" alt="Development Land" class="w-full h-56 object-cover object-top">
                        <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-medium px-2 py-1 rounded">Available</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Mountain View Development Land</h3>
                        <p class="text-primary text-xl font-bold mb-2">$1,500,000</p>
                        <div class="flex items-center text-gray-600 mb-3">
                            <div class="w-5 h-5 flex items-center justify-center mr-1">
                                <i class="ri-map-pin-line"></i>
                            </div>
                            <span class="text-sm">Aspen, Colorado</span>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-landscape-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">5 acres</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-government-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">Residential zoning</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="flex items-center justify-center w-full bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded !rounded-button whitespace-nowrap transition-colors">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-whatsapp-line"></i>
                            </div>
                            <span>Contact via WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- Property Card 5 -->
                <div class="bg-white rounded shadow-sm overflow-hidden transition-transform hover:shadow-md hover:-translate-y-1">
                    <div class="relative">
                        <img src="https://readdy.ai/api/search-image?query=beachfront%20villa%20with%20infinity%20pool%2C%20luxury%20vacation%20home%2C%20professional%20real%20estate%20photography%2C%20high%20quality%2C%20ocean%20view%2C%20tropical%20setting%2C%20palm%20trees%2C%20sunset%20lighting&width=600&height=400&seq=5&orientation=landscape" alt="Beachfront Villa" class="w-full h-56 object-cover object-top">
                        <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-medium px-2 py-1 rounded">Available</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Oceanfront Luxury Villa</h3>
                        <p class="text-primary text-xl font-bold mb-2">$3,200,000</p>
                        <div class="flex items-center text-gray-600 mb-3">
                            <div class="w-5 h-5 flex items-center justify-center mr-1">
                                <i class="ri-map-pin-line"></i>
                            </div>
                            <span class="text-sm">Malibu, California</span>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-hotel-bed-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">5 beds</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-shower-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">6 baths</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-ruler-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">4,800 sq ft</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="flex items-center justify-center w-full bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded !rounded-button whitespace-nowrap transition-colors">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-whatsapp-line"></i>
                            </div>
                            <span>Contact via WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- Property Card 6 -->
                <div class="bg-white rounded shadow-sm overflow-hidden transition-transform hover:shadow-md hover:-translate-y-1">
                    <div class="relative">
                        <img src="https://readdy.ai/api/search-image?query=modern%20penthouse%20apartment%20with%20city%20skyline%20view%2C%20luxury%20interior%2C%20professional%20real%20estate%20photography%2C%20high%20quality%2C%20floor%20to%20ceiling%20windows%2C%20contemporary%20design%2C%20rooftop%20terrace%2C%20night%20view&width=600&height=400&seq=6&orientation=landscape" alt="Luxury Penthouse" class="w-full h-56 object-cover object-top">
                        <span class="absolute top-3 left-3 bg-green-500 text-white text-xs font-medium px-2 py-1 rounded">Available</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-900 mb-1">Downtown Skyline Penthouse</h3>
                        <p class="text-primary text-xl font-bold mb-2">$2,750,000</p>
                        <div class="flex items-center text-gray-600 mb-3">
                            <div class="w-5 h-5 flex items-center justify-center mr-1">
                                <i class="ri-map-pin-line"></i>
                            </div>
                            <span class="text-sm">Downtown, Chicago, IL</span>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-hotel-bed-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">3 beds</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-shower-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">3.5 baths</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-5 h-5 flex items-center justify-center mr-1">
                                        <i class="ri-ruler-line"></i>
                                    </div>
                                    <span class="text-sm text-gray-600">2,900 sq ft</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="flex items-center justify-center w-full bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded !rounded-button whitespace-nowrap transition-colors">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-whatsapp-line"></i>
                            </div>
                            <span>Contact via WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-10">
            <nav class="flex items-center">
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 mr-2 hover:border-primary hover:text-primary transition-colors">
                    <i class="ri-arrow-left-s-line"></i>
                </a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-white mr-2">1</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 mr-2 hover:border-primary hover:text-primary transition-colors">2</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 mr-2 hover:border-primary hover:text-primary transition-colors">3</a>
                <span class="w-10 h-10 flex items-center justify-center mr-2">...</span>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 mr-2 hover:border-primary hover:text-primary transition-colors">8</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 hover:border-primary hover:text-primary transition-colors">
                    <i class="ri-arrow-right-s-line"></i>
                </a>
            </nav>
        </div>
    </main>
@endsection
