@props([
    'title' => 'What Makes Us Different?',
    'subtitle' => 'Our approach is designed for maximum impact, combining strategy, technology, and execution.',
    'features' => [],
    'columns' => 3, // 1, 2, 3, 4
    'alignment' => 'text-center',

    // Design System Integration - Use semantic Tailwind/daisyUI color classes
    'bgColor' => 'bg-primary-inverted',
    'textColor' => 'text-font-primary',
    'accentColor' => 'text-font-secondary',
    'buttonClass' => 'text-font-primary bg-surface-brand-primary px-8 py-3 font-bold uppercase',
    'fontFamily' => 'body',
    'padding' => 'py-16 px-4 md:py-24',
    'borderRadius' => 'rounded-lg',
    'shadowLevel' => '',

    // Styling Classes
    'containerClass' => 'container mx-auto px-4',
    'titleClass' => 'text-3xl md:text-4xl font-extrabold mb-4 text-center uppercase text-primary-700',
    'subtitleClass' => 'text-lg text-neutral-600 mb-12 text-center max-w-3xl mx-auto',
    'gridClass' => '',
    'featureClass' => 'text-center p-6 relative overflow-hidden bg-neutral-100',
    'iconClass' => 'w-16 h-16 mx-auto mb-6 relative z-10 text-accent-600',
    'featureTitleClass' => 'text-xl font-bold mb-2 uppercase relative z-10 text-primary-700',
    'featureDescClass' => 'text-neutral-700 relative z-10',

    // US Business Context
    'industry' => null,
    'businessSize' => null,
    'region' => null,
    'accessibilityLevel' => 'wcag-aa'
])
@php
    // Defensive variable initialization
    $features = $features ?? [];
    $features = array_filter($features);
    $title = $title ?? 'Our Features';
    $subtitle = $subtitle ?? '';
    $columns = $columns ?? 3;
    $bgColor = $bgColor ?? 'bg-white';
    $textColor = $textColor ?? 'text-gray-900';
    $containerClass = $containerClass ?? 'container mx-auto px-4';
    $sectionClass = $sectionClass ?? 'py-16';
    $gridClass = $gridClass ?? '';
    $featureClass = $featureClass ?? 'text-center p-6';

    $gridClasses = [
        1 => 'grid-cols-1',
        2 => 'grid-cols-1 md:grid-cols-2',
        3 => 'grid-cols-1 md:grid-cols-3',
        4 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4'
    ];
    $finalGridClass = $gridClass ?: ($gridClasses[$columns] ?? $gridClasses[3]);
    $designClasses = "font-{$fontFamily}";
    $businessClasses = '';
    if ($industry) {
        $businessClasses .= " industry-{$industry}";
    }
    if ($businessSize) {
        $businessClasses .= " business-size-{$businessSize}";
    }
    if ($region) {
        $businessClasses .= " region-{$region}";
    }
@endphp

<!-- Features Grid using semantic Tailwind/daisyUI color classes -->
<section class="{{ $padding }} {{ $bgColor }} {{ $designClasses }} {{ $businessClasses }}">
    <div class="{{ $containerClass }}">
        <h2 class="{{ $titleClass }}">{{ $title }}</h2>
        @if($subtitle)
            <p class="{{ $subtitleClass }}">{{ $subtitle }}</p>
        @endif

        @if(count($features) > 0)
            <div class="grid {{ $finalGridClass }} gap-8">
                @foreach($features as $feature)
                    <div class="{{ $featureClass }} {{ $borderRadius }}">
                        @if(isset($feature['icon']))
                            <div class="{{ $iconClass }}">
                                @if(strpos($feature['icon'], '<') === 0)
                                    {!! $feature['icon'] !!}
                                @else
                                    <i class="{{ $feature['icon'] }} fa-3x"></i>
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
