@props([
    'title' => 'Our Services',
    'subtitle' => 'We provide comprehensive solutions tailored to your needs.',
    'services' => [],
    'layout' => 'alternating', // 'alternating', 'grid', 'list'
    'columns' => 2, // 1, 2, 3 (for grid layout)
    'bgColor' => 'bg-gray-900',
    'textColor' => 'text-white',
    'padding' => 'py-16 md:py-24',
    'containerClass' => 'container px-4 mx-auto space-y-20 md:space-y-28',
    'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-center',
    'subtitleClass' => 'text-lg text-gray-300 mb-12 text-center max-w-2xl mx-auto',
    'serviceCardClass' => 'bg-gray-800 rounded-lg p-6 shadow-lg hover:shadow-xl transition-shadow',
    'serviceImageClass' => 'w-full h-auto rounded-lg shadow-2xl shadow-purple-900/20',
    'serviceTitleClass' => 'mb-4 text-3xl font-bold text-purple-400',
    'serviceDescClass' => 'leading-relaxed text-gray-300',
    'serviceButtonClass' => 'px-8 py-3 mt-8 font-bold text-purple-400 bg-transparent rounded-md border-2 border-purple-500 transition-colors hover:bg-purple-500 hover:text-white',
    'serviceButtonText' => 'Learn More',
    'showButtons' => true,
    'gap' => 'gap-8 md:gap-16'
])

@php
    $gridClasses = [
        1 => 'grid-cols-1',
        2 => 'grid-cols-1 md:grid-cols-2',
        3 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3'
    ];
    $finalGridClass = $gridClasses[$columns] ?? $gridClasses[2];
@endphp

<!-- Services Section -->
<section id="services" class="{{ $padding }} {{ $textColor }} {{ $bgColor }}">
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
        @endif
        
        @if($servicesSlot ?? false)
            {{ $servicesSlot }}
        @elseif(count($services) > 0)
            @if($layout === 'alternating')
                @foreach ($services as $index => $service)
                    <div class="flex flex-col md:flex-row items-center {{ $gap }} @if($index % 2 !== 0) md:flex-row-reverse @endif">
                        <div class="md:w-1/2">
                            @if($serviceImageSlot ?? false)
                                {{ $serviceImageSlot }}
                            @elseif(isset($service['image']) || isset($service['imgSrc']))
                                <img src="{{ $service['image'] ?? $service['imgSrc'] }}" 
                                     alt="{{ $service['imageAlt'] ?? $service['imgAlt'] ?? $service['title'] }}" 
                                     class="{{ $serviceImageClass }}" />
                            @endif
                        </div>
                        <div class="md:w-1/2">
                            @if($serviceContentSlot ?? false)
                                {{ $serviceContentSlot }}
                            @else
                                @if(isset($service['title']))
                                    <h3 class="{{ $serviceTitleClass }}">{{ $service['title'] }}</h3>
                                @endif
                                
                                @if(isset($service['description']))
                                    <p class="{{ $serviceDescClass }}">{{ $service['description'] }}</p>
                                @endif

                                @if(isset($service['url']))
                                    <a href="{{ $service['url'] }}" class="{{ $serviceButtonClass }}">
                                        {{ $service['buttonText'] ?? $serviceButtonText }}
                                    </a>
                                @endif
                                
                                @if(isset($service['features']) && is_array($service['features']))
                                    <ul class="mt-4 space-y-2 text-gray-300">
                                        @foreach($service['features'] as $feature)
                                            <li class="flex items-center">
                                                <svg class="w-4 h-4 mr-2 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                {{ $feature }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                @if($showButtons)
                                    <button class="{{ $serviceButtonClass }}">
                                        {{ $service['buttonText'] ?? $serviceButtonText }}
                                    </button>
                                @endif
                            @endif
                        </div>
                    </div>
                @endforeach
            @elseif($layout === 'grid')
                <div class="grid {{ $finalGridClass }} gap-6">
                    @foreach ($services as $service)
                        <div class="{{ $serviceCardClass }}">
                            @if(isset($service['image']) || isset($service['imgSrc']))
                                <img src="{{ $service['image'] ?? $service['imgSrc'] }}" 
                                     alt="{{ $service['imageAlt'] ?? $service['imgAlt'] ?? $service['title'] }}" 
                                     class="{{ $serviceImageClass }} mb-4" />
                            @endif
                            
                            @if(isset($service['title']))
                                <h3 class="{{ $serviceTitleClass }}">{{ $service['title'] }}</h3>
                            @endif
                            
                            @if(isset($service['description']))
                                <p class="{{ $serviceDescClass }}">{{ $service['description'] }}</p>
                            @endif
                            
                            @if(isset($service['features']) && is_array($service['features']))
                                <ul class="mt-4 space-y-2 text-gray-300">
                                    @foreach($service['features'] as $feature)
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 mr-2 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            {{ $feature }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                            
                            @if($showButtons)
                                <button class="{{ $serviceButtonClass }}">
                                    {{ $service['buttonText'] ?? $serviceButtonText }}
                                </button>
                            @endif
                        </div>
                    @endforeach
                </div>
            @elseif($layout === 'list')
                <div class="space-y-8">
                    @foreach ($services as $service)
                        <div class="{{ $serviceCardClass }} flex items-center {{ $gap }}">
                            @if(isset($service['image']) || isset($service['imgSrc']))
                                <div class="flex-shrink-0">
                                    <img src="{{ $service['image'] ?? $service['imgSrc'] }}" 
                                         alt="{{ $service['imageAlt'] ?? $service['imgAlt'] ?? $service['title'] }}" 
                                         class="w-24 h-24 object-cover rounded-lg" />
                                </div>
                            @endif
                            
                            <div class="flex-1">
                                @if(isset($service['title']))
                                    <h3 class="{{ $serviceTitleClass }}">{{ $service['title'] }}</h3>
                                @endif
                                
                                @if(isset($service['description']))
                                    <p class="{{ $serviceDescClass }}">{{ $service['description'] }}</p>
                                @endif
                                
                                @if($showButtons)
                                    <button class="{{ $serviceButtonClass }}">
                                        {{ $service['buttonText'] ?? $serviceButtonText }}
                                    </button>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @endif
        
        @if($slot->isNotEmpty())
            <div class="mt-12">
                {{ $slot }}
            </div>
        @endif
    </div>
</section> 