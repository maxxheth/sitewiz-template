@props([
    'title' => 'About Our Company',
    'content' => 'We are dedicated to providing exceptional service and innovative solutions that exceed our clients\' expectations.',
    'layout' => 'single', // 'single', 'two-column', 'image-left', 'image-right'
    'image' => null,
    'imageAlt' => 'About us image',
    'bgColor' => 'bg-white',
    'textColor' => 'text-gray-900',
    'padding' => 'py-16',
    'containerClass' => 'container mx-auto px-4',
    'titleClass' => 'text-3xl md:text-4xl font-bold mb-6',
    'contentClass' => 'text-lg leading-relaxed',
    'imageClass' => 'w-full h-auto rounded-lg shadow-lg',
    'alignment' => 'text-left'
])

<!-- About Content Section -->
<section class="{{ $padding }} {{ $textColor }} {{ $bgColor }}">
    <div class="{{ $containerClass }}">
        @if($layout === 'single')
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
                @endif
                
                @if($contentSlot ?? false)
                    <div class="{{ $contentClass }}">
                        {{ $contentSlot }}
                    </div>
                @else
                    <div class="{{ $contentClass }}">
                        {{ $content }}
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
                        <h2 class="{{ $titleClass }}">{{ $title }}</h2>
                        <div class="{{ $contentClass }}">{{ $content }}</div>
                    @endif
                </div>
                <div>
                    @if($rightSlot ?? false)
                        {{ $rightSlot }}
                    @else
                        @if($image)
                            <img src="{{ $image }}" alt="{{ $imageAlt }}" class="{{ $imageClass }}">
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
                        <img src="{{ $image }}" alt="{{ $imageAlt }}" class="{{ $imageClass }}">
                    @endif
                </div>
                <div>
                    @if($contentSlot ?? false)
                        {{ $contentSlot }}
                    @else
                        <h2 class="{{ $titleClass }}">{{ $title }}</h2>
                        <div class="{{ $contentClass }}">{{ $content }}</div>
                    @endif
                </div>
            </div>
        @elseif($layout === 'image-right')
            <div class="grid gap-8 items-center md:grid-cols-2">
                <div>
                    @if($contentSlot ?? false)
                        {{ $contentSlot }}
                    @else
                        <h2 class="{{ $titleClass }}">{{ $title }}</h2>
                        <div class="{{ $contentClass }}">{{ $content }}</div>
                    @endif
                </div>
                <div>
                    @if($imageSlot ?? false)
                        {{ $imageSlot }}
                    @elseif($image)
                        <img src="{{ $image }}" alt="{{ $imageAlt }}" class="{{ $imageClass }}">
                    @endif
                </div>
            </div>
        @endif
        
        @if($slot->isNotEmpty())
            <div class="mt-8">
                {{ $slot }}
            </div>
        @endif
    </div>
</section>