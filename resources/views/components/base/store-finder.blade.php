@props([
    // Content Props
    'title' => 'Find Our Locations',
    'subtitle' => 'Visit us at one of our convenient locations near you.',
    'description' => 'Discover our gaming lounges and find the perfect location for your next gaming session.',
    
    // Data Props
    'locations' => [
        [
            'name' => 'Cyberia Downtown',
            'address' => '123 Gaming Street, Downtown',
            'city' => 'Downtown',
            'phone' => '(555) 123-4567',
            'hours' => 'Mon-Sun: 10AM - 2AM',
            'directions' => 'https://maps.google.com',
            'image' => 'https://placehold.co/400x300/111827/dc2626?text=Downtown+Location',
            'features' => ['High-end PCs', 'VR Arena', 'Tournament Space'],
            'status' => 'open' // 'open', 'closed', 'coming-soon'
        ],
        [
            'name' => 'Cyberia Westside',
            'address' => '456 Tech Avenue, Westside',
            'city' => 'Westside',
            'phone' => '(555) 987-6543',
            'hours' => 'Mon-Sun: 11AM - 1AM',
            'directions' => 'https://maps.google.com',
            'image' => 'https://placehold.co/400x300/111827/dc2626?text=Westside+Location',
            'features' => ['Gaming PCs', 'Console Gaming', 'Private Rooms'],
            'status' => 'open'
        ],
        [
            'name' => 'Cyberia Eastside',
            'address' => '789 Digital Blvd, Eastside',
            'city' => 'Eastside',
            'phone' => '(555) 456-7890',
            'hours' => 'Mon-Sun: 12PM - 12AM',
            'directions' => 'https://maps.google.com',
            'image' => 'https://placehold.co/400x300/111827/dc2626?text=Eastside+Location',
            'features' => ['VR Gaming', 'Esports Arena', 'Food & Drinks'],
            'status' => 'coming-soon'
        ]
    ],
    
    // Layout Props
    'layout' => 'grid',
    'columns' => 3,
    'gap' => 'gap-6',
    
    // Map Props
    'showMap' => true,
    'mapType' => 'embed',
    'mapSrc' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28e119a%3A0x7f0d0c3b3b3b3b!2s123%20Gaming%20Street!5e0!3m2!1sen!2sus!4v1234567890',
    'mapHeight' => 'h-96',
    
    // Functionality Props
    'searchable' => true,
    'filterByCity' => true,
    'showStatus' => true,
    'showFeatures' => true,
    'showDirections' => true,
    'showPhone' => true,
    'showHours' => true,
    
    // daisyUI 5 semantic colors only
    'bgColor' => 'bg-base-100',
    'textColor' => 'text-base-content',
    'accentColor' => 'text-accent',
    'fontFamily' => 'sans',
    'padding' => 'py-16',
    'borderRadius' => 'rounded-lg',

    // Styling Classes - daisyUI 5 semantic colors only
    'containerClass' => 'container mx-auto px-4',
    'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-center text-primary',
    'subtitleClass' => 'text-lg text-base-content mb-8 text-center max-w-2xl mx-auto',
    'descriptionClass' => 'text-base text-base-content mb-12 text-center max-w-3xl mx-auto',
    'locationCardClass' => 'bg-base-100 rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow border border-base-300',
    'mapClass' => 'w-full rounded-lg shadow-lg',
    'searchInputClass' => 'py-2 pr-4 pl-10 rounded-lg border border-base-300 focus:ring-2 focus:ring-accent focus:border-transparent bg-base-100 text-base-content',
    'filterSelectClass' => 'px-4 py-2 rounded-lg border border-base-300 focus:ring-2 focus:ring-accent focus:border-transparent bg-base-100 text-base-content',
    'statusClass' => 'inline-flex items-center px-2 py-1 text-xs font-medium rounded-full',
    'featureClass' => 'inline-flex items-center px-2 py-1 text-xs font-medium bg-base-200 text-base-content rounded-md mr-2 mb-2',
    'directionsButtonClass' => 'inline-flex items-center px-4 py-2 text-accent-content bg-accent rounded-lg transition-colors hover:bg-accent/80',

    // Status Colors (daisyUI 5 semantic colors only)
    'statusColors' => [
        'open' => 'bg-success text-success-content',
        'closed' => 'bg-error text-error-content',
        'coming-soon' => 'bg-warning text-warning-content'
    ]
])

@php
    // Defensive variable initialization
    $locations = $locations ?? [];
    $locations = array_filter($locations);
    $title = $title ?? 'Find Our Locations';
    $subtitle = $subtitle ?? '';
    $map_embed_url = $map_embed_url ?? '';
    $search_placeholder = $search_placeholder ?? 'Enter your location...';
    $bgColor = $bgColor ?? 'bg-white';
    $textColor = $textColor ?? 'text-gray-900';
    $containerClass = $containerClass ?? 'container mx-auto px-4';
    $sectionClass = $sectionClass ?? 'py-16';

    $gridClasses = [
        1 => 'grid-cols-1',
        2 => 'grid-cols-1 md:grid-cols-2',
        3 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
        4 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4'
    ];
    $finalGridClass = $gridClasses[$columns] ?? $gridClasses[3];
    $designClasses = "font-{$fontFamily}";
@endphp

<!-- Store Finder Section -->
<section class="{{ $padding }} {{ $textColor }} {{ $bgColor }} {{ $designClasses }}">
    <div class="{{ $containerClass }}">
        @if($headerSlot ?? false)
            {{ $headerSlot }}
        @else
            @if($title)
                <h2 class="{{ $titleClass }}">
                    @if($titleSlot ?? false)
                        {{ $titleSlot }}
                    @else
                        {{ $title }}
                    @endif
                </h2>
            @endif
            
            @if($subtitle || ($subtitleSlot ?? false))
                <p class="{{ $subtitleClass }}">
                    @if($subtitleSlot ?? false)
                        {{ $subtitleSlot }}
                    @else
                        {{ $subtitle }}
                    @endif
                </p>
            @endif
            
            @if($description || ($descriptionSlot ?? false))
                <p class="{{ $descriptionClass }}">
                    @if($descriptionSlot ?? false)
                        {{ $descriptionSlot }}
                    @else
                        {{ $description }}
                    @endif
                </p>
            @endif
        @endif
        
        @if($searchable || $filterByCity)
            <div class="flex flex-col gap-4 justify-center mb-8 md:flex-row">
                @if($searchable)
                    <div class="relative">
                        <input 
                            type="text" 
                            id="location-search" 
                            placeholder="Search locations..."
                            class="{{ $searchInputClass }}"
                        >
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3">
                            <svg class="w-5 h-5 text-base-content/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                @endif
                
                @if($filterByCity)
                    <select id="city-filter" class="{{ $filterSelectClass }}">
                        <option value="">All Cities</option>
                        @foreach(collect($locations)->pluck('city')->unique()->sort() as $city)
                            <option value="{{ $city }}">{{ $city }}</option>
                        @endforeach
                    </select>
                @endif
            </div>
        @endif
        
        @if($layout === 'map-sidebar')
            <div class="grid gap-8 lg:grid-cols-2">
                <!-- Locations List -->
                <div class="space-y-4" id="locations-list">
                    @foreach($locations as $index => $location)
                        <div class="{{ $locationCardClass }} location-card" data-location-index="{{ $index }}">
                            @if($locationCardSlot ?? false)
                                {{ $locationCardSlot }}
                            @else
                                <div class="flex items-start space-x-4">
                                    @if(isset($location['image']))
                                        <img src="{{ $location['image'] }}" alt="{{ $location['name'] ?? 'Location' }}" class="object-cover w-20 h-20 rounded-lg">
                                    @endif
                                    
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between mb-2">
                                            @if(isset($location['name']))
                                                <h3 class="text-xl font-semibold">{{ $location['name'] }}</h3>
                                            @endif
                                            
                                            @if($showStatus && isset($location['status']))
                                                <span class="{{ $statusClass }} {{ $statusColors[$location['status']] ?? $statusColors['open'] }}">
                                                    {{ ucfirst(str_replace('-', ' ', $location['status'])) }}
                                                </span>
                                            @endif
                                        </div>
                                        
                                        @if(isset($location['address']))
                                            <p class="mb-2 text-base-content/70">
                                                <svg class="inline mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                </svg>
                                                {{ $location['address'] }}
                                            </p>
                                        @endif
                                        
                                        @if($showPhone && isset($location['phone']))
                                            <p class="mb-2 text-base-content/70">
                                                <svg class="inline mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                                </svg>
                                                <a href="tel:{{ $location['phone'] }}" class="text-accent hover:text-accent-content">{{ $location['phone'] }}</a>
                                            </p>
                                        @endif
                                        
                                        @if($showHours && isset($location['hours']))
                                            <p class="mb-2 text-base-content/70">
                                                <svg class="inline mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                {{ $location['hours'] }}
                                            </p>
                                        @endif
                                        
                                        @if($showFeatures && isset($location['features']))
                                            <div class="mb-3">
                                                @foreach($location['features'] as $feature)
                                                    <span class="{{ $featureClass }}">{{ $feature }}</span>
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                        @if($showDirections && isset($location['directions']))
                                            <a href="{{ $location['directions'] }}" target="_blank" 
                                               class="{{ $directionsButtonClass }}">
                                                <svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                                </svg>
                                                Get Directions
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
                
                <!-- Map -->
                @if($showMap)
                    <div class="sticky top-4">
                        @if($mapSlot ?? false)
                            {{ $mapSlot }}
                        @else
                            <div class="{{ $mapClass }} {{ $mapHeight }}" id="store-map">
                                @if($mapSrc)
                                    <iframe src="{{ $mapSrc }}" class="w-full h-full rounded-lg" frameborder="0" allowfullscreen></iframe>
                                @else
                                    <div class="flex justify-center items-center w-full h-full bg-base-200 rounded-lg">
                                        <p class="text-base-content/50">Map will be displayed here</p>
                                    </div>
                                @endif
                            </div>
                        @endif
                    </div>
                @endif
            </div>
        @else
            <!-- Locations Grid/List -->
            <div class="@if($layout === 'grid') grid {{ $finalGridClass }} {{ $gap }} @else space-y-4 @endif" id="locations-list">
                @foreach($locations as $index => $location)
                    <div class="{{ $locationCardClass }} location-card" data-location-index="{{ $index }}">
                        @if($locationCardSlot ?? false)
                            {{ $locationCardSlot }}
                        @else
                            <div class="flex items-start space-x-4">
                                @if(isset($location['image']))
                                    <img src="{{ $location['image'] }}" alt="{{ $location['name'] ?? 'Location' }}" class="object-cover w-20 h-20 rounded-lg">
                                @endif
                                
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        @if(isset($location['name']))
                                            <h3 class="text-xl font-semibold">{{ $location['name'] }}</h3>
                                        @endif
                                        
                                        @if($showStatus && isset($location['status']))
                                            <span class="{{ $statusClass }} {{ $statusColors[$location['status']] ?? $statusColors['open'] }}">
                                                {{ ucfirst(str_replace('-', ' ', $location['status'])) }}
                                            </span>
                                        @endif
                                    </div>
                                    
                                    @if(isset($location['address']))
                                        <p class="mb-2 text-base-content/70">
                                            <svg class="inline mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                            {{ $location['address'] }}
                                        </p>
                                    @endif
                                    
                                    @if($showPhone && isset($location['phone']))
                                        <p class="mb-2 text-base-content/70">
                                            <svg class="inline mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                            </svg>
                                            <a href="tel:{{ $location['phone'] }}" class="text-accent hover:text-accent-content">{{ $location['phone'] }}</a>
                                        </p>
                                    @endif
                                    
                                    @if($showHours && isset($location['hours']))
                                        <p class="mb-2 text-base-content/70">
                                            <svg class="inline mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            {{ $location['hours'] }}
                                        </p>
                                    @endif
                                    
                                    @if($showFeatures && isset($location['features']))
                                        <div class="mb-3">
                                            @foreach($location['features'] as $feature)
                                                <span class="{{ $featureClass }}">{{ $feature }}</span>
                                            @endforeach
                                        </div>
                                    @endif
                                    
                                    @if($showDirections && isset($location['directions']))
                                        <a href="{{ $location['directions'] }}" target="_blank" 
                                           class="{{ $directionsButtonClass }}">
                                            <svg class="mr-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                            </svg>
                                            Get Directions
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
            
            <!-- Separate Map Section -->
            @if($showMap && $layout !== 'map-sidebar')
                <div class="mt-12">
                    @if($mapSlot ?? false)
                        {{ $mapSlot }}
                    @else
                        <div class="{{ $mapClass }} {{ $mapHeight }}" id="store-map">
                            @if($mapSrc)
                                <iframe src="{{ $mapSrc }}" class="w-full h-full rounded-lg" frameborder="0" allowfullscreen></iframe>
                            @else
                                <div class="flex justify-center items-center w-full h-full bg-base-200 rounded-lg">
                                    <p class="text-base-content/50">Map will be displayed here</p>
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
            @endif
        @endif
        
        @if($slot->isNotEmpty())
            <div class="mt-8">
                {{ $slot }}
            </div>
        @endif
    </div>
</section>

@if($searchable || $filterByCity)
    @push('scripts')
    <script>
        // Store finder functionality
        document.addEventListener('DOMContentLoaded', function() {
            const locationCards = document.querySelectorAll('.location-card');
            const searchInput = document.getElementById('location-search');
            const cityFilter = document.getElementById('city-filter');
            
            function filterLocations() {
                const searchTerm = searchInput ? searchInput.value.toLowerCase() : '';
                const selectedCity = cityFilter ? cityFilter.value : '';
                
                locationCards.forEach(card => {
                    const cardText = card.textContent.toLowerCase();
                    const matchesSearch = !searchTerm || cardText.includes(searchTerm);
                    const matchesCity = !selectedCity || cardText.includes(selectedCity.toLowerCase());
                    
                    card.style.display = matchesSearch && matchesCity ? 'block' : 'none';
                });
            }
            
            if (searchInput) {
                searchInput.addEventListener('input', filterLocations);
            }
            
            if (cityFilter) {
                cityFilter.addEventListener('change', filterLocations);
            }
        });
    </script>
    @endpush
@endif