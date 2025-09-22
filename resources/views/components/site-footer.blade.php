@props([
    'companyName' => 'Your Company',
    'tagline' => 'Building amazing experiences',
    'year' => date('Y'),
    'bgColor' => 'bg-gray-900',
    'textColor' => 'text-white',
    'accentColor' => 'text-purple-400',
    'linkColor' => 'text-gray-400',
    'hoverColor' => 'hover:text-purple-400',
    'borderColor' => 'border-gray-700',
    'padding' => 'py-12',
    'containerClass' => 'container mx-auto px-4',
    'logoClass' => 'text-2xl font-bold mb-4',
    'taglineClass' => 'text-gray-400 mb-6',
    'copyrightClass' => 'text-xs text-gray-500',
    'sectionTitleClass' => 'text-lg font-semibold mb-4',
    'linkClass' => 'text-sm transition-colors',
    'socialLinkClass' => 'p-2 rounded-full border border-gray-700 hover:border-purple-400 transition-colors',
    'showSocial' => true,
    'showNewsletter' => true,
    'layout' => 'four-column', // 'single-column', 'two-column', 'three-column', 'four-column'
    'socialLinks' => [
        ['name' => 'Facebook', 'url' => '#', 'icon' => 'fab fa-facebook'],
        ['name' => 'Twitter', 'url' => '#', 'icon' => 'fab fa-twitter'],
        ['name' => 'Instagram', 'url' => '#', 'icon' => 'fab fa-instagram'],
        ['name' => 'LinkedIn', 'url' => '#', 'icon' => 'fab fa-linkedin']
    ],
    'footerSections' => [
        [
            'title' => 'Company',
            'links' => [
                ['text' => 'About Us', 'url' => '/about'],
                ['text' => 'Our Team', 'url' => '/team'],
                ['text' => 'Careers', 'url' => '/careers'],
                ['text' => 'Contact', 'url' => '/contact']
            ]
        ],
        [
            'title' => 'Services',
            'links' => [
                ['text' => 'Web Design', 'url' => '/services/web-design'],
                ['text' => 'Development', 'url' => '/services/development'],
                ['text' => 'Consulting', 'url' => '/services/consulting'],
                ['text' => 'Support', 'url' => '/services/support']
            ]
        ],
        [
            'title' => 'Resources',
            'links' => [
                ['text' => 'Blog', 'url' => '/blog'],
                ['text' => 'Documentation', 'url' => '/docs'],
                ['text' => 'Help Center', 'url' => '/help'],
                ['text' => 'Privacy Policy', 'url' => '/privacy']
            ]
        ]
    ],
    'newsletterTitle' => 'Stay Connected',
    'newsletterDescription' => 'Subscribe to our newsletter for the latest updates and insights.',
    'newsletterButtonText' => 'Subscribe',
    'newsletterPlaceholder' => 'Enter your email address'
])

@php
    $gridClasses = [
        'single-column' => 'grid-cols-1',
        'two-column' => 'grid-cols-1 md:grid-cols-2',
        'three-column' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
        'four-column' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4'
    ];
    $gridClass = $gridClasses[$layout] ?? $gridClasses['four-column'];
@endphp

<!-- Site Footer -->
<footer class="{{ $padding }} {{ $textColor }} {{ $bgColor }} border-t {{ $borderColor }}">
    <div class="{{ $containerClass }}">
        @if($layout === 'single-column')
            <div class="text-center">
                @if($brandSlot ?? false)
                    {{ $brandSlot }}
                @else
                    <h3 class="{{ $logoClass }} {{ $accentColor }}">{{ $companyName }}</h3>
                    @if($tagline)
                        <p class="{{ $taglineClass }}">{{ $tagline }}</p>
                    @endif
                @endif
                
                @if($showSocial && count($socialLinks) > 0)
                    <div class="flex justify-center mb-6 space-x-3">
                        @foreach($socialLinks as $social)
                            <a href="{{ $social['url'] }}" 
                               class="{{ $socialLinkClass }} {{ $linkColor }} {{ $hoverColor }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               aria-label="{{ $social['name'] }}">
                                <i class="{{ $social['icon'] }}"></i>
                            </a>
                        @endforeach
                    </div>
                @endif
                
                <!-- Navigation Links -->
                @if(count($footerSections) > 0)
                    <div class="flex flex-wrap gap-6 justify-center mb-6">
                        @foreach($footerSections as $section)
                            @foreach($section['links'] as $link)
                                <a href="{{ $link['url'] }}" 
                                   class="{{ $linkClass }} {{ $linkColor }} {{ $hoverColor }}">
                                    {{ $link['text'] }}
                                </a>
                            @endforeach
                        @endforeach
                    </div>
                @endif
            </div>
        @else
            <div class="grid {{ $gridClass }} gap-8">
                <!-- Company Info -->
                <div class="@if($layout === 'four-column') lg:col-span-1 @endif">
                    @if($brandSlot ?? false)
                        {{ $brandSlot }}
                    @else
                        <h3 class="{{ $logoClass }} {{ $accentColor }}">{{ $companyName }}</h3>
                        @if($tagline)
                            <p class="{{ $taglineClass }}">{{ $tagline }}</p>
                        @endif
                        
                        @if($showSocial && count($socialLinks) > 0)
                            <div class="flex space-x-3">
                                @foreach($socialLinks as $social)
                                    <a href="{{ $social['url'] }}" 
                                       class="{{ $socialLinkClass }} {{ $linkColor }} {{ $hoverColor }}"
                                       target="_blank"
                                       rel="noopener noreferrer"
                                       aria-label="{{ $social['name'] }}">
                                        <i class="{{ $social['icon'] }}"></i>
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    @endif
                </div>
                
                <!-- Footer Sections -->
                @foreach($footerSections as $section)
                    <div>
                        @if($sectionSlot ?? false)
                            {{ $sectionSlot }}
                        @else
                            <h4 class="{{ $sectionTitleClass }} {{ $textColor }}">{{ $section['title'] }}</h4>
                            <ul class="space-y-2">
                                @foreach($section['links'] as $link)
                                    <li>
                                        <a href="{{ $link['url'] }}" 
                                           class="{{ $linkClass }} {{ $linkColor }} {{ $hoverColor }}">
                                            {{ $link['text'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @endforeach
                
                <!-- Newsletter -->
                @if($showNewsletter)
                    <div class="@if($layout === 'four-column') lg:col-span-1 @endif">
                        @if($newsletterSlot ?? false)
                            {{ $newsletterSlot }}
                        @else
                            <h4 class="{{ $sectionTitleClass }} {{ $textColor }}">{{ $newsletterTitle }}</h4>
                            <p class="{{ $taglineClass }} mb-4">{{ $newsletterDescription }}</p>
                            <form class="space-y-3">
                                <input 
                                    type="email" 
                                    placeholder="{{ $newsletterPlaceholder }}"
                                    class="px-4 py-2 w-full placeholder-gray-400 text-white bg-gray-800 rounded-md border border-gray-600 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent"
                                    required
                                >
                                <button 
                                    type="submit"
                                    class="px-4 py-2 w-full font-medium text-white bg-purple-600 rounded-md transition-colors hover:bg-purple-700"
                                >
                                    {{ $newsletterButtonText }}
                                </button>
                            </form>
                        @endif
                    </div>
                @endif
            </div>
        @endif
        
        @if($slot->isNotEmpty())
            <div class="mt-8">
                {{ $slot }}
            </div>
        @endif
        
        <!-- Copyright -->
        <div class="mt-8 pt-8 border-t {{ $borderColor }} text-center">
            <p class="{{ $copyrightClass }}">
                © {{ $year }} {{ $companyName }}. All rights reserved.
            </p>
        </div>
    </div>
</footer> 