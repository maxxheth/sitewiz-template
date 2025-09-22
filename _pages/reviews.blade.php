@extends('layouts.app')

@php
    $title = "Reviews";
    $metaDescription = "Read what our gaming community says about CYBERIA.";
    
    $backgroundImagePlaceholder = '%BG_IMG_URL%';

    function isValidImageUrl($url) {
        return filter_var($url, FILTER_VALIDATE_URL) && preg_match('/\.(jpeg|jpg|gif|png|svg)$/i', $url);
    }

    // === HEADER PROPS ===
    $headerProps = [
        'logo' => asset('media/logo/logo.png'),
        'logoPrefix' => null,
        'logoSuffix' => null,
        'buttonText' => 'Book Now',
        'buttonLink' => '#contact',
        'showButton' => true,
        'sticky' => true,
        'currentPage' => 'reviews',
        'navItems' => [
            ['text' => 'Home', 'url' => '/', 'key' => 'home'],
            ['text' => 'About', 'url' => '/about', 'key' => 'about'],
            ['text' => 'Services', 'url' => '/services', 'key' => 'services'],
            ['text' => 'Contact', 'url' => '/contact-us', 'key' => 'contact']
        ],
        'fontFamily' => 'sans',
        'padding' => 'py-4 px-4',
        'borderRadius' => 'rounded-md',
        'containerClass' => 'container mx-auto',
        'logoClass' => 'text-2xl font-bold',
        'navClass' => 'hidden md:flex space-x-8',
        'navItemClass' => 'text-[var(--text-primary)] hover:text-[var(--surface-brand-primary)] transition-colors',
        'navItemActiveClass' => 'text-[var(--surface-brand-primary)] font-semibold',
        'buttonClass' => 'bg-[var(--surface-brand-primary)] text-[var(--text-primary)] px-6 py-2 rounded-lg',
        'mobileMenuClass' => 'md:hidd    $backgroundImagePlaceholder = '%BG_IMG_URL%';

    function isValidImageUrl($url) {
        return filter_var($url, FILTER_VALIDATE_URL) && preg_match('/\.(jpeg|jpg|gif|png|svg)$/i', $url);
    }en',
        'mobileMenuButtonClass' => 'p-2 text-[var(--text-primary)] hover:text-[var(--surface-brand-primary)]'
    ];

    // === HERO SECTION PROPS ===
    $heroProps = [
        'title' => "What Gamers Say About CYBERIA",
        'subtitle' => "Don't just take our word for it - hear from our amazing community of gamers who have experienced the CYBERIA difference.",
        'variant' => 'centered',
        'primaryButton' => [
            'text' => 'Read Reviews',
            'url' => '#reviews',
            'variant' => 'primary'
        ],
        'showButtons' => true,
        'backgroundImage' => isValidImageUrl($backgroundImagePlaceholder) ? $backgroundImagePlaceholder : 'https://placehold.co/1920x600/111827/dc2626?text=Reviews+Background',
        'backgroundOverlay' => 'var(--primary-color-inverted)',
        'textColor' => 'text-[var(--text-primary)]',
        'alignment' => 'text-center',
        'bgColor' => 'bg-[var(--primary-color-inverted)]',
        'accentColor' => 'text-[var(--surface-brand-primary)]',
        'fontFamily' => 'sans',
        'padding' => 'py-20 md:py-32',
        'borderRadius' => 'rounded-md',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-4xl md:text-6xl font-bold mb-6',
        'subtitleClass' => 'text-xl md:text-2xl mb-4',
        'descriptionClass' => 'text-lg mb-8 max-w-3xl mx-auto',
        'buttonContainerClass' => 'flex flex-col sm:flex-row gap-4 justify-center',
        'primaryButtonClass' => 'bg-[var(--surface-brand-primary)] text-[var(--text-primary)] px-8 py-3 rounded-lg',
        'secondaryButtonClass' => 'border border-[var(--surface-brand-primary)] text-[var(--surface-brand-primary)] hover:bg-[var(--surface-brand-primary)] hover:text-[var(--text-primary)] px-8 py-3 rounded-lg'
    ];

    // === IMAGE GRID PROPS ===
    $imageGridProps = [
        'title' => 'Gaming Moments',
        'subtitle' => 'See the excitement and community spirit that defines CYBERIA',
        'images' => [
            ['src' => 'https://placehold.co/400x400/111827/dc2626?text=Happy+Gamer+1', 'alt' => 'Happy gamer enjoying CYBERIA'],
            ['src' => 'https://placehold.co/400x400/111827/dc2626?text=Tournament+Winner', 'alt' => 'Tournament winner at CYBERIA'],
            ['src' => 'https://placehold.co/400x400/111827/dc2626?text=VR+Experience', 'alt' => 'Gamer experiencing VR at CYBERIA'],
            ['src' => 'https://placehold.co/400x400/111827/dc2626?text=Gaming+Community', 'alt' => 'Gaming community at CYBERIA'],
            ['src' => 'https://placehold.co/400x400/111827/dc2626?text=Pro+Setup', 'alt' => 'Professional gaming setup'],
            ['src' => 'https://placehold.co/400x400/111827/dc2626?text=Event+Night', 'alt' => 'Gaming event night at CYBERIA'],
        ],
        'layout' => 'grid',
        'columns' => 3,
        'gap' => 'gap-6',
        'showLightbox' => true,
        'aspectRatio' => 'square',
        'showCaptions' => false,
        'showOverlay' => true,
        'overlayOpacity' => 'bg-[var(--primary-color-inverted)]/50',
        'bgColor' => 'bg-[var(--primary-color-inverted)]',
        'textColor' => 'text-[var(--text-primary)]',
        'accentColor' => 'text-[var(--surface-brand-primary)]',
        'fontFamily' => 'sans',
        'padding' => 'py-12',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-center',
        'subtitleClass' => 'text-xl text-[var(--text-primary)] mb-6 text-center',
        'imageClass' => 'rounded-lg shadow-lg',
        'captionClass' => 'text-sm text-[var(--text-primary)] mt-2 text-center'
    ];

    // === FOOTER PROPS ===
    $footerProps = [
        'companyName' => 'Cyberia Gaming Lounge',
        'address' => '123 Gaming Street, Cyber City, CC 12345',
        'phone' => '+1 (555) 123-4567',
        'state' => 'CC',
        'city' => 'Cyber City',
        'zip' => '12345',
        'tagline' => 'Where Gaming Dreams Come True.',
        'year' => date('Y'),
        'layout' => 'four-column',
        'showSocial' => true,
        'showNewsletter' => true,
        'newsletterTitle' => 'Stay Updated',
        'newsletterDescription' => 'Get the latest gaming news, events, and exclusive offers delivered to your inbox.',
        'newsletterButtonText' => 'Subscribe',
        'newsletterPlaceholder' => 'Enter your email address',
        'address' => '123 Gaming Street, Cyber City, CC 12345',
        'phone' => '+1 (555) 123-4567',
        'city' => 'Cyber City',
        'state' => 'CC',
        'zip' => '12345',
        'socialLinks' => [
            ['name' => 'Discord', 'url' => '#', 'icon' => 'fab fa-discord'],
            ['name' => 'Twitch', 'url' => '#', 'icon' => 'fab fa-twitch'],
            ['name' => 'Instagram', 'url' => '#', 'icon' => 'fab fa-instagram'],
            ['name' => 'YouTube', 'url' => '#', 'icon' => 'fab fa-youtube']
        ],
        'footerSections' => [
            [
                'title' => 'Gaming',
                'links' => [
                    ['text' => 'Gaming PCs', 'url' => '/services/gaming-pcs'],
                    ['text' => 'VR Arena', 'url' => '/services/vr-arena'],
                    ['text' => 'Tournaments', 'url' => '/tournaments'],
                    ['text' => 'Events', 'url' => '/events']
                ]
            ],
            [
                'title' => 'Services',
                'links' => [
                    ['text' => 'PC Repair', 'url' => '/services/repair'],
                    ['text' => 'Upgrades', 'url' => '/services/upgrades'],
                    ['text' => 'Private Events', 'url' => '/services/events'],
                    ['text' => 'Memberships', 'url' => '/memberships']
                ]
            ],
            [
                'title' => 'Community',
                'links' => [
                    ['text' => 'About Us', 'url' => '/about'],
                    ['text' => 'Blog', 'url' => '/blog'],
                    ['text' => 'Contact', 'url' => '/contact'],
                    ['text' => 'Privacy Policy', 'url' => '/privacy']
                ]
            ]
        ],
        'fontFamily' => 'sans',
        'padding' => 'py-12 px-4',
        'borderRadius' => 'rounded-md',
        'containerClass' => 'container mx-auto',
        'logoClass' => 'text-2xl font-extrabold mb-2 uppercase',
        'taglineClass' => 'text-[var(--text-secondary)] mb-6',
        'copyrightClass' => 'text-sm text-[var(--text-secondary)]',
        'sectionTitleClass' => 'text-lg font-bold mb-4 uppercase',
        'linkClass' => 'text-sm transition-colors',
        'linkColor' => 'text-[var(--text-primary)]',
        'hoverColor' => 'hover:text-[var(--surface-brand-primary)]',
        'borderColor' => 'border-[var(--border-tretinary)]',
        'socialLinkClass' => 'p-2 text-[var(--text-primary)] hover:text-[var(--surface-brand-primary)] transition-colors'
    ];

    // === MOBILE MENU SCRIPT PROPS ===
    $mobileMenuProps = [
        'menuId' => 'mobile-menu',
        'menuBtnId' => 'menu-btn',
        'openIconId' => 'menu-icon-open',
        'closeIconId' => 'menu-icon-close',
        'overlayId' => 'mobile-menu-overlay',
        'animation' => 'fade',
        'duration' => 300,
        'easing' => 'ease-in-out',
        'activeClass' => 'active',
        'overlayClass' => 'absolute inset-0 bg-[var(--primary-color-inverted)] bg-opacity-50',
        'closeOnLinkClick' => true,
        'closeOnOutsideClick' => true,
        'closeOnEscape' => true,
        'preventScroll' => true,
        'autoCloseOnResize' => true,
        'resizeBreakpoint' => 768,
        'ariaLabel' => 'Toggle mobile menu',
        'ariaExpanded' => 'false',
        'focusTrap' => true,
        'focusTrapSelector' => '.mobile-menu-content',
        'customScripts' => [],
        'onOpen' => null,
        'onClose' => null,
        'onToggle' => null,
        'fontFamily' => 'sans',
        'borderRadius' => 'rounded-md',
        'menuClass' => 'fixed inset-0 z-50 flex items-center justify-center',
        'overlayClass' => 'absolute inset-0 bg-[var(--primary-color-inverted)] bg-opacity-50',
        'contentClass' => 'relative bg-[var(--surface-secondary)] rounded-lg shadow-xl max-w-sm w-full mx-4 max-h-screen overflow-y-auto',
        'headerClass' => 'flex items-center justify-between p-4 border-b border-[var(--border-tretinary)]',
        'titleClass' => 'text-lg font-semibold text-[var(--text-primary)]',
        'navClass' => 'p-4',
        'navItemClass' => 'block py-2 px-4 text-[var(--text-primary)] hover:text-[var(--surface-brand-primary)] hover:bg-[var(--surface-tertiary)] rounded-md transition-colors',
        'navItemActiveClass' => 'text-[var(--surface-brand-primary)] bg-[var(--surface-tertiary)]',
        'footerClass' => 'p-4 border-t border-[var(--border-tretinary)]',
        'socialClass' => 'flex space-x-4',
        'socialLinkClass' => 'p-2 text-[var(--text-primary)] hover:text-[var(--surface-brand-primary)] transition-colors'
    ];

        $navItems = [
            ['text' => 'Home', 'url' => '/', 'key' => 'home'],
            ['text' => 'About', 'url' => '/about', 'key' => 'about'],
            ['text' => 'Services', 'url' => '/services', 'key' => 'services'],
            ['text' => 'Locations', 'url' => '/locations', 'key' => 'locations'],
            ['text' => 'Blog', 'url' => '/blog', 'key' => 'blog'],
            ['text' => 'Reviews', 'url' => '/reviews', 'key' => 'reviews'],
            ['text' => 'Contact', 'url' => '/contact-us', 'key' => 'contact']
        ];
        $serviceNavItems = [
            ['text' => 'Consulting', 'url' => '/services/consulting', 'key' => 'consulting'],
            ['text' => 'Development', 'url' => '/services/development', 'key' => 'development'],
            ['text' => 'Design', 'url' => '/services/design', 'key' => 'design'],
            ['text' => 'Marketing', 'url' => '/services/marketing', 'key' => 'marketing'],
        ];
        $locationNavItems = [
            ['text' => 'New York', 'url' => '/locations/new-york', 'key' => 'new-york'],
            ['text' => 'Los Angeles', 'url' => '/locations/los-angeles', 'key' => 'los-angeles'],
            ['text' => 'Chicago', 'url' => '/locations/chicago', 'key' => 'chicago'],
            ['text' => 'Houston', 'url' => '/locations/houston', 'key' => 'houston'],
        ];
@endphp

@section('content')
    <!-- Header & Navigation -->
    <x-base.header :navItems="$navItems" :serviceNavItems="$serviceNavItems" :locationNavItems="$locationNavItems" />

    <main class="py-16">
        <!-- Hero Section -->
        <x-base.hero-section 
            :variant="$heroProps['variant']"
            :title="$heroProps['title']"
            :subtitle="$heroProps['subtitle']"
            :background-image="$heroProps['backgroundImage']"
            :alignment="$heroProps['alignment']"
            :font-family="$heroProps['fontFamily']"
            :padding="$heroProps['padding']"
            :border-radius="$heroProps['borderRadius']"
            :container-class="$heroProps['containerClass']"
            :title-class="$heroProps['titleClass']"
            :subtitle-class="$heroProps['subtitleClass']"
            :description-class="$heroProps['descriptionClass']"
        />

        <!-- Image Gallery Section -->
        <x-base.image-grid 
            :title="$imageGridProps['title']"
            :subtitle="$imageGridProps['subtitle']"
            :images="$imageGridProps['images']"
            :layout="$imageGridProps['layout']"
            :columns="$imageGridProps['columns']"
            :gap="$imageGridProps['gap']"
            :show-lightbox="$imageGridProps['showLightbox']"
            :aspect-ratio="$imageGridProps['aspectRatio']"
            :show-captions="$imageGridProps['showCaptions']"
            :show-overlay="$imageGridProps['showOverlay']"
            :overlay-opacity="$imageGridProps['overlayOpacity']"
            :bg-color="$imageGridProps['bgColor']"
            :text-color="$imageGridProps['textColor']"
            :accent-color="$imageGridProps['accentColor']"
            :font-family="$imageGridProps['fontFamily']"
            :padding="$imageGridProps['padding']"
            :border-radius="$imageGridProps['borderRadius']"
            :container-class="$imageGridProps['containerClass']"
            :title-class="$imageGridProps['titleClass']"
            :subtitle-class="$imageGridProps['subtitleClass']"
            :image-class="$imageGridProps['imageClass']"
            :caption-class="$imageGridProps['captionClass']"
        />

        <!-- Testimonials Section -->
        <section class="py-16">
            <div class="container px-4 mx-auto">
                <h2 class="mb-12 text-3xl font-bold text-center text-[var(--text-primary)] md:text-4xl">What Our Community Says</h2>
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Testimonial 1 -->
                    <div class="p-8 rounded-lg border border-[var(--border-tretinary)] bg-[var(--surface-secondary)]">
                        <div class="flex items-center mb-4">
                            <span class="text-warning material-icons">star</span>
                            <span class="text-warning material-icons">star</span>
                            <span class="text-warning material-icons">star</span>
                            <span class="text-warning material-icons">star</span>
                            <span class="text-warning material-icons">star</span>
                        </div>
                        <p class="mb-6 italic text-[var(--text-secondary)]">"CYBERIA has completely transformed my gaming experience! The high-end PCs run every game perfectly, and the community atmosphere is incredible."</p>
                        <div class="flex items-center">
                            <img src="https://placehold.co/48x48/111827/dc2626?text=A" alt="Avatar" class="mr-4 w-12 h-12 rounded-full border-2 border-primary">
                            <div>
                                <p class="font-bold text-[var(--text-primary)]">Alex Chen</p>
                                <p class="text-sm text-[var(--text-tertiary)]">Competitive Gamer</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="p-8 rounded-lg border border-[var(--border-tretinary)] bg-[var(--surface-secondary)]">
                        <div class="flex items-center mb-4">
                            <span class="text-warning material-icons">star</span>
                            <span class="text-warning material-icons">star</span>
                            <span class="text-warning material-icons">star</span>
                            <span class="text-warning material-icons">star</span>
                            <span class="text-warning material-icons">star</span>
                        </div>
                        <p class="mb-6 italic text-[var(--text-secondary)]">"The VR arena is absolutely mind-blowing! I've never experienced gaming like this before. The staff is knowledgeable and the equipment is top-notch."</p>
                        <div class="flex items-center">
                            <img src="https://placehold.co/48x48/111827/dc2626?text=S" alt="Avatar" class="mr-4 w-12 h-12 rounded-full border-2 border-primary">
                            <div>
                                <p class="font-bold text-[var(--text-primary)]">Sarah Williams</p>
                                <p class="text-sm text-[var(--text-tertiary)]">VR Enthusiast</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="p-8 rounded-lg border border-[var(--border-tretinary)] bg-[var(--surface-secondary)]">
                        <div class="flex items-center mb-4">
                            <span class="text-warning material-icons">star</span>
                            <span class="text-warning material-icons">star</span>
                            <span class="text-warning material-icons">star</span>
                            <span class="text-warning material-icons">star</span>
                            <span class="text-warning material-icons">star</span>
                        </div>
                        <p class="mb-6 italic text-[var(--text-secondary)]">"The tournaments here are incredible! Great organization, amazing prizes, and the community is so welcoming. This is where serious gamers come to compete."</p>
                        <div class="flex items-center">
                            <img src="https://placehold.co/48x48/111827/dc2626?text=M" alt="Avatar" class="mr-4 w-12 h-12 rounded-full border-2 border-primary">
                            <div>
                                <p class="font-bold text-[var(--text-primary)]">Mike Johnson</p>
                                <p class="text-sm text-[var(--text-tertiary)]">Tournament Champion</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <x-base.footer 
        :company-name="$footerProps['companyName']"
        :address="$footerProps['address']"
        :phone="$footerProps['phone']"
        :state="$footerProps['state']"
        :city="$footerProps['city']"
        :tagline="$footerProps['tagline']"
        :year="$footerProps['year']"
        :layout="$footerProps['layout']"
        :show-social="$footerProps['showSocial']"
        :show-newsletter="$footerProps['showNewsletter']"
        :newsletter-title="$footerProps['newsletterTitle']"
        :newsletter-description="$footerProps['newsletterDescription']"
        :newsletter-button-text="$footerProps['newsletterButtonText']"
        :newsletter-placeholder="$footerProps['newsletterPlaceholder']"
        :social-links="$footerProps['socialLinks']"
        :footer-sections="$footerProps['footerSections']"
        :font-family="$footerProps['fontFamily']"
        :padding="$footerProps['padding']"
        :border-radius="$footerProps['borderRadius']"
        :container-class="$footerProps['containerClass']"
        :logo-class="$footerProps['logoClass']"
        :tagline-class="$footerProps['taglineClass']"
        :copyright-class="$footerProps['copyrightClass']"
        :section-title-class="$footerProps['sectionTitleClass']"
        :link-class="$footerProps['linkClass']"
        :link-color="$footerProps['linkColor']"
        :hover-color="$footerProps['hoverColor']"
        :border-color="$footerProps['borderColor']"
        :social-link-class="$footerProps['socialLinkClass']"
    />

    <!-- Mobile Menu Script -->
    <x-base.mobile-menu-script 
        :menu-id="$mobileMenuProps['menuId']"
        :menu-btn-id="$mobileMenuProps['menuBtnId']"
        :open-icon-id="$mobileMenuProps['openIconId']"
        :close-icon-id="$mobileMenuProps['closeIconId']"
        :overlay-id="$mobileMenuProps['overlayId']"
        :animation="$mobileMenuProps['animation']"
        :duration="$mobileMenuProps['duration']"
        :easing="$mobileMenuProps['easing']"
        :active-class="$mobileMenuProps['activeClass']"
        :overlay-class="$mobileMenuProps['overlayClass']"
        :close-on-link-click="$mobileMenuProps['closeOnLinkClick']"
        :close-on-outside-click="$mobileMenuProps['closeOnOutsideClick']"
        :close-on-escape="$mobileMenuProps['closeOnEscape']"
        :prevent-scroll="$mobileMenuProps['preventScroll']"
        :auto-close-on-resize="$mobileMenuProps['autoCloseOnResize']"
        :resize-breakpoint="$mobileMenuProps['resizeBreakpoint']"
        :aria-label="$mobileMenuProps['ariaLabel']"
        :aria-expanded="$mobileMenuProps['ariaExpanded']"
        :focus-trap="$mobileMenuProps['focusTrap']"
        :focus-trap-selector="$mobileMenuProps['focusTrapSelector']"
        :custom-scripts="$mobileMenuProps['customScripts']"
        :on-open="$mobileMenuProps['onOpen']"
        :on-close="$mobileMenuProps['onClose']"
        :on-toggle="$mobileMenuProps['onToggle']"
        :font-family="$mobileMenuProps['fontFamily']"
        :border-radius="$mobileMenuProps['borderRadius']"
        :menu-class="$mobileMenuProps['menuClass']"
        :overlay-class="$mobileMenuProps['overlayClass']"
        :content-class="$mobileMenuProps['contentClass']"
        :header-class="$mobileMenuProps['headerClass']"
        :title-class="$mobileMenuProps['titleClass']"
        :nav-class="$mobileMenuProps['navClass']"
        :nav-item-class="$mobileMenuProps['navItemClass']"
        :nav-item-active-class="$mobileMenuProps['navItemActiveClass']"
        :footer-class="$mobileMenuProps['footerClass']"
        :social-class="$mobileMenuProps['socialClass']"
        :social-link-class="$mobileMenuProps['socialLinkClass']"
    />
@endsection
