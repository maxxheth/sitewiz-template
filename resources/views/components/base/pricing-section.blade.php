@props([
    'title' => 'Executive Team',
    'subtitle' => 'Meet the leaders driving our success and innovation.',
    'plans' => [], // Expects array of team members
    'columns' => 4,
    'buttonText' => 'Book Meeting',

    // Design System Integration - Use semantic Tailwind color classes
    'bgColor' => 'bg-surface-secondary',
    'textColor' => 'text-font-primary',
    'accentColor' => 'bg-surface-brand-primary',
    'fontFamily' => 'body',
    'padding' => 'py-16 md:py-24 px-4',
    'borderRadius' => 'rounded-lg',
    'shadowLevel' => '',

    // Styling Classes
    'containerClass' => 'container px-4 mx-auto',
    'titleClass' => 'mb-4 text-3xl font-extrabold text-center md:text-4xl uppercase text-primary-500',
    'subtitleClass' => 'mx-auto mb-12 max-w-2xl text-center text-neutral-400',
    'cardClass' => 'bg-neutral-800 p-6 flex flex-col items-center text-center',
    'imageClass' => 'w-full h-auto object-cover rounded-lg',
    'imageWrapperClass' => 'w-full mb-4',
    'planNameClass' => 'mb-1 text-2xl font-bold text-primary-700',
    'priceClass' => 'mb-4 text-md text-neutral-400', // Used for job title
    'buttonClass' => 'text-accent-content font-bold py-2 px-5 w-full transition-colors',
    'regularButtonClass' => 'bg-accent-500 hover:bg-accent-700',
])
@php
    // Defensive variable initialization
    $pricing_tiers = $pricing_tiers ?? [];
    $pricing_tiers = array_filter($pricing_tiers);
    $title = $title ?? 'Pricing Plans';
    $subtitle = $subtitle ?? '';
    $bgColor = $bgColor ?? 'bg-gray-50';
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

<!-- Pricing Section (Repurposed for Team) using custom Tailwind semantic color classes -->
<section id="team" class="{{ $padding }} {{ $textColor }} {{ $bgColor }} {{ $designClasses }}">
    <div class="{{ $containerClass }}">
        <h2 class="{{ $titleClass }}">{{ $title }}</h2>
        @if($subtitle)
            <p class="{{ $subtitleClass }}">{{ $subtitle }}</p>
        @endif

        @if(count($plans) > 0)
            <div class="grid {{ $finalGridClass }} gap-0">
                @foreach ($plans as $plan)
                    <div class="{{ $cardClass }} {{ $borderRadius }}">
                        @if(isset($plan['image']))
                        <div class="{{ $imageWrapperClass }}">
                            <img src="{{ $plan['image'] }}" alt="{{ $plan['name'] }}" class="{{ $imageClass }}">
                        </div>
                        @endif

                        <h3 class="{{ $planNameClass }}">{{ $plan['name'] }}</h3>

                        @if(isset($plan['title']))
                            <p class="{{ $priceClass }}">{{ $plan['title'] }}</p>
                        @endif

                        <a href="{{ $plan['buttonLink'] ?? '#' }}" class="{{ $buttonClass }} {{ $regularButtonClass }} {{ $borderRadius }}">
                            {{ $plan['buttonText'] ?? $buttonText }}
                        </a>
                    </div>
                @endforeach
            </div>
        @endif

        @if($slot->isNotEmpty())
            <div class="mt-12">
                {{ $slot }}
            </div>
        @endif
    </div>
</section>
