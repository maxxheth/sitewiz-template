@props([
    'rating' => '4.9',
    'reviewCount' => '1894',
    'financingText' => 'We Offer Financing',
    'ctaText' => 'Unique Service Offering or Other Call To Action/Value Proposition',
    'ctaLinkText' => 'Call To Action',
    'ctaLink' => '#',
    'bgColor' => 'bg-accent/10',
    'accentColor' => 'bg-accent',
    'textColor' => 'text-base-content',
    'borderRadius' => 'rounded-2xl',
    'padding' => 'px-8 py-3',
    'shadowLevel' => 'shadow',
    'fontFamily' => 'sans',
    // Classes for inner elements
    'containerClass' => 'flex flex-col md:flex-row md:items-center md:justify-between gap-4',
    'ratingBoxClass' => 'flex items-center gap-3 bg-accent/30 border border-accent/20 rounded-2xl px-6 py-3 shadow',
    'financingBoxClass' => 'flex items-center gap-3 bg-accent/30 border border-accent/20 rounded-2xl px-6 py-3 shadow',
    'ctaClass' => 'flex flex-col md:flex-row items-center gap-2',
    'ctaLinkClass' => 'underline font-semibold text-accent hover:text-accent/80 cursor-pointer',
])

@php
    $designClasses = "font-{$fontFamily}";
@endphp

<!-- Banner Blade Component using Tailwind/daisyUI classes -->
<div class="{{ $bgColor }} {{ $borderRadius }} {{ $padding }} {{ $shadowLevel }} {{ $designClasses }}">
    <div class="{{ $containerClass }}">
        <!-- Rating Box -->
        <div class="{{ $ratingBoxClass }}">
            <div class="flex items-center gap-2">
                <span class="text-2xl font-bold text-accent">{{ $rating }}</span>
                <div class="flex gap-0.5">
                    @for($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 text-accent" fill="currentColor" viewBox="0 0 20 20">
                            <polygon points="10,1 12.59,7.36 19.51,7.36 13.96,11.64 16.55,18 10,13.72 3.45,18 6.04,11.64 0.49,7.36 7.41,7.36" />
                        </svg>
                    @endfor
                </div>
            </div>
            <span class="text-xs text-base-content/60 ml-2">Based on {{ $reviewCount }} reviews</span>
        </div>

        <!-- Financing Box -->
        <div class="{{ $financingBoxClass }}">
            <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <rect x="3" y="7" width="18" height="10" rx="2" fill="currentColor" class="text-accent/30"/>
                <rect x="3" y="7" width="18" height="10" rx="2" stroke="currentColor" stroke-width="2"/>
            </svg>
            <span class="text-base font-semibold">{{ $financingText }}</span>
        </div>

        <!-- CTA -->
        <div class="{{ $ctaClass }}">
            <span class="text-sm md:text-base font-medium {{ $textColor }}">{{ $ctaText }}</span>
            <a href="{{ $ctaLink }}" class="{{ $ctaLinkClass }}">{{ $ctaLinkText }}</a>
        </div>
    </div>
</div>