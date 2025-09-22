{{-- resources/views/components/navbar.blade.php --}}
<nav id="main-nav" class="navbar bg-base-100 shadow-lg fixed w-full z-50 top-0 left-0">
    <div class="container mx-auto flex items-center justify-between h-18 md:h-20 px-4">
        <div class="navbar-start">
            <a href="#home" class="flex-shrink-0">
                <img src="https://placehold.co/150x40/0A2540/FFFFFF?text=IgniteUI&font=Inter" alt="IgniteUI Logo" class="h-8 md:h-10">
            </a>
        </div>

        <div class="navbar-center hidden md:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="#home" class="text-brand-blue-dark hover:text-brand-red">Home</a></li>
                <li>
                    <details class="dropdown">
                        <summary class="text-brand-blue-dark hover:text-brand-red">
                            Company
                            <svg class="ml-1 h-4 w-4 fill-current nav-dropdown-arrow" viewBox="0 0 20 20">
                                <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </summary>
                        <ul class="dropdown-content menu bg-base-100 rounded-box z-50 w-52 p-2 shadow">
                            <li><a href="#about-page" class="text-brand-blue-dark hover:text-brand-red">About Us</a></li>
                            <li><a href="#story-page" class="text-brand-blue-dark hover:text-brand-red">Our Story</a></li>
                            <li><a href="#projects-page" class="text-brand-blue-dark hover:text-brand-red">Our Projects</a></li>
                        </ul>
                    </details>
                </li>
                <li><a href="#services-page" class="text-brand-blue-dark hover:text-brand-red">Services</a></li>
                <li><a href="#products-page" class="text-brand-blue-dark hover:text-brand-red">Products</a></li>
                <li><a href="#careers-page" class="text-brand-blue-dark hover:text-brand-red">Careers</a></li>
                <li><a href="#contact-page" class="text-brand-blue-dark hover:text-brand-red">Contact</a></li>
            </ul>
        </div>

        <div class="navbar-end">
            <a href="#request-service-page" class="btn btn-primary bg-brand-red hover:bg-brand-red-dark border-brand-red hover:border-brand-red-dark text-white hidden md:inline-flex">
                Request Service
            </a>
            
            <div class="dropdown dropdown-end md:hidden">
                <label tabindex="0" class="btn btn-ghost" id="mobile-menu-button">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </label>
                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-50 w-52 p-2 shadow" id="mobile-menu">
                    <li><a href="#home" class="mobile-nav-link">Home</a></li>
                    <li>
                        <details>
                            <summary>Company</summary>
                            <ul>
                                <li><a href="#about-page" class="mobile-nav-link">About Us</a></li>
                                <li><a href="#story-page" class="mobile-nav-link">Our Story</a></li>
                                <li><a href="#projects-page" class="mobile-nav-link">Our Projects</a></li>
                            </ul>
                        </details>
                    </li>
                    <li><a href="#services-page" class="mobile-nav-link">Services</a></li>
                    <li><a href="#products-page" class="mobile-nav-link">Products</a></li>
                    <li><a href="#careers-page" class="mobile-nav-link">Careers</a></li>
                    <li><a href="#contact-page" class="mobile-nav-link">Contact</a></li>
                    <li><a href="#request-service-page" class="btn btn-primary bg-brand-red mobile-nav-link">Request Service</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href.length > 1 && href.startsWith('#') && document.querySelector(href)) {
                e.preventDefault();
                const targetElement = document.querySelector(href);
                if (targetElement) {
                    const navbarHeight = 72;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - navbarHeight - 16;
                    window.scrollTo({ top: offsetPosition, behavior: "smooth" });
                }
            }
        });
    });
});
</script>