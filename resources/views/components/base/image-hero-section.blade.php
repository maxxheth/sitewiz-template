@props([
    'title' => 'Fueled by Data, Driven by Success',
    'subtitle' => 'We combine innovative technology with proven strategies to deliver real results and accelerate your growth.',
    'image' => 'https://placehold.co/1200x600/111827/dc2626?text=Your+Dynamic+Image',
    'imageAlt' => 'Abstract representation of data and success',
    'buttonText' => 'Discover Our Services',
    'buttonLink' => '/services',
    'showButton' => true,
    'alignment' => 'text-left',
    'imagePosition' => 'background', // 'top', 'bottom', 'left', 'right', 'background'

    // Design System Integration - Use semantic Tailwind color classes
    'bgColor' => 'bg-primary-inverted',
    'textColor' => 'text-font-primary',
    'accentColor' => 'text-font-secondary',
    'fontFamily' => 'heading',
    'padding' => 'py-20 px-4 md:py-32',
    'borderRadius' => 'rounded-none',
    'shadowLevel' => '',

    // Styling Classes
    'containerClass' => 'container mx-auto relative z-10',
    'titleClass' => 'mb-4 text-4xl font-extrabold leading-tight md:text-6xl uppercase text-primary-content',
    'subtitleClass' => 'mb-8 max-w-2xl text-lg md:text-xl text-accent-500',
    'buttonClass' => 'text-font-primary bg-surface-brand-primary px-8 py-3 font-bold uppercase',
])

@php
    // Defensive variable initialization
    $hero_title = $title ?? 'Welcome';
    $hero_subtitle = $subtitle ?? '';
    $hero_image = $image ?? '';
    $hero_image_alt = $imageAlt ?? 'Hero image';
    $cta_text = $buttonText ?? '';
    $cta_link = $buttonLink ?? '#';
    $text_position = $alignment ?? 'center';
    $overlay_color = 'bg-primary-900';
    $overlay_opacity = 'bg-opacity-70';
    $textColor = $textColor ?? 'text-white';
    $designClasses = "font-{$fontFamily}";
@endphp

<!-- Image Hero Section using custom Tailwind semantic color classes -->
<section class="{{ $padding }} {{ $alignment }} {{ $textColor }} {{ $bgColor }} {{ $designClasses }} relative">
    @if($imagePosition === 'background')
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0">
        <img src="{{ $image }}" alt="{{ $imageAlt }}" class="object-cover w-full h-full">
        <div class="absolute inset-0 {{ $overlay_color }} {{ $overlay_opacity }}"></div>
    </div>
    @endif

    <div class="{{ $containerClass }}">
        <div class="max-w-3xl">
            <h1 class="{{ $titleClass }}">
                {{ $title }}
            </h1>

            <p class="{{ $subtitleClass }}">
                {{ $subtitle }}
            </p>

            @if($showButton)
            <a href="{{ $buttonLink }}" class="{{ $buttonClass }}">
                {{ $buttonText }}
            </a>
            @endif
        </div>

        @if($slot->isNotEmpty())
            <div class="mt-8">
                {{ $slot }}
            </div>
        @endif
    </div>
</section>
