@props([
    'title' => 'Latest Blog Posts',
    'subtitle' => 'Stay updated with our latest insights and updates',
    'bgColor' => 'bg-gray-900',
    'textColor' => 'text-white',
    'titleSize' => 'text-4xl md:text-5xl',
    'subtitleSize' => 'text-lg md:text-xl',
    'padding' => 'py-20',
    'alignment' => 'text-center',
    'containerClass' => 'container mx-auto px-4',
    'titleClass' => 'font-bold mb-4',
    'subtitleClass' => 'text-gray-300 max-w-2xl mx-auto'
])

<!-- Blog Hero Section -->
<section class="{{ $padding }} {{ $textColor }} {{ $bgColor }}">
    <div class="{{ $containerClass }}">
        <div class="{{ $alignment }}">
            @isset($headerSlot)
                {{ $headerSlot }}
            @else
                <h1 class="{{ $titleSize }} {{ $titleClass }}">
                    @if($titleSlot ?? false)
                        {{ $titleSlot }}
                    @else
                        {{ $title }}
                    @endif
                </h1>
                
                @if($subtitle || ($subtitleSlot ?? false))
                    <p class="{{ $subtitleSize }} {{ $subtitleClass }}">
                        @if($subtitleSlot ?? false)
                            {{ $subtitleSlot }}
                        @else
                            {{ $subtitle }}
                        @endif
                    </p>
                @endif
            @endisset
            
            @if($slot->isNotEmpty())
                <div class="mt-8">
                    {{ $slot }}
                </div>
            @endif
        </div>
    </div>
</section> 