@props([
    'title' => 'Want To See Real Results?',
    'subtitle' => 'Book a strategy session with our experts and discover how we can accelerate your growth. No obligation, just pure value.',
    'buttonText' => 'Get Started Today',
    'buttonLink' => '#contact',
    'alignment' => 'text-center',
    'showButton' => true,

    // Design System Integration - Use semantic Tailwind/daisyUI color classes
    'fontFamily' => 'sans',
    'padding' => 'py-16 px-4 md:py-24',
    'borderRadius' => 'rounded-md',
    'shadowLevel' => '',

    // Styling Classes
    'containerClass' => 'container mx-auto',
    'titleClass' => 'text-3xl md:text-5xl font-extrabold mb-4 uppercase text-primary-content',
    'subtitleClass' => 'text-lg md:text-xl mb-8 max-w-3xl mx-auto opacity-90 text-primary-content',
    'bgColor' => 'bg-primary-inverted',
    'textColor' => 'text-font-primary',
    'accentColor' => 'text-font-secondary',
    'buttonClass' => 'text-font-primary bg-surface-brand-primary px-8 py-3 font-bold uppercase',

    // US Business Context
    'industry' => null,
    'businessSize' => null,
    'region' => null,
    'accessibilityLevel' => 'wcag-aa'
])
@php
    // Defensive variable initialization
    $title = $title ?? 'Ready to Get Started?';
    $subtitle = $subtitle ?? '';
    $primaryButton = $primaryButton ?? [];
    $secondaryButton = $secondaryButton ?? [];
    $backgroundImage = $backgroundImage ?? '';
    $overlayOpacity = $overlayOpacity ?? 'bg-opacity-50';
    $alignment = $alignment ?? 'text-center';
    $bgColor = $bgColor ?? 'bg-primary-600';
    $textColor = $textColor ?? 'text-white';
    $containerClass = $containerClass ?? 'container mx-auto px-4';
    $sectionClass = $sectionClass ?? 'py-16';

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

    // Filter arrays
    $primaryButton = array_filter($primaryButton);
    $secondaryButton = array_filter($secondaryButton);
@endphp

<!-- CTA Section using semantic Tailwind/daisyUI color classes -->
<section class="{{ $padding }} {{ $textColor }} {{ $bgColor }} {{ $designClasses }} {{ $businessClasses }}">
    <div class="{{ $containerClass }}">
        <div class="{{ $alignment }}">
            @if($headerSlot ?? false)
                {{ $headerSlot }}
            @else
                <h2 class="{{ $titleClass }}">
                    {{ $title }}
                </h2>
                @if($subtitle)
                    <p class="{{ $subtitleClass }}">
                        {{ $subtitle }}
                    </p>
                @endif
            @endif

            @if($showButton)
                <a href="{{ $buttonLink }}" class="{{ $buttonClass }} {{ $borderRadius }}">
                    {{ $buttonText }}
                </a>
            @endif

            @if($slot->isNotEmpty())
                <div class="mt-8">
                    {{ $slot }}
                </div>
            @endif
        </div>
    </div>
</section>
