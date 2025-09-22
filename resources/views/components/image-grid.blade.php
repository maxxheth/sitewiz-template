@props([
    'title' => 'Our Gallery',
    'subtitle' => 'Browse through our collection of memorable moments.',
    'images' => [],
    'columns' => 4, // 1, 2, 3, 4, 6
    'aspectRatio' => 'aspect-square', // 'aspect-square', 'aspect-video', 'aspect-[4/3]', etc.
    'bgColor' => 'bg-white',
    'textColor' => 'text-gray-900',
    'padding' => 'py-16',
    'containerClass' => 'container mx-auto px-4',
    'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-center',
    'subtitleClass' => 'text-lg text-gray-600 mb-12 text-center max-w-2xl mx-auto',
    'gridClass' => '', // Will be set based on columns
    'imageClass' => 'w-full h-full object-cover rounded-lg hover:scale-105 transition-transform duration-300',
    'imageWrapperClass' => 'overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-shadow',
    'showOverlay' => false,
    'overlayClass' => 'absolute inset-0 bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center',
    'lightbox' => false
])

@php
    $gridClasses = [
        1 => 'grid-cols-1',
        2 => 'grid-cols-1 md:grid-cols-2',
        3 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
        4 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4',
        6 => 'grid-cols-2 md:grid-cols-3 lg:grid-cols-6'
    ];
    $finalGridClass = $gridClass ?: ($gridClasses[$columns] ?? $gridClasses[4]);
@endphp

<!-- Image Grid Section -->
<section class="{{ $padding }} {{ $textColor }} {{ $bgColor }}">
    <div class="{{ $containerClass }}">
        @if($headerSlot ?? false)
            {{ $headerSlot }}
        @else
            @if($title)
                <h2 class="{{ $titleClass }}">
                    @if($titleSlot ?? false)
                        {{ $titleSlot }}
                    @else
                        {{ $title }}
                    @endif
                </h2>
            @endif
            
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
        
        @if($imagesSlot ?? false)
            {{ $imagesSlot }}
        @elseif(count($images) > 0)
            <div class="grid {{ $finalGridClass }} gap-4">
                @foreach($images as $index => $image)
                    <div class="{{ $imageWrapperClass }} {{ $aspectRatio }} relative">
                        @if($lightbox)
                            <a href="{{ is_array($image) ? $image['src'] : $image }}" 
                               data-lightbox="gallery" 
                               @if(is_array($image) && isset($image['caption']))
                                   data-title="{{ $image['caption'] }}"
                               @endif
                            >
                        @endif
                        
                        <img 
                            src="{{ is_array($image) ? $image['src'] : $image }}" 
                            alt="{{ is_array($image) ? ($image['alt'] ?? 'Gallery image ' . ($index + 1)) : 'Gallery image ' . ($index + 1) }}" 
                            class="{{ $imageClass }}"
                            @if($lightbox) loading="lazy" @endif
                        >
                        
                        @if($showOverlay)
                            <div class="{{ $overlayClass }}">
                                @if(is_array($image) && isset($image['caption']))
                                    <p class="text-white text-center font-semibold">{{ $image['caption'] }}</p>
                                @endif
                            </div>
                        @endif
                        
                        @if($lightbox)
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
        
        @if($slot->isNotEmpty())
            <div class="mt-8">
                {{ $slot }}
            </div>
        @endif
    </div>
</section>

@if($lightbox)
    @push('scripts')
    <script>
        // Simple lightbox functionality
        document.addEventListener('DOMContentLoaded', function() {
            const galleryLinks = document.querySelectorAll('[data-lightbox="gallery"]');
            
            galleryLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Add your preferred lightbox library here
                    // For now, just open in new tab
                    window.open(this.href, '_blank');
                });
            });
        });
    </script>
    @endpush
@endif 