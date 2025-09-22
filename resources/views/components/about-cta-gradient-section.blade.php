@props([
    'title' => 'Ready to Get Started?',
    'subtitle' => 'Take your business to the next level with our expert solutions.',
    'buttonText' => 'Get Started Today',
    'buttonLink' => '#contact',
    'bgGradient' => 'bg-gradient-to-r from-purple-600 to-blue-600',
    'textColor' => 'text-white',
    'padding' => 'py-16 px-4',
    'alignment' => 'text-center',
    'containerClass' => 'container mx-auto',
    'titleClass' => 'text-3xl md:text-4xl font-bold mb-4',
    'subtitleClass' => 'text-lg md:text-xl mb-8 max-w-2xl mx-auto opacity-90',
    'buttonClass' => 'inline-block px-8 py-3 bg-white text-purple-600 font-semibold rounded-lg hover:bg-gray-100 transition-colors',
    'showButton' => true
])

<!-- CTA Gradient Section -->
<section class="{{ $padding }} {{ $textColor }} {{ $bgGradient }}">
    <div class="{{ $containerClass }}">
        <div class="{{ $alignment }}">
            @if($headerSlot ?? false)
                {{ $headerSlot }}
            @else
                <h2 class="{{ $titleClass }}">
                    @if($titleSlot ?? false)
                        {{ $titleSlot }}
                    @else
                        {{ $title }}
                    @endif
                </h2>
                
                @if($subtitle || ($subtitleSlot ?? false))
                    <p class="{{ $subtitleClass }}">
                        @if($subtitleSlot ?? false)
                            {{ $subtitleSlot }}
                        @else
                            {{ $subtitle }}
                        @endif
                    </p>
                @endif
            @endif
            
            @if($actionsSlot ?? false)
                <div class="mt-8">
                    {{ $actionsSlot }}
                </div>
            @elseif($showButton)
                <a href="{{ $buttonLink }}" class="{{ $buttonClass }}">
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