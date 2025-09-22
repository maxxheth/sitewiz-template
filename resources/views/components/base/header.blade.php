@props([
    'logo' => 'CI WEB GROUP',
    'buttonText' => 'Contact Us Today',
    'phone' => '(123) 456-7890',
    'currentPage' => '',
    'navItems' => [
        ['text' => 'About', 'url' => '/about', 'key' => 'about'],
        ['text' => 'Services', 'url' => '/services', 'key' => 'services'],
        ['text' => 'Blog', 'url' => '/blog', 'key' => 'blog'],
        ['text' => 'Reviews', 'url' => '/reviews', 'key' => 'reviews'],
        ['text' => 'Contact', 'url' => '/contact-us', 'key' => 'contact']
    ],
    'serviceNavItems' => [
        ['text' => 'Consulting', 'url' => '/services/consulting', 'key' => 'consulting'],
        ['text' => 'Development', 'url' => '/services/development', 'key' => 'development'],
        ['text' => 'Design', 'url' => '/services/design', 'key' => 'design'],
        ['text' => 'Marketing', 'url' => '/services/marketing', 'key' => 'marketing'],
    ],
    'locationNavItems' => [
        ['text' => 'New York', 'url' => '/locations/new-york', 'key' => 'new-york'],
        ['text' => 'Los Angeles', 'url' => '/locations/los-angeles', 'key' => 'los-angeles'],
        ['text' => 'Chicago', 'url' => '/locations/chicago', 'key' => 'chicago'],
        ['text' => 'Houston', 'url' => '/locations/houston', 'key' => 'houston'],
    ],
    'showButton' => true,
    'sticky' => true,

    // Tailwind/daisyUI semantic colors only
    'bgColor' => 'bg-primary-inverted',
    'textColor' => 'text-font-primary',
    'accentColor' => 'text-font-secondary',
    'buttonClass' => 'text-font-primary bg-surface-brand-primary px-8 py-3 font-bold uppercase',
    'fontFamily' => 'sans',
    'borderRadius' => 'rounded-md',
    'shadowLevel' => 'shadow-lg',

    // Styling Classes - Tailwind/daisyUI semantic colors only
    'logoClass' => 'text-2xl font-extrabold uppercase text-primary-500',
    'navBg' => 'bg-neutral-50',
    'navClass' => 'hidden lg:flex items-center space-x-8 bg-surface-secondary px-4 py-2 rounded-lg shadow-md',
    'linkClass' => 'transition-colors font-semibold tracking-wide',
    'hoverColor' => 'hover:text-accent-500',
    'buttonBg' => 'bg-accent-500',
    'buttonTextColor' => 'text-white',
    'buttonHover' => 'hover:bg-accent-600',
    'mobileBg' => 'bg-neutral-50',
    'mobileMenuClass' => 'hidden lg:hidden',
    'mobileNavClass' => 'flex flex-col items-center py-4 space-y-4',
])
@php
    // Defensive variable initialization
    $business_name = $business_name ?? '';
    $business_phone = $business_phone ?? '';
    $logo_url = $logo_url ?? '';
    $nav_links = $nav_links ?? [];
    $nav_links = array_filter($nav_links);
    $services = $services ?? [];
    $services = array_filter($services);
    $cta_button = $cta_button ?? [];
    $cta_button = array_filter($cta_button);
    $bgColor = $bgColor ?? 'bg-white';
    $textColor = $textColor ?? 'text-gray-900';
    $sticky = $sticky ?? true;

    $designClasses = "font-{$fontFamily}";

    // Randomly generate phone number and assign it to $phoneNumber

    {{/*  $phoneNumber = sprintf("(%d) %d-%d",
        rand(100, 999),
        rand(100, 999),
        rand(1000, 9999)
    );  */}}

@endphp

<!-- Header using Tailwind/daisyUI semantic colors only -->
<header class="{{ $sticky ? 'sticky top-0' : '' }} z-50 {{ $bgColor }} {{ $shadowLevel }} {{ $designClasses }}">
    <div class="container flex justify-between items-center px-4 py-4 mx-auto">
        <!-- Logo -->
        <div class="{{ $logoClass }}">
            <a href="/" class="flex items-center">
                <span class="text-primary-500">CI</span><span class="text-neutral-900">WEB</span><span class="text-neutral-400">GROUP</span>
            </a>
        </div>

        <!-- Centered Navigation -->
        <nav class="{{ $navClass }} {{ $navBg }}">
            @php
                $topNav = array_filter($navItems, fn($i) => !in_array($i['key'], ['services','locations']));
            @endphp

            @foreach($topNav as $item)
                <a href="{{ $item['url'] }}"
                   class="{{ $linkClass }} {{ $textColor }} {{ $currentPage === $item['key'] ? 'font-bold ' . $accentColor : $hoverColor }}">
                    {{ $item['text'] }}
                </a>
            @endforeach

            {{-- Services dropdown --}}
            <x-base.nav-dropdown label="Services" :items="$serviceNavItems" />

            {{-- Locations dropdown --}}
            <x-base.nav-dropdown label="Locations" :items="$locationNavItems" />
        </nav>

        <!-- Action button -->
        @if($showButton)
            <div class="{{ $buttonClass }} {{ $buttonHover }} {{ $borderRadius }}">
                {{ $phone }}
            </div>
        @endif

        <!-- Mobile menu button -->
        <div class="lg:hidden">
            <button id="menu-btn" class="text-neutral-900 focus:outline-none">
                <svg id="menu-icon-open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                <svg id="menu-icon-close" xmlns="http://www.w3.org/2000/svg" class="hidden w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="{{ $mobileMenuClass }} {{ $mobileBg }}">
        <nav class="{{ $mobileNavClass }}">
            {{-- Top-level links only (no service/location explosion) --}}
            @foreach($topNav as $item)
                <a href="{{ $item['url'] }}" class="block py-2 px-4 text-sm {{ $textColor }} {{ $currentPage === $item['key'] ? 'font-bold ' . $accentColor : $hoverColor }}">
                    {{ $item['text'] }}
                </a>
            @endforeach

            {{-- Mobile lists for services and locations --}}
            @if(!empty($serviceNavItems))
                <div class="w-11/12 mt-2">
                    <div class="px-4 py-2 text-xs font-bold uppercase tracking-wide opacity-70">Services</div>
                    @foreach($serviceNavItems as $svc)
                        <a href="{{ $svc['url'] }}" class="block px-4 py-2 text-sm {{ $textColor }} {{ $hoverColor }}">{{ $svc['text'] }}</a>
                    @endforeach
                </div>
            @endif
            @if(!empty($locationNavItems))
                <div class="w-11/12 mt-2">
                    <div class="px-4 py-2 text-xs font-bold uppercase tracking-wide opacity-70">Locations</div>
                    @foreach($locationNavItems as $loc)
                        <a href="{{ $loc['url'] }}" class="block px-4 py-2 text-sm {{ $textColor }} {{ $hoverColor }}">{{ $loc['text'] }}</a>
                    @endforeach
                </div>
            @endif

            @if($showButton)
                <a href="#contact" class="w-11/12 mt-4 px-4 py-2 text-center font-bold {{ $buttonBg }} {{ $buttonTextColor }} {{ $buttonHover }} {{ $borderRadius }}">
                    {{ $buttonText }}
                </a>
            @endif
        </nav>
    </div>
</header>
