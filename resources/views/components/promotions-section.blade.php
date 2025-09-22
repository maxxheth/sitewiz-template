@props([
    'title' => 'Special Offers',
    'subtitle' => 'Don\'t miss out on our latest promotions and exclusive deals.',
    'promotions' => [],
    'layout' => 'cards', // 'cards', 'banner', 'carousel'
    'columns' => 3, // 1, 2, 3, 4 (for cards layout)
    'bgColor' => 'bg-gradient-to-br from-purple-900 to-blue-900',
    'textColor' => 'text-white',
    'padding' => 'py-16',
    'containerClass' => 'container mx-auto px-4',
    'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-center',
    'subtitleClass' => 'text-lg mb-12 text-center max-w-2xl mx-auto opacity-90',
    'cardClass' => 'bg-white bg-opacity-10 backdrop-blur-lg rounded-lg p-6 hover:bg-opacity-20 transition-all duration-300',
    'cardTitleClass' => 'text-xl font-semibold mb-2',
    'cardDescClass' => 'text-sm opacity-80 mb-4',
    'cardButtonClass' => 'px-4 py-2 bg-white bg-opacity-20 hover:bg-opacity-30 rounded-md text-sm font-medium transition-all duration-300',
    'showTimer' => false,
    'timerClass' => 'text-yellow-400 font-mono text-sm mt-2'
])

@php
    $gridClasses = [
        1 => 'grid-cols-1',
        2 => 'grid-cols-1 md:grid-cols-2',
        3 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
        4 => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4'
    ];
    $finalGridClass = $gridClasses[$columns] ?? $gridClasses[3];
@endphp

<!-- Promotions Section -->
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
        
        @if($promotionsSlot ?? false)
            {{ $promotionsSlot }}
        @elseif(count($promotions) > 0)
            @if($layout === 'cards')
                <div class="grid {{ $finalGridClass }} gap-6">
                    @foreach($promotions as $promotion)
                        <div class="{{ $cardClass }}">
                            @if(isset($promotion['badge']))
                                <div class="inline-block px-3 py-1 mb-3 text-xs font-semibold bg-yellow-400 text-black rounded-full">
                                    {{ $promotion['badge'] }}
                                </div>
                            @endif
                            
                            @if(isset($promotion['title']))
                                <h3 class="{{ $cardTitleClass }}">{{ $promotion['title'] }}</h3>
                            @endif
                            
                            @if(isset($promotion['description']))
                                <p class="{{ $cardDescClass }}">{{ $promotion['description'] }}</p>
                            @endif
                            
                            @if(isset($promotion['discount']))
                                <div class="text-2xl font-bold text-yellow-400 mb-2">
                                    {{ $promotion['discount'] }}
                                </div>
                            @endif
                            
                            @if($showTimer && isset($promotion['expires']))
                                <div class="{{ $timerClass }}" data-expires="{{ $promotion['expires'] }}">
                                    Expires: {{ $promotion['expires'] }}
                                </div>
                            @endif
                            
                            @if(isset($promotion['button']))
                                <a href="{{ $promotion['button']['link'] ?? '#' }}" 
                                   class="{{ $cardButtonClass }}">
                                    {{ $promotion['button']['text'] ?? 'Learn More' }}
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
            @elseif($layout === 'banner')
                <div class="bg-white bg-opacity-10 backdrop-blur-lg rounded-lg p-8 text-center">
                    @if(isset($promotions[0]))
                        @php $promo = $promotions[0]; @endphp
                        @if(isset($promo['title']))
                            <h3 class="text-4xl font-bold mb-4">{{ $promo['title'] }}</h3>
                        @endif
                        @if(isset($promo['description']))
                            <p class="text-lg mb-6 opacity-90">{{ $promo['description'] }}</p>
                        @endif
                        @if(isset($promo['button']))
                            <a href="{{ $promo['button']['link'] ?? '#' }}" 
                               class="px-8 py-3 bg-white text-purple-900 font-semibold rounded-lg hover:bg-opacity-90 transition-all duration-300">
                                {{ $promo['button']['text'] ?? 'Get Offer' }}
                            </a>
                        @endif
                    @endif
                </div>
            @endif
        @endif
        
        @if($slot->isNotEmpty())
            <div class="mt-8">
                {{ $slot }}
            </div>
        @endif
    </div>
</section>

@if($showTimer)
    @push('scripts')
    <script>
        // Timer functionality for promotions
        document.addEventListener('DOMContentLoaded', function() {
            const timers = document.querySelectorAll('[data-expires]');
            
            timers.forEach(timer => {
                const expiryDate = new Date(timer.getAttribute('data-expires'));
                
                function updateTimer() {
                    const now = new Date();
                    const diff = expiryDate - now;
                    
                    if (diff > 0) {
                        const days = Math.floor(diff / (1000 * 60 * 60 * 24));
                        const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
                        const seconds = Math.floor((diff % (1000 * 60)) / 1000);
                        
                        timer.textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
                    } else {
                        timer.textContent = 'Expired';
                        timer.classList.add('line-through', 'opacity-50');
                    }
                }
                
                updateTimer();
                setInterval(updateTimer, 1000);
            });
        });
    </script>
    @endpush
@endif 