// Import CSS
import './app.css';

// Import libraries if you decide to bundle them instead of using CDNs
// import Swiper from 'swiper';
// import BadgerAccordion from 'badger-accordion';

// Wait for the DOM to be fully loaded before running scripts
document.addEventListener('DOMContentLoaded', function() {

	// Initialize Testimonial Swiper
	// Check if Swiper is available (loaded from CDN)
	if (typeof Swiper !== 'undefined') {
	  const testimonialSwiperEl = document.querySelector('.testimonial-swiper');
	  if (testimonialSwiperEl) {
		  const testimonialSwiper = new Swiper(testimonialSwiperEl, {
			  loop: true,
			  slidesPerView: 1,
			  spaceBetween: 20,
			  breakpoints: {
				  640: { slidesPerView: 2, spaceBetween: 30 },
				  1024: { slidesPerView: 3, spaceBetween: 40 }
			  },
			  pagination: {
				  el: '.swiper-pagination',
				  clickable: true,
			  },
			  // autoplay: { delay: 5000, disableOnInteraction: false }, // Optional autoplay
		  });
	  } else {
		  // console.log('Testimonial swiper container not found.');
	  }
	} else {
		console.warn('Swiper library not loaded.');
	}
  
  
	// Initialize FAQ Accordion(s)
	// Check if BadgerAccordion is available (loaded from CDN)
	if (typeof BadgerAccordion !== 'undefined') {
	  const accordionDomNode = document.querySelector('.js-badger-accordion');
	  if (accordionDomNode) {
		  // Creating a new instance of the accordion using default options
		  const accordion = new BadgerAccordion(accordionDomNode);
		  // Example with options: const accordion = new BadgerAccordion(accordionDomNode, { openHeadersOnLoad: [0] });
	  } else {
		  // console.warn('Badger Accordion container (.js-badger-accordion) not found.');
	  }
	} else {
		console.warn('Badger Accordion library not loaded.');
	}
  
  
	// Basic Slider Functionality (Hero Slider)
	const heroSlides = document.querySelectorAll('#slider-content .slide');
	const heroNextButton = document.getElementById('nextSlide');
	const heroPrevButton = document.getElementById('prevSlide');
	const heroPagination = document.getElementById('pagination');
	let heroCurrentSlide = 0;
	// Check if heroSlides exists before accessing length
	const heroTotalSlides = heroSlides ? (heroSlides.length > 0 ? heroSlides.length : 1) : 1;
  
	function showHeroSlide(index) {
		// Check if elements exist before proceeding
		if (!heroSlides || heroSlides.length === 0) {
			if (heroPrevButton) heroPrevButton.style.display = 'none';
			if (heroNextButton) heroNextButton.style.display = 'none';
			if (heroPagination) heroPagination.style.display = 'none';
			return;
		}
  
		if (index < 0 || index >= heroTotalSlides) {
			 // This case should ideally not be reached if button logic is correct
			 return;
		}
		heroCurrentSlide = index;
  
		heroSlides.forEach(slide => slide.classList.add('hidden'));
  
		if (heroSlides[heroCurrentSlide]) {
			heroSlides[heroCurrentSlide].classList.remove('hidden');
		}
  
		if (heroPagination) {
			 heroPagination.textContent = `${heroCurrentSlide + 1} / ${heroTotalSlides}`;
		}
  
		 if (heroPrevButton) {
			heroPrevButton.disabled = heroCurrentSlide === 0;
			heroPrevButton.classList.toggle('opacity-50', heroCurrentSlide === 0);
			heroPrevButton.classList.toggle('cursor-not-allowed', heroCurrentSlide === 0);
		 }
		 if (heroNextButton) {
			heroNextButton.disabled = heroCurrentSlide === heroTotalSlides - 1;
			heroNextButton.classList.toggle('opacity-50', heroCurrentSlide === heroTotalSlides - 1);
			 heroNextButton.classList.toggle('cursor-not-allowed', heroCurrentSlide === heroTotalSlides - 1);
		 }
	}
  
	// Add event listeners only if buttons exist
	if (heroNextButton) {
		heroNextButton.addEventListener('click', () => {
			if (heroCurrentSlide < heroTotalSlides - 1) {
				showHeroSlide(heroCurrentSlide + 1);
			}
		});
	}
	if (heroPrevButton) {
		heroPrevButton.addEventListener('click', () => {
			if (heroCurrentSlide > 0) {
				showHeroSlide(heroCurrentSlide - 1);
			}
		});
	}
	// Initialize hero slider state
	showHeroSlide(heroCurrentSlide);
  
  
	// Mobile Menu Toggle
	const mobileMenuButton = document.getElementById('mobile-menu-button');
	const mobileMenu = document.getElementById('mobile-menu');
  
	 if (mobileMenuButton && mobileMenu) {
		mobileMenuButton.addEventListener('click', () => {
			mobileMenu.classList.toggle('hidden');
			// Optional: Add class to body to prevent scroll when menu is open
			// document.body.classList.toggle('overflow-hidden');
		});
	 } else {
		 // console.warn('Mobile menu button or container not found.');
	 }
  
  }); // End DOMContentLoaded listener
  
  // You can add other module-level code here if needed
  console.log("CoolAir main.js module loaded.");
  