{{-- resources/views/components/footer.blade.php --}}
<footer class="footer footer-center bg-brand-blue-dark text-gray-300 p-10 flex flex-col">
    <div class="footer footer-center bg-brand-blue-dark text-gray-300 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        <div>
            <img src="https://placehold.co/180x50/FFFFFF/0A2540?text=IgniteUI&font=Inter" alt="IgniteUI Logo White" class="h-10 mb-4">
            <p class="text-sm mb-2 leading-relaxed">P.O. Box 12345<br>Salt Lake City, UT 84101</p>
            <p class="text-sm mb-1">Phone: <a href="tel:1-800-555-FIRE" class="link hover:text-brand-red">1-800-555-FIRE</a></p>
            <p class="text-sm">Email: <a href="mailto:info@statefire.com" class="link hover:text-brand-red">info@statefire.com</a></p>
        </div>
        
        <div>
            <span class="footer-title text-white">Quick Links</span>
            <a href="#about-page" class="link link-hover hover:text-brand-red">Our Company</a>
            <a href="#services-page" class="link link-hover hover:text-brand-red">Fire Protection Services</a>
            <a href="#products-page" class="link link-hover hover:text-brand-red">Products & Systems</a>
            <a href="#careers-page" class="link link-hover hover:text-brand-red">Careers</a>
            <a href="#contact-page" class="link link-hover hover:text-brand-red">Contact Us</a>
            <a href="#projects-page" class="link link-hover hover:text-brand-red">Our Projects</a>
        </div>
        
        <div>
            <span class="footer-title text-white">Connect With Us</span>
            <div class="grid grid-flow-col gap-4">
                <a href="#" class="link hover:text-brand-red">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="link hover:text-brand-red">
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z" />
                    </svg>
                </a>
            </div>
        </div>
        
    </div>
    
	<div>
		<span class="footer-title text-white">Our Location</span>
		<div class="bg-brand-blue-medium h-48 w-full rounded-lg overflow-hidden shadow-md">
			<a href="https://maps.google.com/?q=Salt+Lake+City,UT" target="_blank" rel="noopener noreferrer">
				<img src="https://placehold.co/300x200/2A3B4C/FFFFFF?text=View+Map&font=Inter" alt="Location Map" class="object-cover h-full w-full opacity-75 hover:opacity-100 transition-opacity duration-150">
			</a>
		</div>
	</div>
    
    <div class="text-center">
        <p class="text-sm text-gray-400">
            © <span id="footer-year"></span> Ignite UI (StateFire). All Rights Reserved.
            <a href="#privacy-policy-page" class="link hover:text-brand-red ml-2">Privacy Policy</a> |
            <a href="#terms-service-page" class="link hover:text-brand-red ml-1">Terms of Service</a>
        </p>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const yearSpan = document.getElementById('footer-year');
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }
});
</script>