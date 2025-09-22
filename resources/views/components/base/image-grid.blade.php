@props([
    'title' => 'Trusted by Industry Experts',
    'subtitle' => 'We are proud to partner with leading brands and organizations.',
    'images' => [], // Expects array of ['src' => '...', 'alt' => '...']
    'columns' => 6, // 2, 3, 4, 6
    'aspectRatio' => 'aspect-video',
    'imageFilter' => 'grayscale hover:grayscale-0 transition-all duration-300', // 'grayscale', 'sepia', etc.
    
    // Design System Integration - Adjusted for CI Web Group Aesthetic
    'bgColor' => 'bg-primary-inverted',
    'textColor' => 'text-font-primary',
    'fontFamily' => 'sans',
    'padding' => 'py-16 px-4 md:py-24',
    'borderRadius' => 'rounded-lg',
    'shadowLevel' => '',
    
    // Styling Classes - Adjusted for CI Web Group Aesthetic
    'containerClass' => 'container mx-auto px-4',
    'titleClass' => 'text-3xl md:text-4xl font-extrabold mb-4 text-center uppercase',
    'subtitleClass' => 'text-lg text-gray-600 mb-12 text-center max-w-2xl mx-auto',
    'gridClass' => '',
    'imageClass' => 'w-full h-full object-contain',
    'imageWrapperClass' => 'p-4',
])
@php
    // This block preserves the original component's logic.
    $gridClasses = [
        2 => 'grid-cols-2',
        3 => 'grid-cols-3',
        4 => 'grid-cols-2 md:grid-cols-4',
        6 => 'grid-cols-3 md:grid-cols-6'
    ];
    $finalGridClass = $gridClass ?: ($gridClasses[$columns] ?? $gridClasses[6]);
    $designClasses = "font-{$fontFamily}";
    $cssVars = 'style="';
    $cssVars .= '--color-primary: #f3f4f6; '; // Gray-100
    $cssVars .= '--color-text: #111827; '; // Black
    $cssVars .= '--color-muted: #4b5563; '; // Gray-600
    $cssVars .= '--font-body: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif;';
    $cssVars .= '--font-heading: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif;';
    $cssVars .= '"';

    // Check if images are set and all have 'src' and 'alt'
    $images = array_filter($images, function($img) {
        return isset($img['src']) && isset($img['alt']);
    });

@endphp

<!-- Image Grid (Logos) Modified for CI Web Group Aesthetic -->
<section class="{{ $padding }} {{ $bgColor }} {{ $designClasses }}" {!! $cssVars !!}>
    <div class="{{ $containerClass }}">
        @if($title)
            <h2 class="{{ $titleClass }} {{ $textColor }}">{{ $title }}</h2>
        @endif
        @if($subtitle)
            <p class="{{ $subtitleClass }}">{{ $subtitle }}</p>
        @endif
        
        @if(count($images) > 0)
            <div class="grid {{ $finalGridClass }} gap-4 items-center">
                @foreach($images as $image)
                    <div class="{{ $imageWrapperClass }}">
                        <img src="{{ $image['src'] }}" alt="{{ $image['alt'] }}" class="{{ $imageClass }} {{ $imageFilter }}">
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
