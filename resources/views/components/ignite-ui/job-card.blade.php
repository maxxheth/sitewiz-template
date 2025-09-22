{{-- resources/views/components/job-card.blade.php --}}
<div class="card bg-base-100 shadow-xl border border-gray-200 hover:border-brand-red transition-all duration-200">
    <div class="card-body">
        <h3 class="card-title text-xl font-semibold text-brand-blue-dark job-title">{{ $title }}</h3>
        <p class="text-sm text-brand-gray-medium">{{ $location }}</p>
        <p class="text-sm text-brand-gray-medium mb-3">{{ $type }}</p>
        <p class="text-sm text-brand-gray-dark mb-4 flex-grow job-brief">{{ $description }}</p>
        
        <div class="card-actions flex flex-col gap-3">
            <a href="#contact-page" class="btn btn-primary bg-brand-red hover:bg-brand-red-dark text-white">
                Apply Now
            </a>
            <button class="btn bg-brand-blue-medium hover:bg-brand-blue-dark text-white generate-job-desc-btn">
                ✨ Draft Job Description
            </button>
        </div>
    </div>
</div>