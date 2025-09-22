@extends('layouts.app')

@php
    $title = "Gaming Blog";
    $metaDescription = "Stay updated with the latest gaming news, tips, and community updates.";
    
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
        'currentPage' => 'blog',
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
        'mobileMenuClass' => 'md:hidden',
        'mobileMenuButtonClass' => 'p-2 text-[var(--text-primary)] hover:text-[var(--surface-brand-primary)]'
    ];

    // === HERO SECTION PROPS ===
    $heroProps = [
        'title' => "Gaming Blog",
        'subtitle' => "Stay updated with the latest gaming news, tips, and community stories from the world of competitive gaming.",
        'description' => 'Stay updated with the latest news, tips, and insights from our team of experts.',
        'primaryButton' => ['text' => 'Subscribe', 'url' => '#newsletter'],
        'secondaryButton' => ['text' => 'Learn More', 'url' => '/about'],
        'backgroundImage' => isValidImageUrl($backgroundImagePlaceholder) ? $backgroundImagePlaceholder : 'https://placehold.co/1920x1080/1a1a2e/c084fc?text=Our+Blog',
        'alignment' => 'text-center',
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

    // === POST CARD PROPS ===
    $postCardProps = [
        'title' => 'Top 10 Gaming Trends for 2024',
        'summary' => 'Discover the latest gaming trends that are shaping the industry this year.',
        'author' => 'Alex Chen',
        'date' => '2024-01-15',
        'image' => 'https://placehold.co/600x400/111827/dc2626?text=Gaming+Trends',
        'imageAlt' => 'Gaming Trends 2024',
        'category' => 'Industry News',
        'layout' => 'card',
        'showImage' => true,
        'showAuthor' => true,
        'showDate' => true,
        'showCategory' => true,
        'showReadMore' => true,
        'readMoreText' => 'Read More',
        'bgColor' => 'bg-[var(--surface-secondary)]',
        'textColor' => 'text-[var(--text-primary)]',
        'accentColor' => 'text-[var(--surface-brand-primary)]',
        'fontFamily' => 'sans',
        'padding' => 'p-6',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'bg-[var(--surface-secondary)] rounded-lg shadow-md hover:shadow-lg transition-shadow',
        'imageClass' => 'w-full h-48 object-cover rounded-t-lg',
        'titleClass' => 'text-xl font-bold mb-2',
        'summaryClass' => 'text-[var(--text-secondary)] mb-4',
        'authorClass' => 'text-sm text-[var(--text-secondary)]',
        'dateClass' => 'text-sm text-[var(--text-secondary)]',
        'categoryClass' => 'inline-block px-2 py-1 text-xs font-semibold text-[var(--surface-brand-primary)] bg-[var(--surface-brand-primary)]/10 rounded-full',
        'readMoreClass' => 'text-[var(--surface-brand-primary)] hover:text-[var(--brand-primary-dark)] font-semibold'
    ];

    // === POST CARD PROPS 2 ===
    $postCardProps2 = [
        'title' => 'VR Gaming: The Future is Here',
        'summary' => 'Explore how virtual reality is revolutionizing the gaming experience.',
        'author' => 'Sarah Williams',
        'date' => '2024-01-10',
        'image' => 'https://placehold.co/600x400/111827/dc2626?text=VR+Gaming',
        'imageAlt' => 'VR Gaming Experience',
        'category' => 'Technology',
        'layout' => 'card',
        'showImage' => true,
        'showAuthor' => true,
        'showDate' => true,
        'showCategory' => true,
        'showReadMore' => true,
        'readMoreText' => 'Read More',
        'bgColor' => 'bg-[var(--surface-secondary)]',
        'textColor' => 'text-[var(--text-primary)]',
        'accentColor' => 'text-[var(--surface-brand-primary)]',
        'fontFamily' => 'sans',
        'padding' => 'p-6',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'bg-[var(--surface-secondary)] rounded-lg shadow-md hover:shadow-lg transition-shadow',
        'imageClass' => 'w-full h-48 object-cover rounded-t-lg',
        'titleClass' => 'text-xl font-bold mb-2',
        'summaryClass' => 'text-[var(--text-secondary)] mb-4',
        'authorClass' => 'text-sm text-[var(--text-secondary)]',
        'dateClass' => 'text-sm text-[var(--text-secondary)]',
        'categoryClass' => 'inline-block px-2 py-1 text-xs font-semibold text-[var(--surface-brand-primary)] bg-[var(--surface-brand-primary)]/10 rounded-full',
        'readMoreClass' => 'text-[var(--surface-brand-primary)] hover:text-[var(--brand-primary-dark)] font-semibold'
    ];

    // === POST CARD PROPS 3 ===
    $postCardProps3 = [
        'title' => 'Building Your Ultimate Gaming Setup',
        'summary' => 'Tips and tricks for creating the perfect gaming environment at home.',
        'author' => 'Mike Johnson',
        'date' => '2024-01-05',
        'image' => 'https://placehold.co/600x400/111827/dc2626?text=Gaming+Setup',
        'imageAlt' => 'Ultimate Gaming Setup',
        'category' => 'Guides',
        'layout' => 'card',
        'showImage' => true,
        'showAuthor' => true,
        'showDate' => true,
        'showCategory' => true,
        'showReadMore' => true,
        'readMoreText' => 'Read More',
        'bgColor' => 'bg-[var(--surface-secondary)]',
        'textColor' => 'text-[var(--text-primary)]',
        'accentColor' => 'text-[var(--surface-brand-primary)]',
        'fontFamily' => 'sans',
        'padding' => 'p-6',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'bg-[var(--surface-secondary)] rounded-lg shadow-md hover:shadow-lg transition-shadow',
        'imageClass' => 'w-full h-48 object-cover rounded-t-lg',
        'titleClass' => 'text-xl font-bold mb-2',
        'summaryClass' => 'text-[var(--text-secondary)] mb-4',
        'authorClass' => 'text-sm text-[var(--text-secondary)]',
        'dateClass' => 'text-sm text-[var(--text-secondary)]',
        'categoryClass' => 'inline-block px-2 py-1 text-xs font-semibold text-[var(--surface-brand-primary)] bg-[var(--surface-brand-primary)]/10 rounded-full',
        'readMoreClass' => 'text-[var(--surface-brand-primary)] hover:text-[var(--brand-primary-dark)] font-semibold'
    ];

    // === FOOTER PROPS ===
    $footerProps = [
        'companyName' => 'Cyberia Gaming Lounge',
        'address' => '123 Gaming Street, Cyber City, CC 12345',
        'city' => 'Cyber City',
        'state' => 'CC',
        'zip' => '12345',
        'phone' => '+1 (555) 123-4567',
        'tagline' => 'Where Gaming Dreams Come True.',
        'year' => date('Y'),
        'layout' => 'four-column',
        'showSocial' => true,
        'showNewsletter' => true,
        'newsletterTitle' => 'Stay Updated',
        'newsletterDescription' => 'Get the latest gaming news, events, and exclusive offers delivered to your inbox.',
        'newsletterButtonText' => 'Subscribe',
        'newsletterPlaceholder' => 'Enter your email address',
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
        'socialLinkClass' => 'p-2 text-[var(--text-secondary)] hover:text-[var(--surface-brand-primary)] transition-colors'
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
        'bgColor' => 'bg-[var(--primary-color-inverted)]',
        'textColor' => 'text-[var(--text-primary)]',
        'accentColor' => 'text-[var(--surface-brand-primary)]',
        'fontFamily' => 'sans',
        'borderRadius' => 'rounded-md',
        'menuClass' => 'fixed inset-0 z-50 flex items-center justify-center',
        'overlayClass' => 'absolute inset-0 bg-[var(--primary-color-inverted)] bg-opacity-50',
        'contentClass' => 'relative bg-[var(--surface-secondary)] rounded-lg shadow-xl max-w-sm w-full mx-4 max-h-screen overflow-y-auto',
        'headerClass' => 'flex items-center justify-between p-4 border-b border-[var(--border-tretinary)]',
        'titleClass' => 'text-lg font-semibold text-[var(--text-primary)]',
        'closeBtnClass' => 'p-2 text-[var(--text-secondary)] hover:text-[var(--surface-brand-primary)] transition-colors',
        'navClass' => 'p-4',
        'navItemClass' => 'block py-2 px-4 text-[var(--text-primary)] hover:text-[var(--surface-brand-primary)] hover:bg-[var(--surface-tertiary)] rounded-md transition-colors',
        'navItemActiveClass' => 'text-[var(--surface-brand-primary)] bg-[var(--surface-tertiary)]',
        'footerClass' => 'p-4 border-t border-[var(--border-tretinary)]',
        'socialClass' => 'flex space-x-4',
        'socialLinkClass' => 'p-2 text-[var(--text-secondary)] hover:text-[var(--surface-brand-primary)] transition-colors'
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
            :title="$heroProps['title']"
            :subtitle="$heroProps['subtitle']"
            :description="$heroProps['description']"
            :primary-button="$heroProps['primaryButton']"
            :secondary-button="$heroProps['secondaryButton']"
            :background-image="$heroProps['backgroundImage']"
            :alignment="$heroProps['alignment']"
            :font-family="$heroProps['fontFamily']"
            :padding="$heroProps['padding']"
            :border-radius="$heroProps['borderRadius']"
            :container-class="$heroProps['containerClass']"
            :title-class="$heroProps['titleClass']"
            :subtitle-class="$heroProps['subtitleClass']"
            :description-class="$heroProps['descriptionClass']"
            :button-container-class="$heroProps['buttonContainerClass']"
            :primary-button-class="$heroProps['primaryButtonClass']"
            :secondary-button-class="$heroProps['secondaryButtonClass']"
        />

        <!-- Blog Posts Section -->
        <section class="py-16">
            <div class="container px-4 mx-auto">
                <h2 class="mb-12 text-3xl font-bold text-center text-[var(--text-primary)] md:text-4xl">Latest Posts</h2>
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <x-base.post-card 
                        :title="$postCardProps['title']"
                        :summary="$postCardProps['summary']"
                        :author="$postCardProps['author']"
                        :date="$postCardProps['date']"
                        :image="$postCardProps['image']"
                        :image-alt="$postCardProps['imageAlt']"
                        :category="$postCardProps['category']"
                        :layout="$postCardProps['layout']"
                        :show-image="$postCardProps['showImage']"
                        :show-author="$postCardProps['showAuthor']"
                        :show-date="$postCardProps['showDate']"
                        :show-category="$postCardProps['showCategory']"
                        :show-read-more="$postCardProps['showReadMore']"
                        :read-more-text="$postCardProps['readMoreText']"
                        :bg-color="$postCardProps['bgColor']"
                        :text-color="$postCardProps['textColor']"
                        :accent-color="$postCardProps['accentColor']"
                        :font-family="$postCardProps['fontFamily']"
                        :padding="$postCardProps['padding']"
                        :border-radius="$postCardProps['borderRadius']"
                        :container-class="$postCardProps['containerClass']"
                        :image-class="$postCardProps['imageClass']"
                        :title-class="$postCardProps['titleClass']"
                        :summary-class="$postCardProps['summaryClass']"
                        :author-class="$postCardProps['authorClass']"
                        :date-class="$postCardProps['dateClass']"
                        :category-class="$postCardProps['categoryClass']"
                        :read-more-class="$postCardProps['readMoreClass']"
                    />
                    <x-base.post-card 
                        :title="$postCardProps2['title']"
                        :summary="$postCardProps2['summary']"
                        :author="$postCardProps2['author']"
                        :date="$postCardProps2['date']"
                        :image="$postCardProps2['image']"
                        :image-alt="$postCardProps2['imageAlt']"
                        :category="$postCardProps2['category']"
                        :layout="$postCardProps2['layout']"
                        :show-image="$postCardProps2['showImage']"
                        :show-author="$postCardProps2['showAuthor']"
                        :show-date="$postCardProps2['showDate']"
                        :show-category="$postCardProps2['showCategory']"
                        :show-read-more="$postCardProps2['showReadMore']"
                        :read-more-text="$postCardProps2['readMoreText']"
                        :bg-color="$postCardProps2['bgColor']"
                        :text-color="$postCardProps2['textColor']"
                        :accent-color="$postCardProps2['accentColor']"
                        :font-family="$postCardProps2['fontFamily']"
                        :padding="$postCardProps2['padding']"
                        :border-radius="$postCardProps2['borderRadius']"
                        :container-class="$postCardProps2['containerClass']"
                        :image-class="$postCardProps2['imageClass']"
                        :title-class="$postCardProps2['titleClass']"
                        :summary-class="$postCardProps2['summaryClass']"
                        :author-class="$postCardProps2['authorClass']"
                        :date-class="$postCardProps2['dateClass']"
                        :category-class="$postCardProps2['categoryClass']"
                        :read-more-class="$postCardProps2['readMoreClass']"
                    />
                    <x-base.post-card 
                        :title="$postCardProps3['title']"
                        :summary="$postCardProps3['summary']"
                        :author="$postCardProps3['author']"
                        :date="$postCardProps3['date']"
                        :image="$postCardProps3['image']"
                        :image-alt="$postCardProps3['imageAlt']"
                        :category="$postCardProps3['category']"
                        :layout="$postCardProps3['layout']"
                        :show-image="$postCardProps3['showImage']"
                        :show-author="$postCardProps3['showAuthor']"
                        :show-date="$postCardProps3['showDate']"
                        :show-category="$postCardProps3['showCategory']"
                        :show-read-more="$postCardProps3['showReadMore']"
                        :read-more-text="$postCardProps3['readMoreText']"
                        :bg-color="$postCardProps3['bgColor']"
                        :text-color="$postCardProps3['textColor']"
                        :accent-color="$postCardProps3['accentColor']"
                        :font-family="$postCardProps3['fontFamily']"
                        :padding="$postCardProps3['padding']"
                        :border-radius="$postCardProps3['borderRadius']"
                        :container-class="$postCardProps3['containerClass']"
                        :image-class="$postCardProps3['imageClass']"
                        :title-class="$postCardProps3['titleClass']"
                        :summary-class="$postCardProps3['summaryClass']"
                        :author-class="$postCardProps3['authorClass']"
                        :date-class="$postCardProps3['dateClass']"
                        :category-class="$postCardProps3['categoryClass']"
                        :read-more-class="$postCardProps3['readMoreClass']"
                    />
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <x-base.footer 
        :company-name="$footerProps['companyName']"
        :address="$footerProps['address']"
        :city="$footerProps['city']"
        :state="$footerProps['state']"
        :phone="$footerProps['phone']"
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
        :bg-color="$mobileMenuProps['bgColor']"
        :text-color="$mobileMenuProps['textColor']"
        :accent-color="$mobileMenuProps['accentColor']"
        :font-family="$mobileMenuProps['fontFamily']"
        :border-radius="$mobileMenuProps['borderRadius']"
        :menu-class="$mobileMenuProps['menuClass']"
        :overlay-class="$mobileMenuProps['overlayClass']"
        :content-class="$mobileMenuProps['contentClass']"
        :header-class="$mobileMenuProps['headerClass']"
        :title-class="$mobileMenuProps['titleClass']"
        :close-btn-class="$mobileMenuProps['closeBtnClass']"
        :nav-class="$mobileMenuProps['navClass']"
        :nav-item-class="$mobileMenuProps['navItemClass']"
        :nav-item-active-class="$mobileMenuProps['navItemActiveClass']"
        :footer-class="$mobileMenuProps['footerClass']"
        :social-class="$mobileMenuProps['socialClass']"
        :social-link-class="$mobileMenuProps['socialLinkClass']"
    />
@endsection
