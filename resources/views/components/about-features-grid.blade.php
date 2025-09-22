@props([
    'title' => 'Our Features',
    'subtitle' => 'Discover what makes us different and why clients choose us.',
    'features' => [],
    'columns' => 3, // 1, 2, 3, 4
    'bgColor' => 'bg-gray-50',
    'textColor' => 'text-gray-900',
    'padding' => 'py-16',
    'containerClass' => 'container mx-auto px-4',
    'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-center',
    'subtitleClass' => 'text-lg text-gray-600 mb-12 text-center max-w-2xl mx-auto',
    'gridClass' => '', // Will be set based on columns
    'featureClass' => 'text-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow',
    'iconClass' => 'w-12 h-12 mx-auto mb-4 text-blue-600',
    'featureTitleClass' => 'text-xl font-semibold mb-2',
    'featureDescClass' => 'text-gray-600'
])

@php
    $gridClasses = [
        1 => 'grid-cols-1',
        2 => 'grid-cols-1 md:grid-cols-2',
        3 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
        4 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4'
    ];
    $finalGridClass = $gridClass ?: ($gridClasses[$columns] ?? $gridClasses[3]);
@endphp

<!-- About Features Grid Section -->
<section class="{{ $padding }} {{ $textColor }} {{ $bgColor }}">
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
        
        @if($featuresSlot ?? false)
            {{ $featuresSlot }}
        @elseif(count($features) > 0)
            <div class="grid {{ $finalGridClass }} gap-6">
                @foreach($features as $feature)
                    <div class="{{ $featureClass }}">
                        @if(isset($feature['icon']))
                            <div class="{{ $iconClass }}">
                                @if(str_starts_with($feature['icon'], '<svg'))
                                    {!! $feature['icon'] !!}
                                @else
                                    <i class="{{ $feature['icon'] }}"></i>
                                @endif
                            </div>
                        @endif
                        
                        @if(isset($feature['title']))
                            <h3 class="{{ $featureTitleClass }}">{{ $feature['title'] }}</h3>
                        @endif
                        
                        @if(isset($feature['description']))
                            <p class="{{ $featureDescClass }}">{{ $feature['description'] }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
        
        @if($slot->isNotEmpty())
            <div class="mt-8">
                {{ $slot }}
            </div>
        @endif
    </div>
</section>