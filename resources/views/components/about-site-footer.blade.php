@props([
    'companyName' => 'Your Company',
    'tagline' => 'Innovating for a better tomorrow',
    'year' => date('Y'),
    'bgColor' => 'bg-gray-900',
    'textColor' => 'text-white',
    'accentColor' => 'text-purple-400',
    'linkColor' => 'text-gray-300',
    'hoverColor' => 'hover:text-purple-400',
    'borderColor' => 'border-gray-700',
    'padding' => 'py-16',
    'containerClass' => 'container mx-auto px-4',
    'logoClass' => 'text-3xl font-bold mb-4',
    'taglineClass' => 'text-gray-400 mb-6 text-lg',
    'copyrightClass' => 'text-sm text-gray-500',
    'sectionTitleClass' => 'text-xl font-semibold mb-6',
    'linkClass' => 'text-sm transition-colors block mb-2',
    'socialLinkClass' => 'w-10 h-10 rounded-full border border-gray-600 hover:border-purple-400 flex items-center justify-center transition-colors',
    'showSocial' => true,
    'showNewsletter' => true,
    'showAwards' => false,
    'layout' => 'comprehensive', // 'comprehensive', 'simple', 'minimal'
    'socialLinks' => [
        ['name' => 'Facebook', 'url' => '#', 'icon' => 'fab fa-facebook-f'],
        ['name' => 'Twitter', 'url' => '#', 'icon' => 'fab fa-twitter'],
        ['name' => 'LinkedIn', 'url' => '#', 'icon' => 'fab fa-linkedin-in'],
        ['name' => 'Instagram', 'url' => '#', 'icon' => 'fab fa-instagram'],
        ['name' => 'YouTube', 'url' => '#', 'icon' => 'fab fa-youtube']
    ],
    'footerSections' => [
        [
            'title' => 'Company',
            'links' => [
                ['text' => 'About Us', 'url' => '/about'],
                ['text' => 'Our Story', 'url' => '/story'],
                ['text' => 'Leadership', 'url' => '/leadership'],
                ['text' => 'Careers', 'url' => '/careers'],
                ['text' => 'Press', 'url' => '/press']
            ]
        ],
        [
            'title' => 'Services',
            'links' => [
                ['text' => 'Consulting', 'url' => '/services/consulting'],
                ['text' => 'Development', 'url' => '/services/development'],
                ['text' => 'Design', 'url' => '/services/design'],
                ['text' => 'Support', 'url' => '/services/support'],
                ['text' => 'Training', 'url' => '/services/training']
            ]
        ],
        [
            'title' => 'Resources',
            'links' => [
                ['text' => 'Blog', 'url' => '/blog'],
                ['text' => 'Case Studies', 'url' => '/case-studies'],
                ['text' => 'White Papers', 'url' => '/white-papers'],
                ['text' => 'Documentation', 'url' => '/docs'],
                ['text' => 'Help Center', 'url' => '/help']
            ]
        ],
        [
            'title' => 'Legal',
            'links' => [
                ['text' => 'Privacy Policy', 'url' => '/privacy'],
                ['text' => 'Terms of Service', 'url' => '/terms'],
                ['text' => 'Cookie Policy', 'url' => '/cookies'],
                ['text' => 'Security', 'url' => '/security'],
                ['text' => 'Compliance', 'url' => '/compliance']
            ]
        ]
    ],
    'contactInfo' => [
        'address' => '123 Business Ave, Suite 100, City, State 12345',
        'phone' => '+1 (555) 123-4567',
        'email' => 'contact@yourcompany.com',
        'hours' => 'Mon-Fri: 9AM-6PM'
    ],
    'awards' => [
        ['name' => 'Best Innovation Award 2023', 'image' => '', 'alt' => 'Innovation Award'],
        ['name' => 'Top Company 2023', 'image' => '', 'alt' => 'Top Company Badge']
    ],
    'newsletterTitle' => 'Stay in the Loop',
    'newsletterDescription' => 'Subscribe to our newsletter for industry insights, company updates, and exclusive content.',
    'newsletterButtonText' => 'Subscribe Now',
    'newsletterPlaceholder' => 'Enter your email address'
])

<!-- About Site Footer -->
<footer class="{{ $padding }} {{ $textColor }} {{ $bgColor }} border-t {{ $borderColor }}">
    <div class="{{ $containerClass }}">
        @if($layout === 'comprehensive')
            <div class="grid grid-cols-1 lg:grid-cols-6 gap-8">
                <!-- Company Branding & Contact -->
                <div class="lg:col-span-2">
                    @if($brandingSlot ?? false)
                        {{ $brandingSlot }}
                    @else
                        <div class="mb-8">
                            <h3 class="{{ $logoClass }} {{ $accentColor }}">{{ $companyName }}</h3>
                            @if($tagline)
                                <p class="{{ $taglineClass }}">{{ $tagline }}</p>
                            @endif
                        </div>
                        
                        <!-- Contact Information -->
                        @if($contactInfo)
                            <div class="mb-8">
                                <h4 class="{{ $sectionTitleClass }} {{ $textColor }}">Contact Info</h4>
                                <div class="space-y-3">
                                    @if($contactInfo['address'])
                                        <p class="text-sm {{ $linkColor }} flex items-start">
                                            <i class="fas fa-map-marker-alt mt-1 mr-3 {{ $accentColor }}"></i>
                                            {{ $contactInfo['address'] }}
                                        </p>
                                    @endif
                                    @if($contactInfo['phone'])
                                        <p class="text-sm {{ $linkColor }} flex items-center">
                                            <i class="fas fa-phone mr-3 {{ $accentColor }}"></i>
                                            <a href="tel:{{ $contactInfo['phone'] }}" class="{{ $hoverColor }}">{{ $contactInfo['phone'] }}</a>
                                        </p>
                                    @endif
                                    @if($contactInfo['email'])
                                        <p class="text-sm {{ $linkColor }} flex items-center">
                                            <i class="fas fa-envelope mr-3 {{ $accentColor }}"></i>
                                            <a href="mailto:{{ $contactInfo['email'] }}" class="{{ $hoverColor }}">{{ $contactInfo['email'] }}</a>
                                        </p>
                                    @endif
                                    @if($contactInfo['hours'])
                                        <p class="text-sm {{ $linkColor }} flex items-center">
                                            <i class="fas fa-clock mr-3 {{ $accentColor }}"></i>
                                            {{ $contactInfo['hours'] }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        @endif
                        
                        <!-- Social Links -->
                        @if($showSocial && count($socialLinks) > 0)
                            <div class="mb-8">
                                <h4 class="{{ $sectionTitleClass }} {{ $textColor }}">Follow Us</h4>
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
                            </div>
                        @endif
                        
                        <!-- Awards -->
                        @if($showAwards && count($awards) > 0)
                            <div>
                                <h4 class="{{ $sectionTitleClass }} {{ $textColor }}">Recognition</h4>
                                <div class="flex space-x-4">
                                    @foreach($awards as $award)
                                        @if($award['image'])
                                            <img src="{{ $award['image'] }}" alt="{{ $award['alt'] }}" class="h-12 object-contain">
                                        @else
                                            <div class="bg-gray-800 rounded p-2 text-xs text-center">{{ $award['name'] }}</div>
                                        @endif
                                    @endforeach
                                </div>
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
            </div>
            
            <!-- Newsletter Section -->
            @if($showNewsletter)
                <div class="mt-12 pt-8 border-t {{ $borderColor }}">
                    @if($newsletterSlot ?? false)
                        {{ $newsletterSlot }}
                    @else
                        <div class="text-center max-w-2xl mx-auto">
                            <h4 class="{{ $sectionTitleClass }} {{ $textColor }}">{{ $newsletterTitle }}</h4>
                            <p class="{{ $taglineClass }} mb-6">{{ $newsletterDescription }}</p>
                            <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                                <input 
                                    type="email" 
                                    placeholder="{{ $newsletterPlaceholder }}"
                                    class="flex-1 px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:border-transparent"
                                    required
                                >
                                <button 
                                    type="submit"
                                    class="px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors font-semibold"
                                >
                                    {{ $newsletterButtonText }}
                                </button>
                            </form>
                        </div>
                    @endif
                </div>
            @endif
        @elseif($layout === 'simple')
            <!-- Simple Layout -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="md:col-span-1">
                    <h3 class="{{ $logoClass }} {{ $accentColor }}">{{ $companyName }}</h3>
                    @if($tagline)
                        <p class="{{ $taglineClass }}">{{ $tagline }}</p>
                    @endif
                    @if($showSocial && count($socialLinks) > 0)
                        <div class="flex space-x-3 mt-4">
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
                </div>
                
                @foreach(array_slice($footerSections, 0, 2) as $section)
                    <div>
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
                    </div>
                @endforeach
            </div>
        @else
            <!-- Minimal Layout -->
            <div class="text-center">
                <h3 class="{{ $logoClass }} {{ $accentColor }}">{{ $companyName }}</h3>
                @if($tagline)
                    <p class="{{ $taglineClass }}">{{ $tagline }}</p>
                @endif
                @if($showSocial && count($socialLinks) > 0)
                    <div class="flex justify-center space-x-3 mt-6">
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
            </div>
        @endif
        
        @if($slot->isNotEmpty())
            <div class="mt-8">
                {{ $slot }}
            </div>
        @endif
        
        <!-- Copyright -->
        <div class="mt-12 pt-8 border-t {{ $borderColor }} text-center">
            <p class="{{ $copyrightClass }}">
                © {{ $year }} {{ $companyName }}. All rights reserved.
            </p>
        </div>
    </div>
</footer>