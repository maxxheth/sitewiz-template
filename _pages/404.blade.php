@extends('layouts.app')

@php
    $title = "Page Not Found";
    $metaDescription = "The page you're looking for doesn't exist.";

    // === HEADER PROPS ===
    $headerProps = [
        'logo' => asset('media/logo/logo.png'),
        'logoPrefix' => null,
        'logoSuffix' => null,
        'alt' => 'Logo',
        'class' => 'h-8',
    ];
@endphp

@section('content')
    <!-- Header & Navigation -->
    <x-base.header />

    <main class="py-16">
        <!-- 404 Error Section -->
        <x-base.content-section 
            title="404 - Page Not Found"
            layout="single"
            alignment="text-center"
        >
            <div class="mx-auto max-w-2xl">
                <div class="mb-8">
                    <div class="text-8xl font-bold text-error mb-4">404</div>
                    <p class="text-xl text-error-content mb-8">Oops! The page you're looking for doesn't exist.</p>
                    <p class="text-base-content mb-8">It might have been moved, deleted, or you entered the wrong URL.</p>
                </div>
                
                <div class="space-y-4">
                    <a href="/" class="inline-block px-8 py-3 font-bold text-error-content bg-error rounded-lg transition-all duration-300 hover:bg-error/80 hover:text-base-content">
                        Go Back Home
                    </a>
                    <div class="text-center">
                        <p class="text-base-content mb-4">Or try one of these popular pages:</p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <a href="/services" class="px-4 py-2 text-error border border-error rounded-lg transition-all duration-300 hover:bg-error hover:text-error-content">
                                Services
                            </a>
                            <a href="/about" class="px-4 py-2 text-error border border-error rounded-lg transition-all duration-300 hover:bg-error hover:text-error-content">
                                About Us
                            </a>
                            <a href="/contact" class="px-4 py-2 text-error border border-error rounded-lg transition-all duration-300 hover:bg-error hover:text-error-content">
                                Contact
                            </a>
                            <a href="/blog" class="px-4 py-2 text-error border border-error rounded-lg transition-all duration-300 hover:bg-error hover:text-error-content">
                                Blog
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </x-base.content-section>
    </main>

    <!-- Footer -->
    <x-base.footer />

    <script>
        // JavaScript for mobile menu toggle
        document.addEventListener('DOMContentLoaded', function () {
            const menuButton = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIconOpen = document.getElementById('menu-icon-open');
            const menuIconClose = document.getElementById('menu-icon-close');

            if(menuButton && mobileMenu) {
                menuButton.addEventListener('click', function () {
                    mobileMenu.classList.toggle('hidden');
                    menuIconOpen.classList.toggle('hidden');
                    menuIconClose.classList.toggle('hidden');
                });
            }
        });
    </script>
@endsection
