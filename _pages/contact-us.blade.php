@php
    $title = "Contact Us";
    $metaDescription = "Get in touch with CYBERIA. We're here to help and answer any questions about our gaming services.";
    
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
        'buttonLink' => '#booking',
        'showButton' => true,
        'sticky' => true,
        'bgColor' => 'bg-[var(--primary-color-inverted)]',
        'textColor' => 'text-[var(--text-primary)]',
        'accentColor' => 'text-[var(--surface-brand-primary)]',
        'currentPage' => 'contact',
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
        'variant' => 'centered',
        'title' => 'Contact Us',
        'subtitle' => 'We\'d love to hear from you!',
        'description' => 'Whether you have a question about our services, pricing, or anything else, our team is ready to answer all your questions.',
        'primaryButton' => [
            'text' => 'Send a Message',
            'url' => '#contact-form',
            'variant' => 'primary'
        ],
        'secondaryButton' => [
            'text' => 'View Our Services',
            'url' => '/services',
            'variant' => 'secondary'
        ],
        'backgroundImage' => isValidImageUrl($backgroundImagePlaceholder) ? $backgroundImagePlaceholder : 'https://placehold.co/1920x800/1a1a2e/c084fc?text=Contact+Us',
        'alignment' => 'text-center',
        'fontFamily' => 'sans',
        'padding' => 'py-20 md:py-32',
        'borderRadius' => 'rounded-md',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-4xl md:text-6xl font-bold mb-6',
        'subtitleClass' => 'text-xl md:text-2xl mb-4',
        'descriptionClass' => 'text-lg mb-8 max-w-3xl mx-auto'
    ];

    // === FEATURES GRID PROPS (Contact Info) ===
    $featuresGridProps = [
        'title' => 'Contact Methods',
        'subtitle' => "Choose the best way to reach us - we're here to help with all your gaming needs",
        'features' => [
            [
                'title' => 'Message Us',
                'description' => 'hello@cyberia.gg',
                'icon' => '<span class="text-4xl text-primary material-icons">email</span>'
            ],
            [
                'title' => 'Call Us',
                'description' => '(555) CYBERIA',
                'icon' => '<span class="text-4xl text-primary material-icons">phone</span>'
            ],
            [
                'title' => 'Visit Us',
                'description' => '123 Gaming Plaza, Tech District',
                'icon' => '<span class="text-4xl text-primary material-icons">location_city</span>'
            ]
        ],
        'layout' => 'grid',
        'columns' => 3,
        'showIcons' => true,
        'showDescriptions' => true,
        'iconStyle' => 'outlined',
        'bgColor' => 'bg-[var(--primary-color-inverted)]',
        'textColor' => 'text-[var(--text-primary)]',
        'accentColor' => 'text-[var(--surface-brand-primary)]',
        'fontFamily' => 'sans',
        'padding' => 'py-12',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-center',
        'subtitleClass' => 'text-xl text-[var(--text-primary)] mb-6 text-center',
        'featureCardClass' => 'bg-[var(--surface-secondary)] rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow',
        'featureIconClass' => 'w-12 h-12 mb-4',
        'featureTitleClass' => 'text-xl font-semibold mb-3',
        'featureDescriptionClass' => 'text-[var(--text-primary)]'
    ];

    // === CONTENT SECTION PROPS (Contact Form) ===
    $contactFormProps = [
        'title' => 'Get In Touch',
        'subtitle' => null,
        'content' => null,
        'layout' => 'single',
        'alignment' => 'text-center',
        'backgroundColor' => 'bg-[var(--primary-color-inverted)]',
        'padding' => 'py-12',
        'textColor' => 'text-[var(--text-primary)]',
        'accentColor' => 'text-[var(--surface-brand-primary)]',
        'fontFamily' => 'sans',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-center',
        'subtitleClass' => 'text-xl text-[var(--text-primary)] mb-6 text-center',
        'contentClass' => 'text-lg text-[var(--text-primary)] leading-relaxed',
        'imageClass' => 'rounded-lg shadow-lg',
        'buttonClass' => 'bg-[var(--surface-brand-primary)] text-[var(--text-primary)] px-6 py-2 rounded-lg'
    ];

    // === CONTENT SECTION PROPS (Location & Hours) ===
    $locationProps = [
        'title' => 'Visit Our Gaming Center',
        'subtitle' => null,
        'content' => null,
        'layout' => 'image-right',
        'image' => 'https://placehold.co/600x400/111827/dc2626?text=CYBERIA+Location',
        'imageAlt' => 'CYBERIA Gaming Center Location',
        'backgroundColor' => 'bg-[var(--primary-color-inverted)]',
        'padding' => 'py-12',
        'textColor' => 'text-[var(--text-primary)]',
        'accentColor' => 'text-[var(--surface-brand-primary)]',
        'fontFamily' => 'sans',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-center',
        'subtitleClass' => 'text-xl text-[var(--text-primary)] mb-6 text-center',
        'contentClass' => 'text-lg text-[var(--text-primary)] leading-relaxed',
        'imageClass' => 'rounded-lg shadow-lg',
        'buttonClass' => 'bg-[var(--surface-brand-primary)] text-[var(--text-primary)] px-6 py-2 rounded-lg'
    ];

    // === FOOTER PROPS ===
    $footerProps = [
        'companyName' => 'Cyberia Gaming Lounge',
        'address' => '123 Gaming Street, Tech City, CC 12345',
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
            ['name' => 'Twitch', 'url' => '#', 'icon' => 'fab fa-twitch']
        ],
        'footerSections' => [
            [
                'title' => 'Quick Links',
                'links' => [
                    ['text' => 'Home', 'url' => '/'],
                    ['text' => 'Services', 'url' => '/services'],
                    ['text' => 'Events', 'url' => '/events'],
                    ['text' => 'Contact', 'url' => '/contact-us']
                ]
            ],
            [
                'title' => 'Our Games',
                'links' => [
                    ['text' => 'PC Games', 'url' => '/games/pc'],
                    ['text' => 'Console Games', 'url' => '/games/console'],
                    ['text' => 'VR Games', 'url' => '/games/vr'],
                    ['text' => 'Retro Classics', 'url' => '/games/retro']
                ]
            ],
            [
                'title' => 'Legal',
                'links' => [
                    ['text' => 'Terms of Service', 'url' => '/terms'],
                    ['text' => 'Privacy Policy', 'url' => '/privacy'],
                    ['text' => 'Rules & Conduct', 'url' => '/rules']
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
        'newsletterInputClass' => 'w-full px-4 py-2 rounded-l-md focus:outline-none focus:ring-2 focus:ring-[var(--surface-brand-primary)]',
        'newsletterButtonClass' => 'px-6 py-2 bg-[var(--surface-brand-primary)] text-[var(--text-primary)] rounded-r-md hover:bg-[var(--brand-primary-dark)] transition-colors'
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
        'bgColor' => 'bg-[var(--surface-secondary)]',
        'textColor' => 'text-[var(--text-primary)]',
        'accentColor' => 'text-[var(--surface-brand-primary)]',
        'fontFamily' => 'sans',
        'borderRadius' => 'rounded-lg',
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

@extends('layouts.app')

@section('content')
    <!-- Header & Navigation -->
    <x-base.header :navItems="$navItems" :serviceNavItems="$serviceNavItems" :locationNavItems="$locationNavItems" />

    <main class="py-16">
        <!-- Contact Us Hero Section -->
        <x-base.hero-section 
            :title="$heroProps['title']"
            :subtitle="$heroProps['subtitle']"
            :variant="$heroProps['variant']"
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
        />

        <!-- Contact Info Cards -->
        <x-base.features-grid 
            :title="$featuresGridProps['title']"
            :subtitle="$featuresGridProps['subtitle']"
            :features="$featuresGridProps['features']"
            :layout="$featuresGridProps['layout']"
            :columns="$featuresGridProps['columns']"
            :show-icons="$featuresGridProps['showIcons']"
            :show-descriptions="$featuresGridProps['showDescriptions']"
            :icon-style="$featuresGridProps['iconStyle']"
            :bg-color="$featuresGridProps['bgColor']"
            :text-color="$featuresGridProps['textColor']"
            :accent-color="$featuresGridProps['accentColor']"
            :font-family="$featuresGridProps['fontFamily']"
            :padding="$featuresGridProps['padding']"
            :border-radius="$featuresGridProps['borderRadius']"
            :container-class="$featuresGridProps['containerClass']"
            :title-class="$featuresGridProps['titleClass']"
            :subtitle-class="$featuresGridProps['subtitleClass']"
            :feature-card-class="$featuresGridProps['featureCardClass']"
            :feature-icon-class="$featuresGridProps['featureIconClass']"
            :feature-title-class="$featuresGridProps['featureTitleClass']"
            :feature-description-class="$featuresGridProps['featureDescriptionClass']"
        />

        <!-- Contact Form Section -->
        <x-base.content-section 
            :title="$contactFormProps['title']"
            :subtitle="$contactFormProps['subtitle']"
            :content="$contactFormProps['content']"
            :layout="$contactFormProps['layout']"
            :alignment="$contactFormProps['alignment']"
            :background-color="$contactFormProps['backgroundColor']"
            :padding="$contactFormProps['padding']"
            :text-color="$contactFormProps['textColor']"
            :accent-color="$contactFormProps['accentColor']"
            :font-family="$contactFormProps['fontFamily']"
            :border-radius="$contactFormProps['borderRadius']"
            :container-class="$contactFormProps['containerClass']"
            :title-class="$contactFormProps['titleClass']"
            :subtitle-class="$contactFormProps['subtitleClass']"
            :content-class="$contactFormProps['contentClass']"
            :image-class="$contactFormProps['imageClass']"
            :button-class="$contactFormProps['buttonClass']"
        >
            <form action="#" method="POST" class="mx-auto max-w-4xl">
                <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-[var(--text-primary)]">Gamer Name</label>
                        <input type="text" id="name" name="name" class="input input-bordered w-full text-[var(--text-primary)] bg-[var(--surface-secondary)] border-[var(--border-tretinary)] focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-[var(--text-primary)]">Email Address</label>
                        <input type="email" id="email" name="email" class="input input-bordered w-full text-[var(--text-primary)] bg-[var(--surface-secondary)] border-[var(--border-tretinary)] focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="subject" class="block mb-2 text-[var(--text-primary)]">Subject</label>
                    <input type="text" id="subject" name="subject" class="input input-bordered w-full text-[var(--text-primary)] bg-[var(--surface-secondary)] border-[var(--border-tretinary)] focus:outline-none focus:ring-2 focus:ring-primary">
                </div>
                <div class="mb-6">
                    <label for="message" class="block mb-2 text-[var(--text-primary)]">Message</label>
                    <textarea id="message" name="message" rows="6" class="textarea textarea-bordered w-full text-[var(--text-primary)] bg-[var(--surface-secondary)] border-[var(--border-tretinary)] focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                </div>
                <button type="submit" class="bg-[var(--surface-brand-primary)] text-[var(--text-primary)] px-8 py-3 font-bold rounded-lg transition-all duration-300">
                    Send Message
                </button>
            </form>
        </x-base.content-section>

        <!-- Location & Hours Section -->
        <x-base.content-section 
            :title="$locationProps['title']"
            :subtitle="$locationProps['subtitle']"
            :content="$locationProps['content']"
            :layout="$locationProps['layout']"
            :image="$locationProps['image']"
            :image-alt="$locationProps['imageAlt']"
            :background-color="$locationProps['backgroundColor']"
            :padding="$locationProps['padding']"
            :text-color="$locationProps['textColor']"
            :accent-color="$locationProps['accentColor']"
            :font-family="$locationProps['fontFamily']"
            :border-radius="$locationProps['borderRadius']"
            :container-class="$locationProps['containerClass']"
            :title-class="$locationProps['titleClass']"
            :subtitle-class="$locationProps['subtitleClass']"
            :content-class="$locationProps['contentClass']"
            :image-class="$locationProps['imageClass']"
            :button-class="$locationProps['buttonClass']"
        >
            <x-slot name="contentSlot">
                <div class="flex flex-col justify-center space-y-6">
                    <div>
                        <h3 class="mb-2 text-xl font-bold text-primary">Hours of Operation</h3>
                        <div class="space-y-1 text-[var(--text-primary)]">
                            <p>Monday - Thursday: 2:00 PM - 11:00 PM</p>
                            <p>Friday - Saturday: 12:00 PM - 2:00 AM</p>
                            <p>Sunday: 12:00 PM - 11:00 PM</p>
                        </div>
                    </div>
                    <div>
                        <h3 class="mb-2 text-xl font-bold text-primary">Location</h3>
                        <p class="text-[var(--text-primary)]">123 Gaming Plaza, Tech District<br>Downtown Gaming Hub<br>Easy parking & public transit access</p>
                    </div>
                </div>
            </x-slot>
        </x-base.content-section>
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
        :nav-class="$mobileMenuProps['navClass']"
        :nav-item-class="$mobileMenuProps['navItemClass']"
        :nav-item-active-class="$mobileMenuProps['navItemActiveClass']"
        :footer-class="$mobileMenuProps['footerClass']"
        :social-class="$mobileMenuProps['socialClass']"
    />
@endsection
