@props([
    'title' => 'Our Services',
    'subtitle' => 'We provide comprehensive solutions tailored to your needs.',
    'services' => [
        [
            'url' => '#',
            'title' => 'Some Service',
            'image' => 'https://via.placeholder.com/150',
        ]
    ],
    'layout' => 'grid', // 'alternating', 'grid', 'list'
    'columns' => 2, // 1, 2, 3
    'showButtons' => true,
    'serviceButtonText' => 'Learn More',

    // Tailwind CSS Classes
    'bgColor' => 'bg-white dark:bg-secondary-inverted',
    'textColor' => 'text-secondary-inverted dark:text-font-primary',
    'accentColor' => 'text-indigo-600 dark:text-indigo-400',
    'fontFamily' => 'sans',
    'padding' => 'py-16 md:py-24 px-4',
    'borderRadius' => 'rounded-lg',
    'shadowLevel' => 'shadow-lg',

    // Styling Classes - Tailwind CSS
    'containerClass' => 'container px-4 mx-auto',
    'titleClass' => 'text-3xl md:text-4xl font-extrabold mb-4 text-center uppercase',
    'subtitleClass' => 'text-lg text-gray-600 dark:text-gray-300 mb-12 text-center max-w-3xl mx-auto',
    'serviceCardClass' => 'bg-primary-dark-50 dark:bg-primary-dark-800 border border-gray-200 dark:border-gray-700 p-8 hover:border-indigo-500 dark:hover:border-indigo-400 transition-colors',
    'serviceImageClass' => 'w-full h-auto object-cover mb-6',
    'serviceTitleClass' => 'mb-2 text-2xl font-bold uppercase',
    'serviceDescClass' => 'leading-relaxed text-gray-700 dark:text-gray-300',
    'serviceButtonClass' => 'inline-block px-6 py-2 mt-6 font-bold text-font-primary bg-indigo-600 transition-colors hover:bg-indigo-700',
])
@php
    // Defensive variable initialization
    $services = $services ?? [];
    $services = array_filter($services);
    $title = $title ?? 'Our Services';
    $subtitle = $subtitle ?? '';
    $layout = $layout ?? 'grid';
    $columns = $columns ?? 3;
    $bgColor = $bgColor ?? 'bg-white';
    $textColor = $textColor ?? 'text-gray-900';
    $containerClass = $containerClass ?? 'container mx-auto px-4';
    $sectionClass = $sectionClass ?? 'py-16';
    $show_cta = $show_cta ?? true;

    $gridClasses = [
        1 => 'grid-cols-1',
        2 => 'grid-cols-1 md:grid-cols-2',
        3 => 'grid-cols-1 md:grid-cols-3'
    ];
    $finalGridClass = $gridClasses[$columns] ?? $gridClasses[2];
@endphp

<!-- Services Section -->
<section id="services" class="{{ $padding }} {{ $bgColor }} {{ $textColor }} font-{{ $fontFamily }}">
    <div class="{{ $containerClass }}">
        <h2 class="{{ $titleClass }}">{{ $title }}</h2>
        @if($subtitle)
            <p class="{{ $subtitleClass }}">{{ $subtitle }}</p>
        @endif

        @if(count($services) > 0)
            <div class="grid {{ $finalGridClass }} gap-8">
                @foreach ($services as $service)
                    <div class="{{ $serviceCardClass }} {{ $borderRadius }} {{ $shadowLevel }}">
                        @if(isset($service['image']))
                            <img src="{{ $service['image'] }}" alt="{{ $service['title'] ?? 'Service Image' }}" class="{{ $serviceImageClass }} {{ $borderRadius }}" />
                        @endif

                        <h3 class="{{ $serviceTitleClass }}">{{ $service['title'] }}</h3>

                        <p class="{{ $serviceDescClass }}">{{ $service['description'] }}</p>

                        @if($showButtons)
                            <a href="{{ $service['url'] ?? '#' }}" class="{{ $serviceButtonClass }} {{ $borderRadius }}">
                                {{ $service['buttonText'] ?? $serviceButtonText }}
                            </a>
                        @endif
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
