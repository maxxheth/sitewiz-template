@extends('layouts.app')

@php
    // === PAGE META ===
    $title = $pageTitle ?? "Our Services";
    $metaDescription = $pageDescription ?? "Discover our comprehensive range of services designed to help your business succeed.";
    $metaKeywords = $pageKeywords ?? "services, solutions, business, technology, consulting";
    $canonicalUrl = $pageCanonical ?? "/services";
    $ogImage = $pageOgImage ?? "https://placehold.co/1200x630/1a1a2e/c084fc?text=Our+Services";
    $ogTitle = $pageOgTitle ?? $title;
    $ogDescription = $pageOgDescription ?? $metaDescription;
    $pageType = $pageType ?? "website";
    $language = $pageLanguage ?? "en";
    $author = $pageAuthor ?? "Website Team";
    $schemaType = $pageSchemaType ?? "Service";
    
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
        'currentPage' => 'services',
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
        'logoClass' => 'text-2xl font-bold text-[var(--surface-brand-primary)]',
        'navClass' => 'hidden md:flex space-x-8',
        'navItemClass' => 'text-[var(--text-secondary)] hover:text-[var(--surface-brand-primary)] transition-colors',
        'navItemActiveClass' => 'text-[var(--surface-brand-primary)] font-semibold',
        'mobileMenuClass' => 'md:hidden'
    ];
    
    // === HERO SECTION PROPS ===
    $heroProps = [
        'variant' => 'centered',
        'title' => 'Our Services',
        'subtitle' => 'Comprehensive solutions designed to drive your business forward.',
        'description' => 'Explore our wide range of services designed to provide the ultimate gaming experience, from high-end PC and console rentals to private event hosting and competitive tournaments.',
        'primaryButton' => [
            'text' => 'View All Services',
            'url' => '#services-list',
            'variant' => 'primary'
        ],
        'secondaryButton' => [
            'text' => 'Book an Event',
            'url' => '/contact-us',
            'variant' => 'secondary'
        ],
        'backgroundImage' => isValidImageUrl($backgroundImagePlaceholder) ? $backgroundImagePlaceholder : 'https://placehold.co/1920x800/1a1a2e/c084fc?text=Our+Services',
        'alignment' => 'text-center',
        'fontFamily' => 'sans',
        'padding' => 'py-20 md:py-32',
        'borderRadius' => 'rounded-md',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-4xl md:text-6xl font-bold mb-6',
        'subtitleClass' => 'text-xl md:text-2xl mb-4',
        'descriptionClass' => 'text-lg mb-8 max-w-3xl mx-auto text-[var(--text-tertiary)]'
    ];
    
    // === SERVICES SECTION PROPS ===
    $servicesProps = [
        'title' => 'Our Service Portfolio',
        'subtitle' => 'Comprehensive solutions tailored to your specific needs.',
        'description' => 'We offer a full spectrum of services designed to help businesses of all sizes achieve their objectives through innovative strategies and cutting-edge technology.',
        'layout' => 'grid',
        'columns' => 3,
        'showImages' => true,
        'showDescriptions' => true,
        'showPricing' => false,
        'ctaButton' => [
            'text' => 'Learn More',
            'url' => '/services',
            'variant' => 'primary'
        ],
        'services' => [
            [
                'title' => 'PC Gaming',
                'description' => 'Access our high-performance gaming PCs equipped with the latest hardware and a vast library of popular games.',
                'features' => ['Top-tier graphics cards', 'High-refresh-rate monitors', 'Premium peripherals'],
                'price' => '$10/hour',
                'image' => 'https://placehold.co/600x400/1a1a2e/c084fc?text=PC+Gaming',
                'url' => '/services/pc-gaming'
            ],
            [
                'title' => 'Console Gaming',
                'description' => 'Enjoy the latest titles on PlayStation 5, Xbox Series X, and Nintendo Switch on large 4K TVs.',
                'features' => ['Comfortable seating', 'Wide game selection', 'Multiplayer setups'],
                'price' => '$8/hour',
                'image' => 'https://placehold.co/600x400/1a1a2e/c084fc?text=Console+Gaming',
                'url' => '/services/console-gaming'
            ],
            [
                'title' => 'Private Events',
                'description' => 'Host your birthday party, corporate event, or private tournament in our dedicated event space.',
                'features' => ['Customizable packages', 'Catering options', 'Dedicated staff'],
                'price' => 'Starting at $200',
                'image' => 'https://placehold.co/600x400/1a1a2e/c084fc?text=Private+Events',
                'url' => '/services/private-events'
            ]
        ],
        'fontFamily' => 'sans',
        'padding' => 'py-16 md:py-24',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-center text-[var(--surface-brand-primary)]',
        'subtitleClass' => 'text-xl text-[var(--text-secondary)] mb-6 text-center',
        'descriptionClass' => 'text-lg text-[var(--text-tertiary)] mb-12 text-center max-w-3xl mx-auto',
        'serviceCardClass' => 'bg-[var(--surface-secondary)] rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow',
        'serviceImageClass' => 'w-full h-48 object-cover rounded-lg mb-4',
        'serviceTitleClass' => 'text-xl font-semibold mb-3 text-[var(--surface-brand-primary)]',
        'serviceDescriptionClass' => 'text-[var(--text-secondary)] mb-4',
        'serviceFeaturesClass' => 'space-y-2 mb-4',
        'serviceFeatureClass' => 'flex items-center text-[var(--text-secondary)]',
        'servicePriceClass' => 'text-2xl font-bold text-[var(--surface-brand-primary)]'
    ];
    
    // === CONTENT SECTION PROPS (Tournaments) ===
    $tournamentsProps = [
        'title' => 'Join Our Exciting Tournaments',
        'subtitle' => 'Compete with the best and showcase your skills.',
        'description' => 'Participate in our regular gaming tournaments and stand a chance to win exciting prizes. Whether you are a casual gamer or a pro, we have a place for you.',
        'content' => '<p>Our tournaments are open to all skill levels and offer a great way to meet other gamers, have fun, and win prizes.</p>',
        'image' => null,
        'imagePosition' => 'right',
        'imageAlt' => 'Gamers competing in a tournament',
        'showImage' => true,
        'textAlignment' => 'text-left',
        'padding' => 'py-16 md:py-24',
        'fontFamily' => 'sans',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-[var(--surface-brand-primary)]',
        'subtitleClass' => 'text-xl text-[var(--text-secondary)] mb-6',
        'contentClass' => 'text-lg text-[var(--text-tertiary)] leading-relaxed',
        'imageClass' => 'rounded-lg shadow-lg'
    ];
    
    // === FEATURES GRID PROPS (Features) ===
    $featuresProps = [
        'title' => 'Why Choose Our Services',
        'subtitle' => 'The advantages that set us apart from the competition.',
        'description' => 'We combine expertise, innovation, and dedication to deliver services that not only meet but exceed your expectations.',
        'layout' => 'grid',
        'columns' => 3,
        'showIcons' => true,
        'showDescriptions' => true,
        'iconStyle' => 'outlined',
        'features' => [
            [
                'title' => 'Expert Team',
                'description' => 'Our skilled professionals bring years of experience and industry expertise to every project.',
                'icon' => 'users',
                'iconColor' => 'text-primary-500'
            ],
            [
                'title' => 'Proven Results',
                'description' => 'We have a track record of delivering successful projects and measurable outcomes for our clients.',
                'icon' => 'chart',
                'iconColor' => 'text-success-500'
            ],
            [
                'title' => 'Ongoing Support',
                'description' => 'We provide continuous support and maintenance to ensure your solutions remain effective and up-to-date.',
                'icon' => 'support',
            ]
        ],
        'fontFamily' => 'sans',
        'padding' => 'py-16 md:py-24',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-center text-[var(--surface-brand-primary)]',
        'subtitleClass' => 'text-xl text-[var(--text-secondary)] mb-6 text-center',
        'descriptionClass' => 'text-lg text-[var(--text-tertiary)] mb-12 text-center max-w-3xl mx-auto',
        'featureCardClass' => 'bg-[var(--surface-secondary)] rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow',
        'featureIconClass' => 'w-12 h-12 mb-4',
        'featureTitleClass' => 'text-xl font-semibold mb-3 text-[var(--surface-brand-primary)]',
        'featureDescriptionClass' => 'text-[var(--text-secondary)]'
    ];
    
    // === FEATURES GRID PROPS (Process) ===
    $processProps = [
        'title' => 'Our Process',
        'subtitle' => 'How we deliver exceptional results for our clients.',
        'description' => 'Our proven methodology ensures consistent, high-quality outcomes while keeping you informed and involved throughout the entire process.',
        'layout' => 'timeline',
        'columns' => 4,
        'showIcons' => true,
        'showDescriptions' => true,
        'iconStyle' => 'outlined',
        'features' => [
            [
                'title' => 'Consultation',
                'description' => 'We start by understanding your vision, goals, and requirements to create a tailored plan.',
                'icon' => 'comments'
            ],
            [
                'title' => 'Design & Planning',
                'description' => 'Our team designs a comprehensive blueprint, outlining every detail of the project.',
                'icon' => 'drafting-compass'
            ],
            [
                'title' => 'Development & Execution',
                'description' => 'We bring the plan to life, building your solution with precision and expertise.',
                'icon' => 'cogs'
            ],
            [
                'title' => 'Launch & Support',
                'description' => 'After a successful launch, we provide ongoing support to ensure continued success.',
                'icon' => 'rocket'
            ]
        ],
        'padding' => 'py-16 md:py-24',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-center text-[var(--surface-brand-primary)]',
        'subtitleClass' => 'text-xl text-[var(--text-secondary)] mb-6 text-center',
        'descriptionClass' => 'text-lg text-[var(--text-tertiary)] mb-12 text-center max-w-3xl mx-auto',
        'featureCardClass' => 'bg-[var(--surface-tertiary)] rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow',
        'featureIconClass' => 'w-12 h-12 mb-4',
        'featureTitleClass' => 'text-xl font-semibold mb-3 text-[var(--surface-brand-primary)]',
        'featureDescriptionClass' => 'text-[var(--text-secondary)]'
    ];
    
    // === CTA SECTION PROPS ===
    $ctaProps = [
        'title' => 'Ready to Get Started?',
        'subtitle' => 'Let\'s discuss your project and create a solution that works for you.',
        'description' => 'Contact us today for a free consultation and discover how our services can help transform your business.',
        'backgroundImage' => 'https://placehold.co/1920x600/1a1a2e/c084fc?text=CTA+Background',
        'backgroundOverlay' => 'var(--primary-color-inverted)',
        'textColor' => 'text-[var(--text-primary)]',
        'alignment' => 'text-center',
        'primaryButton' => [
            'text' => 'Start Your Project',
            'url' => '/contact-us',
            'variant' => 'primary'
        ],
        'secondaryButton' => [
            'text' => 'View Portfolio',
            'url' => '/portfolio',
            'variant' => 'outline'
        ],
        'padding' => 'py-16 md:py-24',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-[var(--surface-brand-primary)]',
        'subtitleClass' => 'text-xl mb-6 text-[var(--text-secondary)]',
        'descriptionClass' => 'text-lg mb-8 max-w-2xl mx-auto text-[var(--text-tertiary)]'
    ];
    
    // === FOOTER PROPS ===
    $footerProps = [
        'companyName' => 'Cyberia Gaming Lounge',
        'tagline' => 'Where Gaming Dreams Come True.',
        'address' => '123 Gaming Street, Cyber City, CC 12345',
        'city' => 'Cyber City',
        'state' => 'CC',
        'phone' => '+1 (123) 456-7890',
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
        'navItemClass' => 'block py-2 px-4 text-[var(--text-secondary)] hover:text-[var(--surface-brand-primary)] hover:bg-[var(--surface-tertiary)] rounded-md transition-colors',
        'navItemActiveClass' => 'text-[var(--surface-brand-primary)] bg-[var(--surface-tertiary)]',
        'footerClass' => 'p-4 border-t border-[var(--border-tretinary)]',
        'socialClass' => 'flex space-x-4',
        'socialLinkClass' => 'p-2 text-[var(--text-secondary)] hover:text-[var(--surface-brand-primary)] transition-colors'
    ];

    $testimonialsProps = [
        'title' => 'What Our Clients Say',
        'content' => '<p>We have worked with numerous clients across various industries, and their feedback speaks volumes about our commitment to excellence.</p>',
        'layout' => 'two-column',
        'textAlignment' => 'text-left',
        'padding' => 'py-16 md:py-24',
        'fontFamily' => 'sans',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-[var(--surface-brand-primary)]',
        'subtitleClass' => 'text-xl text-[var(--text-secondary)] mb-6',
        'contentClass' => 'text-lg text-[var(--text-tertiary)] leading-relaxed',
        'imageClass' => 'rounded-lg shadow-lg'
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
    <!-- Header -->
    <x-base.header :navItems="$navItems" :serviceNavItems="$serviceNavItems" :locationNavItems="$locationNavItems" />

    <main>
        <!-- Hero Section -->
        <x-base.hero-section 
            :variant="$heroProps['variant']"
            :title="$heroProps['title']"
            :subtitle="$heroProps['subtitle']"
            :description="$heroProps['description']"
            :primary-button="$heroProps['primaryButton']"
            :secondary-button="$heroProps['secondaryButton']"
            :background-image="$heroProps['backgroundImage']"
            :alignment="$heroProps['alignment']"
            :padding="$heroProps['padding']"
            :border-radius="$heroProps['borderRadius']"
            :container-class="$heroProps['containerClass']"
            :title-class="$heroProps['titleClass']"
            :subtitle-class="$heroProps['subtitleClass']"
            :description-class="$heroProps['descriptionClass']"
        />
        
        <!-- Services Section -->
        <x-base.services-section 
            :title="$servicesProps['title']"
            :subtitle="$servicesProps['subtitle']"
            :description="$servicesProps['description']"
            :layout="$servicesProps['layout']"
            :columns="$servicesProps['columns']"
            :show-images="$servicesProps['showImages']"
            :show-descriptions="$servicesProps['showDescriptions']"
            :show-pricing="$servicesProps['showPricing']"
            :cta-button="$servicesProps['ctaButton']"
            :services="$servicesProps['services']"
            :padding="$servicesProps['padding']"
            :border-radius="$servicesProps['borderRadius']"
            :container-class="$servicesProps['containerClass']"
            :title-class="$servicesProps['titleClass']"
            :subtitle-class="$servicesProps['subtitleClass']"
            :description-class="$servicesProps['descriptionClass']"
            :service-card-class="$servicesProps['serviceCardClass']"
            :service-image-class="$servicesProps['serviceImageClass']"
            :service-title-class="$servicesProps['serviceTitleClass']"
            :service-description-class="$servicesProps['serviceDescriptionClass']"
            :service-features-class="$servicesProps['serviceFeaturesClass']"
            :service-feature-class="$servicesProps['serviceFeatureClass']"
            :service-price-class="$servicesProps['servicePriceClass']"
        />

        <!-- Testimonials Section -->
        <x-base.content-section 
            :title="$testimonialsProps['title']"
            :content="$testimonialsProps['content']"
            :layout="'two-column'"
            :alignment="$testimonialsProps['textAlignment']"
            :padding="$testimonialsProps['padding']"
            :border-radius="$testimonialsProps['borderRadius']"
            :container-class="$testimonialsProps['containerClass']"
            :title-class="$testimonialsProps['titleClass']"
            :subtitle-class="$testimonialsProps['subtitleClass']"
            :content-class="$testimonialsProps['contentClass']"
            :image-class="$testimonialsProps['imageClass']"
        />

        <!-- Features Grid Section -->
        <x-base.features-grid 
            :title="$featuresProps['title']"
            :subtitle="$featuresProps['subtitle']"
            :description="$featuresProps['description']"
            :layout="$featuresProps['layout']"
            :columns="$featuresProps['columns']"
            :show-icons="$featuresProps['showIcons']"
            :show-descriptions="$featuresProps['showDescriptions']"
            :icon-style="$featuresProps['iconStyle']"
            :features="$featuresProps['features']"
            :padding="$featuresProps['padding']"
            :border-radius="$featuresProps['borderRadius']"
            :container-class="$featuresProps['containerClass']"
            :title-class="$featuresProps['titleClass']"
            :subtitle-class="$featuresProps['subtitleClass']"
            :description-class="$featuresProps['descriptionClass']"
            :feature-card-class="$featuresProps['featureCardClass']"
            :feature-icon-class="$featuresProps['featureIconClass']"
            :feature-title-class="$featuresProps['featureTitleClass']"
            :feature-description-class="$featuresProps['featureDescriptionClass']"
        />

        <!-- Process Section -->
        <x-base.features-grid 
            :title="$processProps['title']"
            :subtitle="$processProps['subtitle']"
            :description="$processProps['description']"
            :layout="$processProps['layout']"
            :columns="$processProps['columns']"
            :show-icons="$processProps['showIcons']"
            :show-descriptions="$processProps['showDescriptions']"
            :icon-style="$processProps['iconStyle']"
            :features="$processProps['features']"
            :padding="$processProps['padding']"
            :border-radius="$processProps['borderRadius']"
            :container-class="$processProps['containerClass']"
            :title-class="$processProps['titleClass']"
            :subtitle-class="$processProps['subtitleClass']"
            :description-class="$processProps['descriptionClass']"
            :feature-card-class="$processProps['featureCardClass']"
            :feature-icon-class="$processProps['featureIconClass']"
            :feature-title-class="$processProps['featureTitleClass']"
            :feature-description-class="$processProps['featureDescriptionClass']"
        />

        <!-- CTA Section -->
        <x-base.cta-section 
            :title="$ctaProps['title']"
            :subtitle="$ctaProps['subtitle']"
            :description="$ctaProps['description']"
            :background-image="$ctaProps['backgroundImage']"
            :background-overlay="$ctaProps['backgroundOverlay']"
            :text-color="$ctaProps['textColor']"
            :alignment="$ctaProps['alignment']"
            :primary-button="$ctaProps['primaryButton']"
            :secondary-button="$ctaProps['secondaryButton']"
            :padding="$ctaProps['padding']"
            :border-radius="$ctaProps['borderRadius']"
            :container-class="$ctaProps['containerClass']"
            :title-class="$ctaProps['titleClass']"
            :subtitle-class="$ctaProps['subtitleClass']"
            :description-class="$ctaProps['descriptionClass']"
        />
    </main>

    <!-- Footer -->
    <x-base.footer 
        :company-name="$footerProps['companyName']"
        :address="$footerProps['address']"
        :city="$footerProps['city']"
        :state="$footerProps['state']"
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
    />

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
