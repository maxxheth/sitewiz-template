{{-- resources/views/components/hero.blade.php --}}
<section id="home" class="hero min-h-screen bg-brand-blue-dark" style="background-image: url('https://placehold.co/1920x800/0A2540/333333?text=Mining+Equipment+Background');">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-center text-white">
        <div class="max-w-md">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-4 leading-tight tracking-tight">
                {{ $title ?? 'Trusted. Certified. Professional.' }}
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-10">
                {{ $subtitle ?? 'Your partner in comprehensive fire protection and life safety systems. We serve critical industries with dedication and expertise.' }}
            </p>
            <a href="{{ $ctaLink ?? '#services-page' }}" class="btn btn-primary bg-brand-red hover:bg-brand-red-dark border-brand-red hover:border-brand-red-dark text-white">
                {{ $ctaText ?? 'Explore Our Services' }}
            </a>
        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-brand-gray-light">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-blue-dark mb-4">Welcome to Ignite UI</h2>
        <p class="text-brand-gray-medium text-lg leading-relaxed max-w-2xl mx-auto">
            Discover how our advanced fire safety solutions protect your assets and personnel. From initial design to ongoing maintenance, we are your comprehensive fire safety partner.
        </p>
    </div>
</section>