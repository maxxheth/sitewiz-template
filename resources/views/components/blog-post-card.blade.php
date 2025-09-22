@props([
    'title' => '',
    'image' => '',
    'category' => '',
    'summary' => 'A brief summary of the blog post goes here to entice the reader...',
    'link' => '#',
    'author' => '',
    'date' => '',
    'readTime' => '',
    'tags' => [],
    'layout' => 'card', // 'card', 'horizontal', 'minimal'
    'bgColor' => 'bg-primary-inverted',
    'textColor' => 'text-white',
    'borderColor' => 'border-tertiary',
    'hoverColor' => 'hover:text-font-tertiary',
    'categoryColor' => 'text-purple-400',
    'cardClass' => 'overflow-hidden rounded-lg border transition-transform duration-300 transform group hover:-translate-y-2',
    'imageClass' => 'object-cover w-full h-56',
    'contentClass' => 'p-6',
    'titleClass' => 'mb-3 text-xl font-bold transition-colors',
    'summaryClass' => 'text-sm text-gray-400',
    'categoryClass' => 'mb-2 text-sm font-semibold',
    'metaClass' => 'text-xs text-gray-500 mt-2',
    'tagsClass' => 'flex flex-wrap gap-1 mt-2',
    'tagClass' => 'px-2 py-1 text-xs bg-gray-800 text-gray-300 rounded',
    'showImage' => true,
    'showCategory' => true,
    'showMeta' => true,
    'showTags' => true,
    'target' => '_self'
])

<!-- Blog Post Card -->
@if($layout === 'horizontal')
    <div class="{{ $cardClass }} {{ $bgColor }} {{ $borderColor }} flex">
        <a href="{{ $link }}" target="{{ $target }}" class="flex w-full">
            @if($showImage && $image)
                <div class="w-1/3 flex-shrink-0">
                    @if($imageSlot ?? false)
                        {{ $imageSlot }}
                    @else
                        <img src="{{ $image }}" alt="{{ $title }}" class="{{ $imageClass }} h-full">
                    @endif
                </div>
            @endif
            
            <div class="{{ $contentClass }} flex-1">
                @if($contentSlot ?? false)
                    {{ $contentSlot }}
                @else
                    @if($showCategory && $category)
                        <p class="{{ $categoryClass }} {{ $categoryColor }}">{{ $category }}</p>
                    @endif
                    
                    <h3 class="{{ $titleClass }} {{ $textColor }} {{ $hoverColor }}">
                        @if($titleSlot ?? false)
                            {{ $titleSlot }}
                        @else
                            {{ $title }}
                        @endif
                    </h3>
                    
                    @if($summary || ($summarySlot ?? false))
                        <p class="{{ $summaryClass }}">
                            @if($summarySlot ?? false)
                                {{ $summarySlot }}
                            @else
                                {{ $summary }}
                            @endif
                        </p>
                    @endif
                    
                    @if($showMeta && ($author || $date || $readTime))
                        <div class="{{ $metaClass }}">
                            @if($author)
                                <span>By {{ $author }}</span>
                            @endif
                            @if($date)
                                <span>{{ $author ? ' • ' : '' }}{{ $date }}</span>
                            @endif
                            @if($readTime)
                                <span>{{ ($author || $date) ? ' • ' : '' }}{{ $readTime }}</span>
                            @endif
                        </div>
                    @endif
                    
                    @if($showTags && count($tags) > 0)
                        <div class="{{ $tagsClass }}">
                            @foreach($tags as $tag)
                                <span class="{{ $tagClass }}">{{ $tag }}</span>
                            @endforeach
                        </div>
                    @endif
                @endif
            </div>
        </a>
    </div>
@elseif($layout === 'minimal')
    <div class="{{ $cardClass }} {{ $bgColor }} {{ $borderColor }}">
        <a href="{{ $link }}" target="{{ $target }}" class="block">
            <div class="{{ $contentClass }}">
                @if($contentSlot ?? false)
                    {{ $contentSlot }}
                @else
                    @if($showCategory && $category)
                        <p class="{{ $categoryClass }} {{ $categoryColor }}">{{ $category }}</p>
                    @endif
                    
                    <h3 class="{{ $titleClass }} {{ $textColor }} {{ $hoverColor }}">
                        @if($titleSlot ?? false)
                            {{ $titleSlot }}
                        @else
                            {{ $title }}
                        @endif
                    </h3>
                    
                    @if($showMeta && ($author || $date || $readTime))
                        <div class="{{ $metaClass }}">
                            @if($author)
                                <span>By {{ $author }}</span>
                            @endif
                            @if($date)
                                <span>{{ $author ? ' • ' : '' }}{{ $date }}</span>
                            @endif
                            @if($readTime)
                                <span>{{ ($author || $date) ? ' • ' : '' }}{{ $readTime }}</span>
                            @endif
                        </div>
                    @endif
                @endif
            </div>
        </a>
    </div>
@else
    <!-- Default card layout -->
    <div class="{{ $cardClass }} {{ $bgColor }} {{ $borderColor }}">
        <a href="{{ $link }}" target="{{ $target }}" class="block">
            @if($showImage && $image)
                @if($imageSlot ?? false)
                    {{ $imageSlot }}
                @else
                    <img src="{{ $image }}" alt="{{ $title }}" class="{{ $imageClass }}">
                @endif
            @endif
            
            <div class="{{ $contentClass }}">
                @if($contentSlot ?? false)
                    {{ $contentSlot }}
                @else
                    @if($showCategory && $category)
                        <p class="{{ $categoryClass }} {{ $categoryColor }}">{{ $category }}</p>
                    @endif
                    
                    <h3 class="{{ $titleClass }} {{ $textColor }} {{ $hoverColor }}">
                        @if($titleSlot ?? false)
                            {{ $titleSlot }}
                        @else
                            {{ $title }}
                        @endif
                    </h3>
                    
                    @if($summary || ($summarySlot ?? false))
                        <p class="{{ $summaryClass }}">
                            @if($summarySlot ?? false)
                                {{ $summarySlot }}
                            @else
                                {{ $summary }}
                            @endif
                        </p>
                    @endif
                    
                    @if($showMeta && ($author || $date || $readTime))
                        <div class="{{ $metaClass }}">
                            @if($author)
                                <span>By {{ $author }}</span>
                            @endif
                            @if($date)
                                <span>{{ $author ? ' • ' : '' }}{{ $date }}</span>
                            @endif
                            @if($readTime)
                                <span>{{ ($author || $date) ? ' • ' : '' }}{{ $readTime }}</span>
                            @endif
                        </div>
                    @endif
                    
                    @if($showTags && count($tags) > 0)
                        <div class="{{ $tagsClass }}">
                            @foreach($tags as $tag)
                                <span class="{{ $tagClass }}">{{ $tag }}</span>
                            @endforeach
                        </div>
                    @endif
                @endif
            </div>
        </a>
    </div>
@endif

@if($slot->isNotEmpty())
    <div class="mt-4">
        {{ $slot }}
    </div>
@endif 