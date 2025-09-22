@props([
    'siteName' => 'Your Blog',
    'tagline' => 'Sharing insights and stories',
    'year' => date('Y'),
    'bgColor' => 'bg-gray-900',
    'textColor' => 'text-white',
    'accentColor' => 'text-purple-400',
    'linkColor' => 'text-gray-400',
    'hoverColor' => 'hover:text-purple-400',
    'borderColor' => 'border-gray-700',
    'padding' => 'py-8',
    'containerClass' => 'container mx-auto px-4',
    'siteNameClass' => 'text-xl font-bold mb-2',
    'taglineClass' => 'text-sm text-gray-400 mb-4',
    'copyrightClass' => 'text-xs text-gray-500',
    'linkClass' => 'text-sm font-medium transition-colors',
    'socialLinkClass' => 'p-2 rounded-full border border-gray-700 hover:border-purple-400 transition-colors',
    'showSocial' => true,
    'showLinks' => true,
    'showNewsletter' => true,
    'layout' => 'multi-column', // 'single-column', 'multi-column'
    'socialLinks' => [
        ['name' => 'Twitter', 'url' => '#', 'icon' => 'fab fa-twitter'],
        ['name' => 'LinkedIn', 'url' => '#', 'icon' => 'fab fa-linkedin'],
        ['name' => 'GitHub', 'url' => '#', 'icon' => 'fab fa-github'],
        ['name' => 'RSS', 'url' => '/rss.xml', 'icon' => 'fas fa-rss']
    ],
    'footerLinks' => [
        ['text' => 'About', 'url' => '/about'],
        ['text' => 'Contact', 'url' => '/contact'],
        ['text' => 'Privacy', 'url' => '/privacy'],
        ['text' => 'Terms', 'url' => '/terms']
    ],
    'newsletterTitle' => 'Stay Updated',
    'newsletterDescription' => 'Get the latest posts delivered right to your inbox.',
    'newsletterButtonText' => 'Subscribe',
    'newsletterPlaceholder' => 'Enter your email'
])

<!-- Blog Footer -->
<footer class="{{ $padding }} {{ $textColor }} {{ $bgColor }} border-t {{ $borderColor }}">
    <div class="{{ $containerClass }}">
        @if($layout === 'multi-column')
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Site Info -->
                <div>
                    @if($siteInfoSlot ?? false)
                        {{ $siteInfoSlot }}
                    @else
                        <h3 class="{{ $siteNameClass }} {{ $accentColor }}">{{ $siteName }}</h3>
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
                
                <!-- Quick Links -->
                @if($showLinks)
                    <div>
                        @if($linksSlot ?? false)
                            {{ $linksSlot }}
                        @else
                            <h4 class="text-lg font-semibold mb-4 {{ $textColor }}">Quick Links</h4>
                            <ul class="space-y-2">
                                @foreach($footerLinks as $link)
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
                @endif
                
                <!-- Newsletter -->
                @if($showNewsletter)
                    <div>
                        @if($newsletterSlot ?? false)
                            {{ $newsletterSlot }}
                        @else
                            <h4 class="text-lg font-semibold mb-2 {{ $textColor }}">{{ $newsletterTitle }}</h4>
                            <p class="{{ $taglineClass }} mb-4">{{ $newsletterDescription }}</p>
                            <form class="flex flex-col sm:flex-row gap-2">
                                <input 
                                    type="email" 
                                    placeholder="{{ $newsletterPlaceholder }}"
                                    class="flex-1 px-4 py-2 bg-gray-800 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent"
                                    required
                                >
                                <button 
                                    type="submit"
                                    class="px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700 transition-colors font-medium"
                                >
                                    {{ $newsletterButtonText }}
                                </button>
                            </form>
                        @endif
                    </div>
                @endif
            </div>
        @else
            <!-- Single column layout -->
            <div class="text-center">
                @if($siteInfoSlot ?? false)
                    {{ $siteInfoSlot }}
                @else
                    <h3 class="{{ $siteNameClass }} {{ $accentColor }}">{{ $siteName }}</h3>
                    @if($tagline)
                        <p class="{{ $taglineClass }}">{{ $tagline }}</p>
                    @endif
                @endif
                
                @if($showSocial && count($socialLinks) > 0)
                    <div class="flex justify-center space-x-3 mt-4">
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
                
                @if($showLinks)
                    <div class="flex justify-center space-x-6 mt-4">
                        @foreach($footerLinks as $link)
                            <a href="{{ $link['url'] }}" 
                               class="{{ $linkClass }} {{ $linkColor }} {{ $hoverColor }}">
                                {{ $link['text'] }}
                            </a>
                        @endforeach
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
                © {{ $year }} {{ $siteName }}. All rights reserved.
            </p>
        </div>
    </div>
</footer> 