@extends('layouts.app')

@php
    // === PAGE META ===
    $title = $pageTitle ?? "About Our Company";
    $metaDescription = $pageDescription ?? "Learn about our company story, values, and mission.";
    $metaKeywords = $pageKeywords ?? "about, company, story, values, mission";
    $canonicalUrl = $pageCanonical ?? "/about";
    $ogImage = $pageOgImage ?? "https://placehold.co/1200x630/1a1a2e/c084fc?text=About+Us";
    $ogTitle = $pageOgTitle ?? $title;
    $ogDescription = $pageOgDescription ?? $metaDescription;
    $pageType = $pageType ?? "website";
    $language = $pageLanguage ?? "en";
    $author = $pageAuthor ?? "Website Team";
    $schemaType = $pageSchemaType ?? "AboutPage";
    
    $backgroundImagePlaceholder = '%BG_IMG_URL%';

    function isValidImageUrl($url) {
        return filter_var($url, FILTER_VALIDATE_URL) && preg_match('/\.(jpeg|jpg|gif|png|svg)$/i', $url);
    }

    // === HEADER PROPS ===
    $headerProps = [
        'logo' => asset('media/logo/logo.png'),
        'logoPrefix' => null,
        'logoSuffix' => null,
        'buttonText' => 'Contact Us',
        'buttonLink' => '#contact',
        'showButton' => true,
        'sticky' => true,
        'currentPage' => 'about',
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
        'mobileMenuClass' => 'md:hidden'
    ];

    // === HERO SECTION PROPS ===
    $heroProps = [
        'variant' => 'centered',
        'title' => 'About Our Company',
        'subtitle' => 'Discover our story, values, and commitment to excellence.',
        'description' => 'Learn about our journey, mission, and the dedicated team behind our success.',
        'primaryButton' => [
            'text' => 'Meet Our Team',
            'url' => '#team',
            'variant' => 'primary'
        ],
        'secondaryButton' => [
            'text' => 'Our Services',
            'url' => '/services',
            'variant' => 'secondary'
        ],
        'backgroundImage' => 'https://placehold.co/1200x600/1a1a2e/c084fc?text=About+Us',
        'backgroundOverlay' => 'var(--primary-color-inverted)',
        'alignment' => 'text-center',
        'fontFamily' => 'sans',
        'padding' => 'py-20 md:py-32',
        'borderRadius' => 'rounded-md',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-4xl md:text-6xl font-bold mb-6',
        'subtitleClass' => 'text-xl md:text-2xl mb-4',
        'descriptionClass' => 'text-lg mb-8 max-w-3xl mx-auto'
    ];

    // === CONTENT SECTION PROPS (Story) ===
    $storyProps = [
        'title' => 'Our Story',
        'subtitle' => 'A journey of innovation and growth.',
        'content' => 'Founded with a vision to transform businesses through innovative solutions, our company has grown from a small startup to a trusted partner for organizations worldwide. We believe in the power of technology to create positive change and meaningful impact.',
        'image' => 'https://placehold.co/600x400/1a1a2e/c084fc?text=Our+Story',
        'imagePosition' => 'right',
        'imageAlt' => 'Our story',
        'showImage' => true,
        'textAlignment' => 'text-left',
        'padding' => 'py-16 md:py-24',
        'fontFamily' => 'sans',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-3xl md:text-4xl font-bold mb-4',
        'subtitleClass' => 'text-xl text-[var(--text-primary)] mb-6',
        'contentClass' => 'text-lg text-[var(--text-primary)] leading-relaxed',
        'imageClass' => 'rounded-lg shadow-lg'
    ];

    // === FEATURES GRID PROPS (Values) ===
    $valuesProps = [
        'title' => 'Our Core Values',
        'subtitle' => 'The principles that guide everything we do.',
        'description' => 'These values shape our culture, drive our decisions, and define our relationships with clients and partners.',
        'layout' => 'grid',
        'columns' => 3,
        'showIcons' => true,
        'showDescriptions' => true,
        'iconStyle' => 'outlined',
        'features' => [
            [
                'title' => 'Innovation',
                'description' => 'We embrace new ideas and cutting-edge technologies to deliver forward-thinking solutions.',
                'icon' => 'lightbulb',
            ],
            [
                'title' => 'Excellence',
                'description' => 'We strive for the highest standards in everything we do, delivering exceptional quality.',
                'icon' => 'star',
            ],
            [
                'title' => 'Integrity',
                'description' => 'We build trust through transparency, honesty, and ethical business practices.',
                'icon' => 'shield',
            ]
        ],
        'padding' => 'py-16 md:py-24',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-3xl md:text-4xl font-bold mb-4 text-center',
        'subtitleClass' => 'text-xl text-[var(--text-primary)] mb-6 text-center',
        'descriptionClass' => 'text-lg text-[var(--text-primary)] mb-12 text-center max-w-3xl mx-auto',
        'featureCardClass' => 'bg-[var(--surface-secondary)] rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow',
        'featureIconClass' => 'w-12 h-12 mb-4',
        'featureTitleClass' => 'text-xl font-semibold mb-3',
        'featureDescriptionClass' => 'text-[var(--text-primary)]'
    ];

    // === CONTENT SECTION PROPS (Mission) ===
    $missionProps = [
        'title' => 'Our Mission',
        'subtitle' => 'Empowering businesses to achieve their full potential.',
        'content' => 'We are dedicated to providing innovative solutions that help our clients overcome challenges, seize opportunities, and achieve sustainable growth. Our mission is to be the trusted partner that transforms visions into reality.',
        'image' => 'https://placehold.co/600x400/1a1a2e/c084fc?text=Our+Mission',
        'imagePosition' => 'left',
        'imageAlt' => 'Our mission',
        'showImage' => true,
        'textAlignment' => 'text-left',
        'padding' => 'py-16 md:py-24',
        'fontFamily' => 'sans',
        'borderRadius' => 'rounded-lg',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-3xl md:text-4xl font-bold mb-4',
        'subtitleClass' => 'text-xl text-[var(--text-primary)] mb-6',
        'contentClass' => 'text-lg text-[var(--text-primary)] leading-relaxed',
        'imageClass' => 'rounded-lg shadow-lg'
    ];

    // === CTA SECTION PROPS ===
    $ctaProps = [
        'title' => 'Ready to Work Together?',
        'subtitle' => 'Let\'s discuss how we can help achieve your goals.',
        'description' => 'Contact us today to start a conversation about your project and discover how we can make it successful.',
        'backgroundImage' => 'https://placehold.co/1920x600/1a1a2e/c084fc?text=CTA+Background',
        'backgroundOverlay' => 'var(--primary-color-inverted)',
        'alignment' => 'text-center',
        'primaryButton' => [
            'text' => 'Get In Touch',
            'url' => '/contact-us',
            'variant' => 'primary'
        ],
        'secondaryButton' => [
            'text' => 'View Our Services',
            'url' => '/services',
            'variant' => 'outline'
        ],
        'padding' => 'py-20 md:py-32',
        'fontFamily' => 'sans',
        'borderRadius' => 'rounded-md',
        'containerClass' => 'container mx-auto px-4',
        'titleClass' => 'text-3xl md:text-4xl font-bold mb-4',
        'subtitleClass' => 'text-xl mb-6',
        'descriptionClass' => 'text-lg mb-8 max-w-2xl mx-auto'
    ];

    // === FOOTER PROPS ===
    $footerProps = [
        'companyName' => 'Our Company',
        'address' => '123 Business Street, Tech City, TC 12345',
        'city' => 'Tech City',
        'state' => 'TC',
        'zip' => '12345',
        'phone' => '+1 (555) 987-6543',
        'tagline' => 'Excellence in every solution we deliver.',
        'year' => date('Y'),
        'layout' => 'four-column',
        'showSocial' => true,
        'showNewsletter' => true,
        'newsletterTitle' => 'Stay Connected',
        'newsletterDescription' => 'Get the latest updates and insights delivered to your inbox.',
        'newsletterButtonText' => 'Subscribe',
        'newsletterPlaceholder' => 'Enter your email address',
        'socialLinks' => [
            ['name' => 'Facebook', 'url' => 'https://facebook.com/company', 'icon' => 'fab fa-facebook'],
            ['name' => 'Twitter', 'url' => 'https://twitter.com/company', 'icon' => 'fab fa-twitter'],
            ['name' => 'LinkedIn', 'url' => 'https://linkedin.com/company/company', 'icon' => 'fab fa-linkedin'],
            ['name' => 'Instagram', 'url' => 'https://instagram.com/company', 'icon' => 'fab fa-instagram']
        ],
        'footerSections' => [
            [
                'title' => 'Company',
                'links' => [
                    ['text' => 'About Us', 'url' => '/about'],
                    ['text' => 'Our Team', 'url' => '/team'],
                    ['text' => 'Careers', 'url' => '/careers'],
                    ['text' => 'News', 'url' => '/news']
                ]
            ],
            [
                'title' => 'Services',
                'links' => [
                    ['text' => 'Web Development', 'url' => '/services/web-development'],
                    ['text' => 'Digital Marketing', 'url' => '/services/digital-marketing'],
                    ['text' => 'Business Consulting', 'url' => '/services/business-consulting'],
                    ['text' => 'Technical Support', 'url' => '/services/technical-support']
                ]
            ],
            [
                'title' => 'Resources',
                'links' => [
                    ['text' => 'Blog', 'url' => '/blog'],
                    ['text' => 'Case Studies', 'url' => '/case-studies'],
                    ['text' => 'Help Center', 'url' => '/help'],
                    ['text' => 'Contact', 'url' => '/contact-us']
                ]
            ]
        ],
        'fontFamily' => 'sans',
        'padding' => 'py-12 px-4',
        'borderRadius' => 'rounded-md',
        'containerClass' => 'container mx-auto',
        'logoClass' => 'text-2xl font-extrabold mb-2 uppercase',
        'taglineClass' => 'text-[var(--text-primary)] mb-6',
        'copyrightClass' => 'text-sm text-[var(--text-primary)]',
        'sectionTitleClass' => 'text-lg font-bold mb-4 uppercase',
        'linkClass' => 'text-sm transition-colors',
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
            :background-overlay="$heroProps['backgroundOverlay']"
            :alignment="$heroProps['alignment']"
            :font-family="$heroProps['fontFamily']"
            :padding="$heroProps['padding']"
            :border-radius="$heroProps['borderRadius']"
            :container-class="$heroProps['containerClass']"
            :title-class="$heroProps['titleClass']"
            :subtitle-class="$heroProps['subtitleClass']"
            :description-class="$heroProps['descriptionClass']"
        />

        <!-- Story Section -->
        <x-base.content-section 
            :title="$storyProps['title']"
            :subtitle="$storyProps['subtitle']"
            :content="$storyProps['content']"
            :image="$storyProps['image']"
            :image-position="$storyProps['imagePosition']"
            :image-alt="$storyProps['imageAlt']"
            :show-image="$storyProps['showImage']"
            :text-alignment="$storyProps['textAlignment']"
            :padding="$storyProps['padding']"
            :font-family="$storyProps['fontFamily']"
            :border-radius="$storyProps['borderRadius']"
            :container-class="$storyProps['containerClass']"
            :title-class="$storyProps['titleClass']"
            :subtitle-class="$storyProps['subtitleClass']"
            :content-class="$storyProps['contentClass']"
            :image-class="$storyProps['imageClass']"
        />

        <!-- Values Section -->
        <x-base.features-grid 
            :title="$valuesProps['title']"
            :subtitle="$valuesProps['subtitle']"
            :description="$valuesProps['description']"
            :layout="$valuesProps['layout']"
            :columns="$valuesProps['columns']"
            :show-icons="$valuesProps['showIcons']"
            :show-descriptions="$valuesProps['showDescriptions']"
            :icon-style="$valuesProps['iconStyle']"
            :features="$valuesProps['features']"
            :padding="$valuesProps['padding']"
            :border-radius="$valuesProps['borderRadius']"
            :container-class="$valuesProps['containerClass']"
            :title-class="$valuesProps['titleClass']"
            :subtitle-class="$valuesProps['subtitleClass']"
            :description-class="$valuesProps['descriptionClass']"
            :feature-card-class="$valuesProps['featureCardClass']"
            :feature-icon-class="$valuesProps['featureIconClass']"
            :feature-title-class="$valuesProps['featureTitleClass']"
            :feature-description-class="$valuesProps['featureDescriptionClass']"
        />

        <!-- Mission Section -->
        <x-base.content-section 
            :title="$missionProps['title']"
            :subtitle="$missionProps['subtitle']"
            :content="$missionProps['content']"
            :image="$missionProps['image']"
            :image-position="$missionProps['imagePosition']"
            :image-alt="$missionProps['imageAlt']"
            :show-image="$missionProps['showImage']"
            :text-alignment="$missionProps['textAlignment']"
            :padding="$missionProps['padding']"
            :font-family="$missionProps['fontFamily']"
            :border-radius="$missionProps['borderRadius']"
            :container-class="$missionProps['containerClass']"
            :title-class="$missionProps['titleClass']"
            :subtitle-class="$missionProps['subtitleClass']"
            :content-class="$missionProps['contentClass']"
            :image-class="$missionProps['imageClass']"
        />

        <!-- CTA Section -->
        <x-base.cta-section 
            :title="$ctaProps['title']"
            :subtitle="$ctaProps['subtitle']"
            :description="$ctaProps['description']"
            :background-image="$ctaProps['backgroundImage']"
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
