@props([
    'logo' => 'Your Blog',
    'logoLink' => '/',
    'tagline' => 'Insights, stories, and updates',
    'bgColor' => 'bg-gray-900',
    'textColor' => 'text-white',
    'logoColor' => 'text-purple-400',
    'taglineColor' => 'text-gray-400',
    'hoverColor' => 'hover:text-purple-400',
    'padding' => 'py-8',
    'containerClass' => 'container mx-auto px-4',
    'logoClass' => 'text-2xl md:text-3xl font-bold transition-colors',
    'taglineClass' => 'text-sm md:text-base mt-2',
    'navClass' => 'flex flex-wrap gap-6 mt-4',
    'navLinkClass' => 'text-sm font-medium transition-colors',
    'showNav' => true,
    'showTagline' => true,
    'navigation' => [
        ['text' => 'All Posts', 'link' => '/blog'],
        ['text' => 'Categories', 'link' => '/categories'],
        ['text' => 'Tags', 'link' => '/tags'],
        ['text' => 'About', 'link' => '/about']
    ],
    'currentPath' => '',
    'alignment' => 'text-center', // 'text-left', 'text-center', 'text-right'
    'layout' => 'stacked' // 'stacked', 'horizontal'
])

<!-- Blog Header -->
<header class="{{ $padding }} {{ $textColor }} {{ $bgColor }}">
    <div class="{{ $containerClass }}">
        @if($layout === 'horizontal')
            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                <div class="{{ $alignment }}">
                    @if($logoSlot ?? false)
                        {{ $logoSlot }}
                    @else
                        <a href="{{ $logoLink }}" class="{{ $logoClass }} {{ $logoColor }}">
                            {{ $logo }}
                        </a>
                    @endif
                    
                    @if($showTagline && ($tagline || ($taglineSlot ?? false)))
                        <p class="{{ $taglineClass }} {{ $taglineColor }}">
                            @if($taglineSlot ?? false)
                                {{ $taglineSlot }}
                            @else
                                {{ $tagline }}
                            @endif
                        </p>
                    @endif
                </div>
                
                @if($showNav)
                    <nav class="{{ $navClass }} md:mt-0">
                        @if($navigationSlot ?? false)
                            {{ $navigationSlot }}
                        @else
                            @foreach($navigation as $item)
                                <a href="{{ $item['link'] }}" 
                                   class="{{ $navLinkClass }} {{ $textColor }} {{ $hoverColor }} {{ $currentPath === $item['link'] ? $logoColor : '' }}">
                                    {{ $item['text'] }}
                                </a>
                            @endforeach
                        @endif
                    </nav>
                @endif
            </div>
        @else
            <!-- Stacked layout -->
            <div class="{{ $alignment }}">
                @if($logoSlot ?? false)
                    {{ $logoSlot }}
                @else
                    <a href="{{ $logoLink }}" class="{{ $logoClass }} {{ $logoColor }}">
                        {{ $logo }}
                    </a>
                @endif
                
                @if($showTagline && ($tagline || ($taglineSlot ?? false)))
                    <p class="{{ $taglineClass }} {{ $taglineColor }}">
                        @if($taglineSlot ?? false)
                            {{ $taglineSlot }}
                        @else
                            {{ $tagline }}
                        @endif
                    </p>
                @endif
                
                @if($showNav)
                    <nav class="{{ $navClass }} justify-center">
                        @if($navigationSlot ?? false)
                            {{ $navigationSlot }}
                        @else
                            @foreach($navigation as $item)
                                <a href="{{ $item['link'] }}" 
                                   class="{{ $navLinkClass }} {{ $textColor }} {{ $hoverColor }} {{ $currentPath === $item['link'] ? $logoColor : '' }}">
                                    {{ $item['text'] }}
                                </a>
                            @endforeach
                        @endif
                    </nav>
                @endif
            </div>
        @endif
        
        @if($slot->isNotEmpty())
            <div class="mt-6">
                {{ $slot }}
            </div>
        @endif
    </div>
</header> 