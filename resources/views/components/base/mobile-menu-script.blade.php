@props([
    // Element IDs
    'menuId' => 'mobile-menu',
    'menuBtnId' => 'menu-btn',
    'openIconId' => 'menu-icon-open',
    'closeIconId' => 'menu-icon-close',
    'overlayId' => 'mobile-menu-overlay',

    // Animation Props
    'animation' => 'fade',
    'duration' => 300,
    'easing' => 'ease-in-out',
    'activeClass' => 'active',
    'overlayClass' => 'absolute inset-0 bg-neutral-900 bg-opacity-50',
    'contentClass' => 'relative bg-neutral-50 rounded-lg shadow-xl max-w-sm w-full mx-4 max-h-screen overflow-y-auto',
    'headerClass' => 'flex items-center justify-between p-4 border-b border-neutral-200',
    'titleClass' => 'text-lg font-semibold text-primary-700',
    'closeBtnClass' => 'p-2 text-neutral-400 hover:text-accent-600 transition-colors',
    'navClass' => 'p-4',
    'navItemClass' => 'block py-2 px-4 text-neutral-700 hover:text-accent-600 hover:bg-neutral-100 rounded-md transition-colors',
    'navItemActiveClass' => 'text-accent-600 bg-accent-50',
    'footerClass' => 'p-4 border-t border-neutral-200',
    'socialClass' => 'flex space-x-4',
    'socialLinkClass' => 'p-2 text-neutral-400 hover:text-accent-600 transition-colors',

    // Behavior Props
    'closeOnLinkClick' => true,
    'closeOnOutsideClick' => true,
    'closeOnEscape' => true,
    'preventScroll' => true,
    'autoCloseOnResize' => true,
    'resizeBreakpoint' => 768,

    // Accessibility Props
    'ariaLabel' => 'Toggle mobile menu',
    'ariaExpanded' => 'false',
    'focusTrap' => true,
    'focusTrapSelector' => '.mobile-menu-content',

    // Customization Props
    'customScripts' => [],
    'onOpen' => null,
    'onClose' => null,
    'onToggle' => null,

    // Design System Integration
    'bgColor' => 'bg-primary-inverted',
    'textColor' => 'text-font-primary',
    'accentColor' => 'text-font-secondary',
    'fontFamily' => 'sans',
    'borderRadius' => 'rounded-md',
])

@php
    $designClasses = "font-{$fontFamily}";
@endphp

<!-- Mobile Menu Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenu = document.getElementById('{{ $menuId }}');
        const menuBtn = document.getElementById('{{ $menuBtnId }}');
        const openIcon = document.getElementById('{{ $openIconId }}');
        const closeIcon = document.getElementById('{{ $closeIconId }}');
        const overlay = document.getElementById('{{ $overlayId }}');
        const body = document.body;

        if (!mobileMenu || !menuBtn) {
            console.warn('Mobile menu elements not found');
            return;
        }

        let isOpen = false;
        let focusTrap = null;

        function toggleMenu() {
            isOpen = !isOpen;
            if (isOpen) {
                openMenu();
            } else {
                closeMenu();
            }
            @if($onToggle)
                if (typeof {{ $onToggle }} === 'function') {
                    {{ $onToggle }}(isOpen);
                }
            @endif
        }

        function openMenu() {
            isOpen = true;
            @if($animation === 'fade')
                mobileMenu.style.opacity = '0';
                mobileMenu.style.display = 'block';
                mobileMenu.classList.remove('hidden');
                setTimeout(() => {
                    mobileMenu.style.transition = 'opacity {{ $duration }}ms {{ $easing }}';
                    mobileMenu.style.opacity = '1';
                }, 10);
            @elseif($animation === 'slide')
                mobileMenu.style.transform = 'translateY(-100%)';
                mobileMenu.style.display = 'block';
                mobileMenu.classList.remove('hidden');
                setTimeout(() => {
                    mobileMenu.style.transition = 'transform {{ $duration }}ms {{ $easing }}';
                    mobileMenu.style.transform = 'translateY(0)';
                }, 10);
            @elseif($animation === 'slide-right')
                mobileMenu.style.transform = 'translateX(100%)';
                mobileMenu.style.display = 'block';
                mobileMenu.classList.remove('hidden');
                setTimeout(() => {
                    mobileMenu.style.transition = 'transform {{ $duration }}ms {{ $easing }}';
                    mobileMenu.style.transform = 'translateX(0)';
                }, 10);
            @elseif($animation === 'slide-left')
                mobileMenu.style.transform = 'translateX(-100%)';
                mobileMenu.style.display = 'block';
                mobileMenu.classList.remove('hidden');
                setTimeout(() => {
                    mobileMenu.style.transition = 'transform {{ $duration }}ms {{ $easing }}';
                    mobileMenu.style.transform = 'translateX(0)';
                }, 10);
            @elseif($animation === 'scale')
                mobileMenu.style.transform = 'scale(0.8)';
                mobileMenu.style.opacity = '0';
                mobileMenu.style.display = 'block';
                mobileMenu.classList.remove('hidden');
                setTimeout(() => {
                    mobileMenu.style.transition = 'transform {{ $duration }}ms {{ $easing }}, opacity {{ $duration }}ms {{ $easing }}';
                    mobileMenu.style.transform = 'scale(1)';
                    mobileMenu.style.opacity = '1';
                }, 10);
            @else
                mobileMenu.classList.remove('hidden');
            @endif

            if (openIcon) openIcon.classList.add('hidden');
            if (closeIcon) closeIcon.classList.remove('hidden');

            menuBtn.classList.add('{{ $activeClass }}');
            mobileMenu.classList.add('{{ $activeClass }}');
            menuBtn.setAttribute('aria-expanded', 'true');

            @if($preventScroll)
                body.style.overflow = 'hidden';
            @endif

            @if($focusTrap)
                const focusableElements = mobileMenu.querySelectorAll('{{ $focusTrapSelector }} a, {{ $focusTrapSelector }} button, {{ $focusTrapSelector }} input, {{ $focusTrapSelector }} select, {{ $focusTrapSelector }} textarea, {{ $focusTrapSelector }} [tabindex]:not([tabindex="-1"])');
                const firstElement = focusableElements[0];
                const lastElement = focusableElements[focusableElements.length - 1];
                if (firstElement) firstElement.focus();
                focusTrap = function(e) {
                    if (e.key === 'Tab') {
                        if (e.shiftKey) {
                            if (document.activeElement === firstElement) {
                                e.preventDefault();
                                lastElement.focus();
                            }
                        } else {
                            if (document.activeElement === lastElement) {
                                e.preventDefault();
                                firstElement.focus();
                            }
                        }
                    }
                };
                mobileMenu.addEventListener('keydown', focusTrap);
            @endif

            window.dispatchEvent(new CustomEvent('mobileMenuOpen', { detail: { menu: mobileMenu } }));
            @if($onOpen)
                if (typeof {{ $onOpen }} === 'function') {
                    {{ $onOpen }}(mobileMenu);
                }
            @endif
        }

        function closeMenu() {
            isOpen = false;
            @if($animation === 'fade')
                mobileMenu.style.transition = 'opacity {{ $duration }}ms {{ $easing }}';
                mobileMenu.style.opacity = '0';
                setTimeout(() => {
                    mobileMenu.style.display = 'none';
                    mobileMenu.classList.add('hidden');
                }, {{ $duration }});
            @elseif($animation === 'slide')
                mobileMenu.style.transition = 'transform {{ $duration }}ms {{ $easing }}';
                mobileMenu.style.transform = 'translateY(-100%)';
                setTimeout(() => {
                    mobileMenu.style.display = 'none';
                    mobileMenu.classList.add('hidden');
                }, {{ $duration }});
            @elseif($animation === 'slide-right')
                mobileMenu.style.transition = 'transform {{ $duration }}ms {{ $easing }}';
                mobileMenu.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    mobileMenu.style.display = 'none';
                    mobileMenu.classList.add('hidden');
                }, {{ $duration }});
            @elseif($animation === 'slide-left')
                mobileMenu.style.transition = 'transform {{ $duration }}ms {{ $easing }}';
                mobileMenu.style.transform = 'translateX(-100%)';
                setTimeout(() => {
                    mobileMenu.style.display = 'none';
                    mobileMenu.classList.add('hidden');
                }, {{ $duration }});
            @elseif($animation === 'scale')
                mobileMenu.style.transition = 'transform {{ $duration }}ms {{ $easing }}, opacity {{ $duration }}ms {{ $easing }}';
                mobileMenu.style.transform = 'scale(0.8)';
                mobileMenu.style.opacity = '0';
                setTimeout(() => {
                    mobileMenu.style.display = 'none';
                    mobileMenu.classList.add('hidden');
                }, {{ $duration }});
            @else
                mobileMenu.classList.add('hidden');
            @endif

            if (openIcon) openIcon.classList.remove('hidden');
            if (closeIcon) closeIcon.classList.add('hidden');

            menuBtn.classList.remove('{{ $activeClass }}');
            mobileMenu.classList.remove('{{ $activeClass }}');
            menuBtn.setAttribute('aria-expanded', 'false');

            @if($preventScroll)
                body.style.overflow = '';
            @endif

            @if($focusTrap)
                if (focusTrap) {
                    mobileMenu.removeEventListener('keydown', focusTrap);
                    focusTrap = null;
                }
            @endif

            window.dispatchEvent(new CustomEvent('mobileMenuClose', { detail: { menu: mobileMenu } }));
            @if($onClose)
                if (typeof {{ $onClose }} === 'function') {
                    {{ $onClose }}(mobileMenu);
                }
            @endif
        }

        menuBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            toggleMenu();
        });

        @if($closeOnLinkClick)
            const navLinks = mobileMenu.querySelectorAll('a');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    if (!this.getAttribute('data-dropdown-toggle')) {
                        setTimeout(() => closeMenu(), 100);
                    }
                });
            });
        @endif

        @if($closeOnOutsideClick)
            document.addEventListener('click', function(e) {
                if (isOpen && !mobileMenu.contains(e.target) && !menuBtn.contains(e.target)) {
                    closeMenu();
                }
            });
        @endif

        @if($closeOnEscape)
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && isOpen) {
                    closeMenu();
                }
            });
        @endif

        @if($autoCloseOnResize)
            window.addEventListener('resize', function() {
                if (window.innerWidth >= {{ $resizeBreakpoint }} && isOpen) {
                    closeMenu();
                }
            });
        @endif

        @if(count($customScripts) > 0)
            @foreach($customScripts as $script)
                {!! $script !!}
            @endforeach
        @endif

        if (mobileMenu.classList.contains('hidden')) {
            closeMenu();
        }
    });
</script>

@if($slot->isNotEmpty())
    {{ $slot }}
@endif