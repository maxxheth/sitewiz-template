@props([
    'title' => 'Fueled by Data, Driven by Success',
    'subtitle' => 'We combine innovative technology with proven strategies to deliver real results and accelerate your growth.',
    'variant' => 'left', // 'centered' or 'left'
    'showButton' => true,
    'buttonText' => 'Our Services',
    'buttonLink' => '/services',

    // Design System Integration - Use semantic Tailwind color classes
    'bgColor' => 'bg-surface-secondary',
    'textColor' => 'text-font-primary',
    'accentColor' => 'text-font-secondary',
    'fontFamily' => 'heading',
    'spacing' => 'py-20 md:py-32',
    'borderRadius' => 'rounded-md',
    'shadowLevel' => '',

    // US Business Context
    'industry' => null,
    'businessSize' => null,
    'region' => null,
    'accessibilityLevel' => 'wcag-aa'
])

@php
// Defensive variable initialization
$hero_title = $hero_title ?? 'Welcome to Our Business';
$hero_subtitle = $hero_subtitle ?? '';
$hero_description = $hero_description ?? '';
$primary_cta = $primary_cta ?? [];
$secondary_cta = $secondary_cta ?? [];
$background_image = $background_image ?? '';
$overlay_opacity = $overlay_opacity ?? 'bg-opacity-50';
$text_alignment = $text_alignment ?? 'text-center';
$bgColor = $bgColor ?? 'bg-primary-600';
$textColor = $textColor ?? 'text-white';

// Filter arrays
$primary_cta = array_filter($primary_cta);
$secondary_cta = array_filter($secondary_cta);
@endphp

@php
    $designClasses = "font-{$fontFamily}";
    $textAlignClass = $variant === 'centered' ? 'text-center' : 'text-left';
@endphp

<!-- Enhanced Hero Section using custom Tailwind semantic color classes -->
<section class="relative px-4 {{ $spacing }} {{ $textColor }} {{ $bgColor }} {{ $designClasses }}">
    <div class="container mx-auto relative z-10 {{ $textAlignClass }}">
        <div class="{{ $variant === 'centered' ? 'max-w-4xl mx-auto' : 'max-w-3xl' }}">
            <h1 class="mb-4 text-4xl font-extrabold leading-tight uppercase md:text-6xl text-primary-content">
                {{ $title }}
            </h1>
            <p class="mb-8 text-lg md:text-xl text-accent-500">
                {{ $subtitle }}
            </p>
        </div>

        @if($showButton)
            <div class="mt-8 {{ $variant === 'centered' ? 'flex justify-center' : '' }}">
                <a href="{{ $buttonLink }}" class="inline-block px-8 py-3 font-bold uppercase bg-surface-brand-primary text-accent-content {{ $borderRadius }} transition-colors hover:bg-accent-700">
                    {{ $buttonText }}
                </a>
            </div>
        @endif
    </div>
</section>
