@props([
    'title' => '',
    'image' => '',
    'category' => '',
    'summary' => 'A brief summary of the blog post goes here to entice the reader...',
    'link' => '#',
    'author' => '',
    'date' => '',
    'readTime' => '',
    'layout' => 'card',
    'target' => '_self',
    'showImage' => true,

    // Design System Integration - Use semantic Tailwind color classes
    'bgColor' => 'bg-neutral-50',
    'textColor' => 'text-neutral-900',
    'accentColor' => 'text-accent-600',
    'fontFamily' => 'body',
    'borderRadius' => 'rounded-lg',
    'shadowLevel' => 'shadow-lg',

    // Styling Classes
    'borderColor' => 'border-accent-600',
    'hoverColor' => 'hover:text-accent-600',
    'cardClass' => 'overflow-hidden border-t-4 transition-shadow duration-300 group hover:shadow-xl',
    'imageClass' => 'object-cover w-full h-56',
    'contentClass' => 'p-6',
    'titleClass' => 'mb-3 text-xl font-bold transition-colors',
    'summaryClass' => 'text-base text-neutral-700',
    'metaClass' => 'text-sm text-neutral-500 mt-4',
])
@php
    // Defensive variable initialization
    $title = $title ?? 'Post Title';
    $excerpt = $excerpt ?? '';
    $image = $image ?? '';
    $image_alt = $image_alt ?? 'Post image';
    $date = $date ?? '';
    $author = $author ?? '';
    $read_time = $read_time ?? '';
    $link = $link ?? '#';
    $category = $category ?? '';
    $tags = $tags ?? [];
    $tags = array_filter($tags);

    $designClasses = "font-{$fontFamily}";
@endphp

<!-- Blog Post Card using custom Tailwind semantic color classes -->
<div class="{{ $cardClass }} {{ $bgColor }} {{ $borderColor }} {{ $borderRadius }} {{ $shadowLevel }} {{ $designClasses }}">
    <a href="{{ $link }}" target="{{ $target }}" class="block">
        @if($showImage && $image)
            <img src="{{ $image }}" alt="{{ $title }}" class="{{ $imageClass }}">
        @endif

        <div class="{{ $contentClass }}">
            <h3 class="{{ $titleClass }} {{ $textColor }} group-hover:{{ $accentColor }}">
                {{ $title }}
            </h3>

            @if($summary)
                <p class="{{ $summaryClass }}">
                    {{ strlen($summary) > 120 ? substr($summary, 0, 120) . '...' : $summary }}
                </p>
            @endif

            @if($author || $date || $readTime)
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
        </div>
    </a>
</div>
