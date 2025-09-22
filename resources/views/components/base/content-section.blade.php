@props([
    'title' => 'About Our Company',
    'content' => 'We are dedicated to providing exceptional service and innovative solutions that exceed our clients\' expectations.',
    'layout' => 'single', // 'single', 'two-column', 'image-left', 'image-right'
    'image' => null,
    'imageAlt' => 'About us image',
    'alignment' => 'text-left',

    // Design System Integration
    'designSystem' => null,
    'bgColor' => 'bg-primary-inverted',
    'textColor' => 'text-font-primary',
    'accentColor' => 'text-font-secondary',
    'fontFamily' => 'body',
    'padding' => 'py-16',
    'borderRadius' => 'rounded-lg',
    'shadowLevel' => 'shadow-lg',

    // Styling Classes
    'containerClass' => 'container mx-auto px-4',
    'titleClass' => 'text-3xl md:text-4xl font-bold mb-6 text-primary-700',
    'contentClass' => 'text-lg leading-relaxed text-primary',
    'imageClass' => 'w-full h-auto rounded-lg shadow-lg',

    // US Business Context
    'industry' => null,
    'businessSize' => null,
    'region' => null,
    'accessibilityLevel' => 'wcag-aa'
])

@php
    // Design system class generation (font only, color handled by semantic classes)
    $designClasses = "font-{$fontFamily}";

    // US business context classes
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

<!-- Enhanced Content Section -->
<section class="{{ $padding }} {{ $textColor }} {{ $bgColor }} {{ $designClasses }} {{ $businessClasses }}">
    <div class="{{ $containerClass }}">
        @if($layout === 'single')
            <div class="{{ $alignment }}">
                @if($headerSlot ?? false)
                    {{ $headerSlot }}
                @else
                    <h2 class="{{ $titleClass }}" style="font-family: var(--font-heading, system-ui);">
                        @if($titleSlot ?? false)
                            {{ $titleSlot }}
                        @else
                            {{ $title }}
                        @endif
                    </h2>
                @endif

                @if($contentSlot ?? false)
                    <div class="{{ $contentClass }}" style="font-family: var(--font-body, system-ui);">
                        {{ $contentSlot }}
                    </div>
                @else
                    <div class="{{ $contentClass }}" style="font-family: var(--font-body, system-ui);">
                        {!! $content !!}
                    </div>
                @endif

                @if($slot->isNotEmpty())
                    <div class="mt-8">
                        {{ $slot }}
                    </div>
                @endif
            </div>
        @elseif($layout === 'two-column')
            <div class="grid gap-8 items-center md:grid-cols-2">
                <div>
                    @if($leftSlot ?? false)
                        {{ $leftSlot }}
                    @else
                        <h2 class="{{ $titleClass }}" style="font-family: var(--font-heading, system-ui);">{{ $title }}</h2>
                        <div class="{{ $contentClass }}" style="font-family: var(--font-body, system-ui);">{{ $content }}</div>
                    @endif
                </div>
                <div>
                    @if($rightSlot ?? false)
                        {{ $rightSlot }}
                    @else
                        @if($image)
                            <img src="{{ $image }}" alt="{{ $imageAlt }}" class="{{ $imageClass }} {{ $borderRadius }} {{ $shadowLevel }}">
                        @endif
                    @endif
                </div>
            </div>
        @elseif($layout === 'image-left')
            <div class="grid gap-8 items-center md:grid-cols-2">
                <div>
                    @if($imageSlot ?? false)
                        {{ $imageSlot }}
                    @elseif($image)
                        <img src="{{ $image }}" alt="{{ $imageAlt }}" class="{{ $imageClass }} {{ $borderRadius }} {{ $shadowLevel }}">
                    @endif
                </div>
                <div>
                    @if($contentSlot ?? false)
                        {{ $contentSlot }}
                    @else
                        <h2 class="{{ $titleClass }}" style="font-family: var(--font-heading, system-ui);">{{ $title }}</h2>
                        <div class="{{ $contentClass }}" style="font-family: var(--font-body, system-ui);">{{ $content }}</div>
                    @endif
                </div>
            </div>
        @elseif($layout === 'image-right')
            <div class="grid gap-8 items-center md:grid-cols-2">
                <div>
                    @if($contentSlot ?? false)
                        {{ $contentSlot }}
                    @else
                        <h2 class="{{ $titleClass }}" style="font-family: var(--font-heading, system-ui);">{{ $title }}</h2>
                        <div class="{{ $contentClass }}" style="font-family: var(--font-body, system-ui);">{{ $content }}</div>
                    @endif
                </div>
                <div>
                    @if($imageSlot ?? false)
                        {{ $imageSlot }}
                    @elseif($image)
                        <img src="{{ $image }}" alt="{{ $imageAlt }}" class="{{ $imageClass }} {{ $borderRadius }} {{ $shadowLevel }}">
                    @endif
                </div>
            </div>
        @endif

    </div>
</section>