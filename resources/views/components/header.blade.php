@props([
    'logo' => 'CYBERIA',
    'bgClass' => 'bg-custom-dark',
    'textColor' => 'text-white',
    'accentColor' => 'text-purple-400',
    'hoverColor' => 'hover:text-purple-400',
    'buttonText' => 'Book Now',
    'buttonBg' => 'bg-purple-600',
    'buttonHover' => 'hover:bg-purple-700',
    'navBg' => 'bg-beveled-nav',
    'shadowClass' => 'shadow-beveled',
    'mobileBg' => 'bg-custom-dark-2',
    'currentPage' => ''
])

<!-- Header -->
<header class="sticky top-0 z-50 {{ $textColor }} {{ $bgClass }}">
    <div class="container flex justify-center items-center px-4 py-4 mx-auto">
        <!-- Logo on the left -->
        <h1 class="absolute left-4 text-2xl font-bold {{ $accentColor }}">{{ $logo }}</h1>
        
        <!-- Centered Navigation with beveled styling applied directly -->
        <nav class="hidden md:flex justify-evenly items-center px-6 py-3 space-x-8 {{ $navBg }} rounded-full {{ $shadowClass }} w-[650px] h-12">
            <a href="/" class="transition-colors {{ $currentPage === 'home' ? 'font-semibold ' . $accentColor : $hoverColor }}">Home</a>
            <a href="/about" class="transition-colors {{ $currentPage === 'about' ? 'font-semibold ' . $accentColor : $hoverColor }}">About</a>
            <a href="/services" class="transition-colors {{ $currentPage === 'services' ? 'font-semibold ' . $accentColor : $hoverColor }}">Services</a>
            <a href="/blog" class="transition-colors {{ $currentPage === 'blog' ? 'font-semibold ' . $accentColor : $hoverColor }}">Blog</a>
            <a href="/reviews" class="transition-colors {{ $currentPage === 'reviews' ? 'font-semibold ' . $accentColor : $hoverColor }}">Reviews</a>
            <a href="/contact-us" class="transition-colors {{ $currentPage === 'contact' ? 'font-semibold ' . $accentColor : $hoverColor }}">Contact</a>
        </nav>
        
        <!-- Action button on the right -->
        <button class="hidden absolute right-4 px-5 py-2 font-bold {{ $textColor }} {{ $buttonBg }} rounded-md transition-colors md:block {{ $buttonHover }}">
            {{ $buttonText }}
        </button>
        
        <!-- Mobile menu button on the right (only visible on mobile) -->
        <div class="absolute right-4 md:hidden">
            <button id="menu-btn" class="focus:outline-none">
                <!-- Menu Icon -->
                <svg id="menu-icon-open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                <!-- Close Icon -->
                <svg id="menu-icon-close" xmlns="http://www.w3.org/2000/svg" class="hidden w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden {{ $mobileBg }}">
        <nav class="flex flex-col items-center py-4 space-y-4">
            <a href="/" class="mobile-nav-link {{ $currentPage === 'home' ? 'font-semibold ' . $accentColor : $hoverColor }}">Home</a>
            <a href="/about" class="mobile-nav-link {{ $currentPage === 'about' ? 'font-semibold ' . $accentColor : $hoverColor }}">About</a>
            <a href="/services" class="mobile-nav-link {{ $currentPage === 'services' ? 'font-semibold ' . $accentColor : $hoverColor }}">Services</a>
            <a href="/blog" class="mobile-nav-link {{ $currentPage === 'blog' ? 'font-semibold ' . $accentColor : $hoverColor }}">Blog</a>
            <a href="/reviews" class="mobile-nav-link {{ $currentPage === 'reviews' ? 'font-semibold ' . $accentColor : $hoverColor }}">Reviews</a>
            <a href="/contact-us" class="mobile-nav-link {{ $currentPage === 'contact' ? 'font-semibold ' . $accentColor : $hoverColor }}">Contact</a>
            <button class="px-4 py-2 font-bold {{ $textColor }} {{ $buttonBg }} rounded-md {{ $buttonHover }}">
                {{ $buttonText }}
            </button>
        </nav>
    </div>
</header> 