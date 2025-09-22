@props([
    'title' => 'The Importance of a High-Quality Website',
    'subtitle' => 'Your website is the digital face of your brand. We ensure it\'s powerful, professional, and poised for performance.',
    'promotions' => [], // Expects ['icon' => '...', 'title' => '...', 'description' => '...']
    'columns' => 4,

    // Design System Integration - Use semantic Tailwind color classes
    'bgColor' => 'bg-neutral-900',
    'textColor' => 'text-neutral-content',
    'accentColor' => 'text-accent-500',
    'fontFamily' => 'body',
    'padding' => 'py-16 px-4 md:py-24',
    'borderRadius' => 'rounded-full', // For circular icons
    'shadowLevel' => 'shadow-lg',

    // Styling Classes
    'containerClass' => 'container mx-auto px-4',
    'titleClass' => 'text-3xl md:text-4xl font-extrabold mb-4 text-center uppercase text-primary-500',
    'subtitleClass' => 'text-lg mb-12 text-center max-w-3xl mx-auto text-neutral-400',
    'cardClass' => 'text-center flex flex-col items-center',
    'iconWrapperClass' => 'w-24 h-24 mb-6 flex items-center justify-center bg-neutral-800 border-2 border-accent-500',
    'iconClass' => 'w-12 h-12 text-accent-500',
    'cardTitleClass' => 'text-xl font-bold mb-2 uppercase text-primary-700',
    'cardDescClass' => 'text-neutral-400',
])
@php
    // Defensive variable initialization
    $promotions = $promotions ?? [];
    $promotions = array_filter($promotions);
    $title = $title ?? 'Special Offers';
    $subtitle = $subtitle ?? '';
    $layout = $layout ?? 'grid';
    $bgColor = $bgColor ?? 'bg-white';
    $textColor = $textColor ?? 'text-gray-900';
    $containerClass = $containerClass ?? 'container mx-auto px-4';
    $sectionClass = $sectionClass ?? 'py-16';

    $gridClasses = [
        2 => 'grid-cols-1 md:grid-cols-2',
        3 => 'grid-cols-1 md:grid-cols-3',
        4 => 'grid-cols-1 sm:grid-cols-2 lg:grid-cols-4'
    ];
    $finalGridClass = $gridClasses[$columns] ?? $gridClasses[4];
    $designClasses = "font-{$fontFamily}";
@endphp

<!-- Promotions Section using custom Tailwind semantic color classes -->
<section class="{{ $padding }} {{ $textColor }} {{ $bgColor }} {{ $designClasses }}">
    <div class="{{ $containerClass }}">
        <h2 class="{{ $titleClass }}">{{ $title }}</h2>
        @if($subtitle)
            <p class="{{ $subtitleClass }}">{{ $subtitle }}</p>
        @endif

        @if(count($promotions) > 0)
            <div class="grid {{ $finalGridClass }} gap-8">
                @foreach($promotions as $promotion)
                    <div class="{{ $cardClass }}">
                        @if(isset($promotion['icon']))
                        <div class="{{ $iconWrapperClass }} {{ $borderRadius }}">
                            @if(str_starts_with($promotion['icon'], '<svg'))
                                {!! $promotion['icon'] !!}
                            @else
                                <i class="{{ $promotion['icon'] }} fa-3x {{ $iconClass }}"></i>
                            @endif
                        </div>
                        @endif

                        @if(isset($promotion['title']))
                            <h3 class="{{ $cardTitleClass }}">{{ $promotion['title'] }}</h3>
                        @endif

                        @if(isset($promotion['description']))
                            <p class="{{ $cardDescClass }}">{{ $promotion['description'] }}</p>
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
