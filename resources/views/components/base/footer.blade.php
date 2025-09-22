@props([
    'companyName' => 'CI Web Group',
    'address' => '1234 Elm Street, Suite 567, Springfield, IL 62704',
    'city' => 'Springfield',
    'state' => 'IL',
    'phone' => '(555) 123-4567',
    'tagline' => 'Fueled by Data, Driven by Success.',
    'year' => date('Y'),
    'layout' => 'four-column',
    'showSocial' => true,
    'showNewsletter' => true,
    'newsletterTitle' => 'Sign Up for Our Newsletter',
    'newsletterDescription' => 'Get the latest insights, strategies, and news delivered to your inbox.',
    'newsletterButtonText' => 'Subscribe',
    'newsletterPlaceholder' => 'Enter your email address',
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
                ['text' => 'Meet The Team', 'url' => '/team'],
                ['text' => 'Careers', 'url' => '/careers'],
                ['text' => 'Contact', 'url' => '/contact']
            ]
        ],
        [
            'title' => 'Services',
            'links' => [
                ['text' => 'Websites', 'url' => '/services/websites'],
                ['text' => 'SEO', 'url' => '/services/seo'],
                ['text' => 'Digital Advertising', 'url' => '/services/advertising'],
                ['text' => 'Social Media', 'url' => '/services/social']
            ]
        ],
        [
            'title' => 'Resources',
            'links' => [
                ['text' => 'Blog', 'url' => '/blog'],
                ['text' => 'Case Studies', 'url' => '/case-studies'],
                ['text' => 'Privacy Policy', 'url' => '/privacy']
            ]
        ]
    ],

    // Tailwind/daisyUI semantic colors only
    'bgColor' => 'bg-primary-inverted',
    'textColor' => 'text-font-primary',
    'accentColor' => 'text-font-secondary',
    'buttonClass' => 'text-font-primary bg-surface-brand-primary px-8 py-3 font-bold uppercase',
    'fontFamily' => 'sans',
    'padding' => 'py-12 px-4',
    'borderRadius' => 'rounded-md',

    // Styling Classes - Tailwind/daisyUI semantic colors only
    'containerClass' => 'container mx-auto',
    'logoClass' => 'text-2xl font-extrabold mb-2 uppercase text-primary-500',
    'taglineClass' => 'text-neutral-400 mb-6',
    'copyrightClass' => 'text-sm text-neutral-500',
    'sectionTitleClass' => 'text-lg font-bold mb-4 uppercase text-primary-500',
    'linkClass' => 'text-sm transition-colors',
    'linkColor' => 'text-neutral-300',
    'hoverColor' => 'hover:text-accent-500',
    'borderColor' => 'border-neutral-800',
    'socialLinkClass' => 'p-2 text-neutral-400 hover:text-accent-500 transition-colors',
])
@php
    // Defensive variable initialization
    $business_name = $business_name ?? '';
    $business_phone = $business_phone ?? '';
    $business_email = $business_email ?? '';
    $business_address = $business_address ?? '';
    $social_links = $social_links ?? [];
    $social_links = array_filter($social_links);
    $footer_links = $footer_links ?? [];
    $footer_links = array_filter($footer_links);
    $services = $services ?? [];
    $services = array_filter($services);
    $bgColor = $bgColor ?? 'bg-gray-900';
    $textColor = $textColor ?? 'text-white';
    $copyright_text = $copyright_text ?? '';

    // Fallback logic to parse address if city/state are not explicitly provided
    if (!empty($address) && (empty($city) || empty($state))) {
        $addressParts = explode(',', $address);
        if (count($addressParts) >= 3) {
            $city = trim($addressParts[1]);
            $stateAndZip = explode(' ', trim($addressParts[2]));
            if (count($stateAndZip) >= 1) {
                $state = $stateAndZip[0];
            }
        }
    }

    $gridClasses = [
        'single-column' => 'grid-cols-1',
        'two-column' => 'grid-cols-1 md:grid-cols-2',
        'three-column' => 'grid-cols-1 md:grid-cols-3',
        'four-column' => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-4'
    ];
    $gridClass = $gridClasses[$layout] ?? $gridClasses['four-column'];
    $designClasses = "font-{$fontFamily}";
@endphp

<!-- Footer using Tailwind/daisyUI semantic colors only -->
<footer class="{{ $padding }} {{ $textColor }} {{ $bgColor }} {{ $designClasses }}">
    <div class="{{ $containerClass }}">
        <div class="grid {{ $gridClass }} gap-8">
            <!-- Company Info -->
            <div class="md:col-span-2 lg:col-span-1 block">
                <h3 class="{{ $logoClass }}">{{ $companyName }}</h3>
                @if($address)
                    <p class="text-sm">{{ $address }}</p>
                @endif
                @if($phone)
                    <p class="text-sm">{{ $phone }}</p>
                @endif

                <x-base.google-map
                    :address="$address"
                    :city="$city"
                    :state="$state"
                    :apiKey="env('GOOGLE_MAPS_API_KEY', 'YOUR_API_KEY')"
                />

                @if($showSocial && count($socialLinks) > 0)
                    <div class="flex space-x-3">
                        @foreach($socialLinks as $social)
                            <a href="{{ $social['url'] }}" class="{{ $socialLinkClass }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $social['name'] }}">
                                <i class="{{ $social['icon'] }} fa-lg"></i>
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Footer Sections -->
            @foreach($footerSections as $section)
                <div>
                    <h4 class="{{ $sectionTitleClass }}">{{ $section['title'] }}</h4>
                    <ul class="space-y-2">
                        @foreach($section['links'] as $link)
                            <li>
                                <a href="{{ $link['url'] }}" class="{{ $linkClass }} {{ $linkColor }} {{ $hoverColor }}">
                                    {{ $link['text'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

            <!-- Newsletter -->
            @if($showNewsletter)
                <div>
                    <h4 class="{{ $sectionTitleClass }}">{{ $newsletterTitle }}</h4>
                    <p class="{{ $taglineClass }} mb-4">{{ $newsletterDescription }}</p>
                    <form class="flex flex-col gap-2 sm:flex-row">
                        <input type="email" placeholder="{{ $newsletterPlaceholder }}" class="input input-bordered w-full text-neutral-50 bg-neutral-800 {{ $borderRadius }} border {{ $borderColor }} focus:outline-none focus:ring-2 focus:ring-accent-500 focus:border-transparent" required>
                        <button type="submit" class="btn btn-accent px-4 py-2 font-bold text-neutral-50 {{ $borderRadius }} transition-colors hover:bg-accent-600">
                            {{ $newsletterButtonText }}
                        </button>
                    </form>
                </div>
            @endif
        </div>

        <!-- Copyright -->
        <div class="mt-8 pt-8 border-t {{ $borderColor }} text-center">
            <p class="{{ $copyrightClass }}">
                © {{ $year }} {{ $companyName }}. All rights reserved.
            </p>
        </div>
    </div>
</footer>
