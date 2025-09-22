@extends('layouts.app')

@php
    $title = "HVAC Home Page";
    $metaDescription = "This is a sample page using DaisyUI components.";

    $backgroundImagePlaceholder = '%BG_IMG_URL%';

    function isValidImageUrl($url) {
        return filter_var($url, FILTER_VALIDATE_URL) && preg_match('/\.(jpeg|jpg|gif|png|svg)$/i', $url);
    }
    
@endphp

@section('content')
    @php
        $heroProps = [
            'variant' => 'centered',
            'title' => 'Welcome to Cyberia Gaming Lounge',
            'subtitle' => 'Experience the future of gaming with our state-of-the-art facilities and community-driven environment.',
            'description' => 'Join our vibrant gaming community where passion meets technology. From casual gamers to esports enthusiasts, everyone finds their place at Cyberia.',
            'primaryButton' => [
                'text' => 'Book Now',
                'url' => '#booking',
                'variant' => 'primary'
            ],
            'secondaryButton' => [
                'text' => 'Learn More',
                'url' => '#about',
                'variant' => 'secondary'
            ],
            'backgroundImage' => isValidImageUrl($backgroundImagePlaceholder) ? $backgroundImagePlaceholder : 'https://placehold.co/1920x1080/111827/dc2626?text=Gaming+Background',
            'backgroundOverlay' => 'rgba(0,0,0,0.5)',
            'textColor' => 'text-primary-content',
            'alignment' => 'text-center',
            'phone' => '+1 (555) 123-4567'
        ];

        $servicesProps = [
            'title' => 'Our Gaming Services',
            'subtitle' => 'Everything you need for the ultimate gaming experience',
            'description' => 'From high-performance gaming rigs to immersive VR experiences, we provide top-tier gaming services for all skill levels.',
            'layout' => 'grid',
            'columns' => 2,
            'showImages' => true,
            'showDescriptions' => true,
            'showPricing' => false,
            'ctaButton' => [
                'text' => 'View All Services',
                'url' => '/services',
                'variant' => 'primary'
            ],
            'services' => [
                [
                    'title' => 'High-Performance Gaming PCs',
                    'description' => 'Our state-of-the-art game servers and PCs ensure a lag-free, seamless gaming experience for everyone. Join the fun and compete with the best.',
                    'image' => 'https://placehold.co/600x450/111827/dc2626?text=Gaming+Setup',
                    'imageAlt' => 'A person intensely focused on a computer game in a dark room with red lighting.',
                    'price' => '$15/hour',
                    'features' => ['RTX 4080 Graphics', '32GB RAM', '1TB NVMe SSD'],
                    'url' => '/services/gaming-pcs'
                ],
                [
                    'title' => 'PC Repair & Upgrades',
                    'description' => 'Is your rig running slow? Our expert technicians can diagnose, repair, and upgrade your PC to get you back in the game faster and stronger.',
                    'image' => 'https://placehold.co/600x450/111827/dc2626?text=PC+Repair',
                    'imageAlt' => 'A close-up of a high-end graphics card inside a computer case with red accent lights.',
                    'price' => 'From $50',
                    'features' => ['Hardware Diagnostics', 'Software Optimization', 'Custom Builds'],
                    'url' => '/services/pc-repair'
                ],
                [
                    'title' => 'Virtual Reality Arena',
                    'description' => 'Immerse yourself in other worlds with our cutting-edge VR setups. A truly unforgettable experience for solo or group play.',
                    'image' => 'https://placehold.co/600x450/111827/dc2626?text=VR+Arena',
                    'imageAlt' => 'A person wearing a VR headset and looking amazed.',
                    'price' => '$25/hour',
                    'features' => ['Meta Quest 3', 'HTC Vive Pro', 'Multiplayer VR Games'],
                    'url' => '/services/vr-arena'
                ],
                [
                    'title' => 'Private Events & Parties',
                    'description' => 'Host your next birthday party, corporate event, or private tournament at Cyberia. We offer custom packages to make your event a hit.',
                    'image' => 'https://placehold.co/600x450/111827/dc2626?text=Private+Events',
                    'imageAlt' => 'A group of friends celebrating and gaming together.',
                    'price' => 'Custom Pricing',
                    'features' => ['Private Rooms', 'Catering Options', 'Event Planning'],
                    'url' => '/services/private-events'
                ]
            ]
        ];

        $imageGridProps = [
            'title' => 'Gaming Community',
            'subtitle' => 'Join our vibrant community of gamers',
            'description' => 'Experience the camaraderie and competition that makes gaming truly special.',
            'layout' => 'grid',
            'columns' => 4,
            'gap' => 'gap-4',
            'showCaptions' => true,
            'showOverlay' => true,
            'overlayOpacity' => 'bg-primary-900/50',
            'images' => [
                [
                    'src' => 'https://placehold.co/400x400/111827/dc2626?text=Community',
                    'alt' => 'Gamers playing together',
                    'caption' => 'Community Gaming',
                    'link' => '/community'
                ],
                [
                    'src' => 'https://placehold.co/400x400/111827/dc2626?text=Tournaments',
                    'alt' => 'Trophy for a tournament',
                    'caption' => 'Tournaments',
                    'link' => '/tournaments'
                ],
                [
                    'src' => 'https://placehold.co/400x400/111827/dc2626?text=Events',
                    'alt' => 'People at a gaming event',
                    'caption' => 'Special Events',
                    'link' => '/events'
                ],
                [
                    'src' => 'https://placehold.co/400x400/111827/dc2626?text=Lounge',
                    'alt' => 'Comfortable gaming lounge',
                    'caption' => 'Gaming Lounge',
                    'link' => '/lounge'
                ]
            ]
        ];

        $pricingProps = [
            'title' => 'Choose Your Plan',
            'subtitle' => 'Flexible options for every gamer',
            'description' => 'Select the perfect plan that fits your gaming needs and budget.',
            'layout' => 'cards',
            'columns' => 3,
            'showFeatures' => true,
            'showPopular' => true,
            'popularText' => 'Most Popular',
            'ctaButton' => [
                'text' => 'Get Started',
                'url' => '/signup',
                'variant' => 'primary'
            ],
            'plans' => [
                [
                    'name' => 'Standard Plan',
                    'price' => '$25',
                    'period' => 'per month',
                    'description' => 'Perfect for casual gamers',
                    'features' => ['50 hours/month', 'Standard PC access', 'Community event access', 'Basic support'],
                    'featured' => false,
                    'buttonText' => 'Choose Standard',
                    'buttonVariant' => 'outline'
                ],
                [
                    'name' => 'Premium Plan',
                    'price' => '$45',
                    'period' => 'per month',
                    'description' => 'For serious gamers',
                    'features' => ['120 hours/month', 'High-end PC access', 'Priority support', '1 free drink per visit', 'Tournament entry'],
                    'featured' => true,
                    'buttonText' => 'Choose Premium',
                    'buttonVariant' => 'primary'
                ],
                [
                    'name' => 'Ultimate Plan',
                    'price' => '$60',
                    'period' => 'per month',
                    'description' => 'For gaming enthusiasts',
                    'features' => ['Unlimited hours', 'Pro-spec PC access', '24/7 support', 'Free drinks & snacks', 'VIP events access'],
                    'featured' => false,
                    'buttonText' => 'Choose Ultimate',
                    'buttonVariant' => 'outline'
                ]
            ]
        ];

        $promotionsProps = [
            'title' => 'Special Offers',
            'subtitle' => 'Limited time deals for our community',
            'description' => 'Take advantage of our exclusive promotions and save on your gaming experience.',
            'layout' => 'grid',
            'columns' => 2,
            'showCountdown' => true,
            'showBadges' => true,
            'badgeText' => 'Limited Time',
            'promotions' => [
                [
                    'title' => 'Student Discount',
                    'description' => '20% off for students with valid ID',
                    'discount' => '20% OFF',
                    'validUntil' => '2024-12-31',
                    'image' => 'https://placehold.co/400x300/111827/dc2626?text=Student+Discount',
                    'buttonText' => 'Claim Offer',
                    'buttonUrl' => '/student-discount'
                ],
                [
                    'title' => 'Weekend Warriors',
                    'description' => 'Buy 2 hours, get 1 free on weekends',
                    'discount' => 'Buy 2 Get 1',
                    'validUntil' => '2024-12-31',
                    'image' => 'https://placehold.co/400x300/111827/dc2626?text=Weekend+Deal',
                    'buttonText' => 'Learn More',
                    'buttonUrl' => '/weekend-deal'
                ]
            ]
        ];

        $ctaProps = [
            'title' => 'Ready to Game?',
            'subtitle' => 'Join our community today',
            'description' => 'Experience the ultimate gaming environment with state-of-the-art equipment and a vibrant community.',
            'backgroundImage' => 'https://placehold.co/1920x600/111827/dc2626?text=CTA+Background',
            'backgroundOverlay' => 'rgba(0,0,0,0.7)',
            'textColor' => 'text-primary-content',
            'alignment' => 'text-center',
            'primaryButton' => [
                'text' => 'Book Your Session',
                'url' => '/booking',
                'variant' => 'primary'
            ],
            'secondaryButton' => [
                'text' => 'Contact Us',
                'url' => '/contact',
                'variant' => 'outline'
            ]
        ];

        $contentProps = [
            'title' => 'About Cyberia Gaming Lounge',
            'subtitle' => 'Where Gaming Dreams Come True',
            'content' => '<p>Cyberia Gaming Lounge is more than just a gaming center - it\'s a community hub where gamers of all levels come together to share their passion for gaming. Our state-of-the-art facilities feature the latest gaming technology, comfortable seating, and a welcoming atmosphere that makes everyone feel at home.</p><p>Whether you\'re a casual gamer looking for some fun or a competitive player seeking the ultimate gaming experience, Cyberia has everything you need to take your gaming to the next level.</p>',
            'image' => 'https://placehold.co/600x400/111827/dc2626?text=About+Cyberia',
            'imagePosition' => 'right',
            'imageAlt' => 'Gaming lounge interior with multiple gaming stations',
            'showImage' => true,
            'textAlignment' => 'text-left',
            'padding' => 'py-16'
        ];

        $featuresProps = [
            'title' => 'Why Choose Cyberia?',
            'subtitle' => 'The ultimate gaming experience',
            'description' => 'Discover what makes us the preferred choice for gamers in the community.',
            'layout' => 'grid',
            'columns' => 3,
            'showIcons' => true,
            'showDescriptions' => true,
            'iconStyle' => 'outlined',
            'features' => [
                [
                    'title' => 'High-End Equipment',
                    'description' => 'Latest RTX graphics cards and high-refresh monitors',
                    'icon' => 'computer',
                    'iconColor' => 'text-primary-600'
                ],
                [
                    'title' => '24/7 Support',
                    'description' => 'Round-the-clock technical support and assistance',
                    'icon' => 'support',
                    'iconColor' => 'text-info-600'
                ],
                [
                    'title' => 'Community Events',
                    'description' => 'Regular tournaments, meetups, and gaming events',
                    'icon' => 'users',
                    'iconColor' => 'text-success-600'
                ],
                [
                    'title' => 'Comfortable Environment',
                    'description' => 'Ergonomic chairs and climate-controlled spaces',
                    'icon' => 'comfort',
                    'iconColor' => 'text-accent-600'
                ],
                [
                    'title' => 'Fast Internet',
                    'description' => 'Gigabit fiber internet for lag-free gaming',
                    'icon' => 'wifi',
                    'iconColor' => 'text-warning-600'
                ],
                [
                    'title' => 'Food & Drinks',
                    'description' => 'Snacks, drinks, and gaming fuel available',
                    'icon' => 'food',
                    'iconColor' => 'text-secondary-600'
                ]
            ]
        ];

        $storeFinderProps = [
            'title' => 'Find Our Gaming Lounges',
            'subtitle' => 'Visit us at one of our convenient locations near you.',
            'description' => 'Discover our gaming lounges and find the perfect location for your next gaming session.',
            'locations' => [
                [
                    'name' => 'Cyberia Downtown',
                    'address' => '123 Gaming Street, Downtown',
                    'city' => 'Downtown',
                    'phone' => '(555) 123-4567',
                    'hours' => 'Mon-Sun: 10AM - 2AM',
                    'directions' => 'https://maps.google.com',
                    'image' => 'https://placehold.co/400x300/111827/dc2626?text=Downtown+Location',
                    'features' => ['High-end PCs', 'VR Arena', 'Tournament Space'],
                    'status' => 'open'
                ],
                [
                    'name' => 'Cyberia Westside',
                    'address' => '456 Tech Avenue, Westside',
                    'city' => 'Westside',
                    'phone' => '(555) 987-6543',
                    'hours' => 'Mon-Sun: 11AM - 1AM',
                    'directions' => 'https://maps.google.com',
                    'image' => 'https://placehold.co/400x300/111827/dc2626?text=Westside+Location',
                    'features' => ['Gaming PCs', 'Console Gaming', 'Private Rooms'],
                    'status' => 'open'
                ],
                [
                    'name' => 'Cyberia Eastside',
                    'address' => '789 Digital Blvd, Eastside',
                    'city' => 'Eastside',
                    'phone' => '(555) 456-7890',
                    'hours' => 'Mon-Sun: 12PM - 12AM',
                    'directions' => 'https://maps.google.com',
                    'image' => 'https://placehold.co/400x300/111827/dc2626?text=Eastside+Location',
                    'features' => ['VR Gaming', 'Esports Arena', 'Food & Drinks'],
                    'status' => 'coming-soon'
                ]
            ],
            'layout' => 'grid',
            'columns' => 3,
            'gap' => 'gap-6',
            'showMap' => true,
            'mapType' => 'embed',
            'mapSrc' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28e119a%3A0x7f0d0c3b3b3b3b3b!2s123%20Gaming%20Street!5e0!3m2!1sen!2sus!4v1234567890',
            'mapHeight' => 'h-96',
            'searchable' => true,
            'filterByCity' => true,
            'showStatus' => true,
            'showFeatures' => true,
            'showDirections' => true,
            'showPhone' => true,
            'showHours' => true,
            'fontFamily' => 'body',
            'padding' => 'py-16',
            'borderRadius' => 'rounded-lg',
            'containerClass' => 'container mx-auto px-4',
            'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-center text-primary-700',
            'subtitleClass' => 'text-lg text-neutral-600 mb-8 text-center max-w-2xl mx-auto',
            'descriptionClass' => 'text-base text-neutral-600 mb-12 text-center max-w-3xl mx-auto',
            'locationCardClass' => 'bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow',
            'mapClass' => 'w-full rounded-lg shadow-lg',
            'searchInputClass' => 'py-2 pr-4 pl-10 rounded-lg border border-neutral-300 focus:ring-2 focus:ring-accent-500 focus:border-transparent',
            'filterSelectClass' => 'px-4 py-2 rounded-lg border border-neutral-300 focus:ring-2 focus:ring-accent-500 focus:border-transparent',
            'statusClass' => 'inline-flex items-center px-2 py-1 text-xs font-medium rounded-full',
            'featureClass' => 'inline-flex items-center px-2 py-1 text-xs font-medium bg-neutral-100 text-neutral-800 rounded-md mr-2 mb-2',
            'directionsButtonClass' => 'inline-flex items-center px-4 py-2 text-white bg-accent-600 rounded-lg transition-colors hover:bg-accent-700',
            'statusColors' => [
                'open' => 'bg-success-100 text-success-800',
                'closed' => 'bg-error-100 text-error-800',
                'coming-soon' => 'bg-warning-100 text-warning-800'
            ]
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
            'overlayClass' => 'absolute inset-0 bg-neutral-900 bg-opacity-50',
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
            'contentClass' => 'relative bg-neutral-50 rounded-lg shadow-xl max-w-sm w-full mx-4 max-h-screen overflow-y-auto',
            'headerClass' => 'flex items-center justify-between p-4 border-b border-neutral-200',
            'titleClass' => 'text-lg font-semibold text-primary-700',
            'navClass' => 'p-4',
            'navItemClass' => 'block py-2 px-4 text-neutral-700 hover:text-accent-600 hover:bg-neutral-100 rounded-md transition-colors',
            'navItemActiveClass' => 'text-accent-600 bg-accent-50',
            'footerClass' => 'p-4 border-t border-neutral-200',
            'socialClass' => 'flex space-x-4',
            'socialLinkClass' => 'p-2 text-neutral-400 hover:text-accent-600 transition-colors'
        ];

        $footerProps = [
            'companyName' => 'CYBERIA Gaming Lounge',
            'address' => '123 Gaming Street, Cyber City, CC 12345',
            'city' => 'Cyber City',
            'state' => 'CC',
            'zip' => '12345',
            'phone' => '+1 (555) 123-4567',
            'tagline' => 'Level Up Your Gaming Experience!',
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
            'taglineClass' => 'text-neutral-400 mb-6',
            'copyrightClass' => 'text-sm text-neutral-500',
            'sectionTitleClass' => 'text-lg font-bold mb-4 uppercase',
            'linkClass' => 'text-sm transition-colors',
            'socialLinkClass' => 'p-2 text-neutral-400 hover:text-accent-600 transition-colors'
        ];

        // === HEADER PROPS ===
        $headerProps = [
            'logo' => asset('media/logo/logo.png'),
            'logoPrefix' => null,
            'logoSuffix' => null,
            'navItems' => $navItems,
            'serviceNavItems' => $serviceNavItems,
            'locationNavItems' => $locationNavItems,
            'mobileMenuProps' => $mobileMenuProps
        ];
    @endphp

    <x-announcement-bar />

    <x-base.header :navItems="$navItems"  :serviceNavItems="$serviceNavItems" :locationNavItems="$locationNavItems" />

    <main>
        <x-base.hero-section 
            :variant="$heroProps['variant']"
            :title="$heroProps['title']"
            :subtitle="$heroProps['subtitle']"
            :description="$heroProps['description']"
            :primary-button="$heroProps['primaryButton']"
            :secondary-button="$heroProps['secondaryButton']"
            :background-image="$heroProps['backgroundImage']"
            :background-overlay="$heroProps['backgroundOverlay']"
            :alignment="$heroProps['alignment']"
        />
        
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
        />

        <x-base.image-grid 
            :title="$imageGridProps['title']"
            :subtitle="$imageGridProps['subtitle']"
            :description="$imageGridProps['description']"
            :layout="$imageGridProps['layout']"
            :columns="$imageGridProps['columns']"
            :gap="$imageGridProps['gap']"
            :show-captions="$imageGridProps['showCaptions']"
            :show-overlay="$imageGridProps['showOverlay']"
            :overlay-opacity="$imageGridProps['overlayOpacity']"
            :images="$imageGridProps['images']"
        />

        <x-base.pricing-section 
            :title="$pricingProps['title']"
            :subtitle="$pricingProps['subtitle']"
            :description="$pricingProps['description']"
            :layout="$pricingProps['layout']"
            :columns="$pricingProps['columns']"
            :show-features="$pricingProps['showFeatures']"
            :show-popular="$pricingProps['showPopular']"
            :popular-text="$pricingProps['popularText']"
            :cta-button="$pricingProps['ctaButton']"
            :plans="$pricingProps['plans']"
        />

        <x-base.promotions-section 
            :title="$promotionsProps['title']"
            :subtitle="$promotionsProps['subtitle']"
            :description="$promotionsProps['description']"
            :layout="$promotionsProps['layout']"
            :columns="$promotionsProps['columns']"
            :show-countdown="$promotionsProps['showCountdown']"
            :show-badges="$promotionsProps['showBadges']"
            :badge-text="$promotionsProps['badgeText']"
            :promotions="$promotionsProps['promotions']"
        />

        <x-base.cta-section 
            :title="$ctaProps['title']"
            :subtitle="$ctaProps['subtitle']"
            :description="$ctaProps['description']"
            :background-image="$ctaProps['backgroundImage']"
            :background-overlay="$ctaProps['backgroundOverlay']"
            :alignment="$ctaProps['alignment']"
            :primary-button="$ctaProps['primaryButton']"
            :secondary-button="$ctaProps['secondaryButton']"
        />

        <x-base.content-section 
            :title="$contentProps['title']"
            :subtitle="$contentProps['subtitle']"
            :content="$contentProps['content']"
            :image="$contentProps['image']"
            :image-position="$contentProps['imagePosition']"
            :image-alt="$contentProps['imageAlt']"
            :show-image="$contentProps['showImage']"
            :text-alignment="$contentProps['textAlignment']"
            :padding="$contentProps['padding']"
        />

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
        />

        <x-base.store-finder 
            :title="$storeFinderProps['title']"
            :subtitle="$storeFinderProps['subtitle']"
            :description="$storeFinderProps['description']"
            :locations="$storeFinderProps['locations']"
            :layout="$storeFinderProps['layout']"
            :columns="$storeFinderProps['columns']"
            :gap="$storeFinderProps['gap']"
            :show-map="$storeFinderProps['showMap']"
            :map-type="$storeFinderProps['mapType']"
            :map-src="$storeFinderProps['mapSrc']"
            :map-height="$storeFinderProps['mapHeight']"
            :searchable="$storeFinderProps['searchable']"
            :filter-by-city="$storeFinderProps['filterByCity']"
            :show-status="$storeFinderProps['showStatus']"
            :show-features="$storeFinderProps['showFeatures']"
            :show-directions="$storeFinderProps['showDirections']"
            :show-phone="$storeFinderProps['showPhone']"
            :show-hours="$storeFinderProps['showHours']"
            :font-family="$storeFinderProps['fontFamily']"
            :padding="$storeFinderProps['padding']"
            :border-radius="$storeFinderProps['borderRadius']"
            :container-class="$storeFinderProps['containerClass']"
            :title-class="$storeFinderProps['titleClass']"
            :subtitle-class="$storeFinderProps['subtitleClass']"
            :description-class="$storeFinderProps['descriptionClass']"
            :location-card-class="$storeFinderProps['locationCardClass']"
            :map-class="$storeFinderProps['mapClass']"
            :search-input-class="$storeFinderProps['searchInputClass']"
            :filter-select-class="$storeFinderProps['filterSelectClass']"
            :status-class="$storeFinderProps['statusClass']"
            :feature-class="$storeFinderProps['featureClass']"
            :directions-button-class="$storeFinderProps['directionsButtonClass']"
        />
    </main>

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