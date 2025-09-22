{{-- resources/views/components/service-card.blade.php --}}
<div class="card bg-brand-gray-light shadow-xl hover:shadow-2xl transition-shadow duration-300 transform hover:-translate-y-1">
    <figure class="px-6 pt-6">
        <img src="{{ $icon }}" alt="{{ $title }} Icon" class="h-16 w-16">
    </figure>
    <div class="card-body">
        <h3 class="card-title text-xl font-semibold text-brand-blue-dark mb-2 text-center service-title">{{ $title }}</h3>
        <p class="text-brand-gray-medium text-sm mb-4 flex-grow">{{ $description }}</p>
        
        @if(isset($features))
        <ul class="text-sm text-brand-gray-medium list-disc list-inside mb-4 space-y-1">
            @foreach($features as $feature)
            <li>{{ $feature }}</li>
            @endforeach
        </ul>
        @endif

        <div class="card-actions flex flex-col gap-3">
            <a href="#contact-page" class="btn btn-primary bg-brand-red hover:bg-brand-red-dark border-brand-red text-white">
                Request Details
            </a>
            <button class="btn bg-brand-blue-medium hover:bg-brand-blue-dark text-white generate-safety-plan-btn">
                ✨ Suggest Safety Tips
            </button>
        </div>
    </div>
</div>