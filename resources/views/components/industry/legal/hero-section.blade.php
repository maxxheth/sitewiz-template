@props([
    'title' => 'Experienced Legal Representation',
    'subtitle' => 'Protecting your rights with professional legal services',
    'firmName' => null,
    'practiceAreas' => [],
    'yearsExperience' => null,
    'freeConsultation' => true,
    'emergencyContact' => false,
    'barAssociation' => 'State Bar Association',
    'designSystem' => null
])

@php
    // Legal-specific styling (professional, trustworthy)
    $legalClasses = 'legal-professional bg-gray-900 text-white';
    $ctaText = $freeConsultation ? 'Free Consultation' : 'Contact Attorney';
    
    // CSS custom properties for legal services
    $cssVars = 'style="';
    $cssVars .= '--color-primary: var(--color-primary, #1f2937); ';
    $cssVars .= '--color-secondary: var(--color-secondary, #374151); ';
    $cssVars .= '--color-accent: var(--color-accent, #d97706); ';
    $cssVars .= '--color-gold: var(--color-gold, #f59e0b); ';
    $cssVars .= '--font-heading: var(--font-heading, serif); ';
    $cssVars .= '--font-body: var(--font-body, system-ui); ';
    $cssVars .= '"';
@endphp

<!-- Legal Services Hero Section -->
<section class="relative px-4 py-24 {{ $legalClasses }} md:py-48" {!! $cssVars !!}>
    <div class="container flex relative flex-col items-center mx-auto">
        <div class="mx-auto w-full text-center">
            <h2 class="mb-4 w-full text-4xl font-bold leading-tight text-center md:text-6xl text-gray-100" style="font-family: var(--font-heading, serif); color: var(--color-accent, #d97706);">
                {{ $title }}
            </h2>
            <p class="mx-auto w-full text-lg text-center md:w-2/3 md:text-2xl text-gray-300" style="font-family: var(--font-body, system-ui);">
                {{ $subtitle }}
            </p>
            
            @if($firmName)
                <p class="mt-4 text-xl text-gray-400" style="font-family: var(--font-body, system-ui);">
                    {{ $firmName }}
                </p>
            @endif
            
            @if($yearsExperience)
                <div class="mt-4 inline-flex items-center px-4 py-2 bg-yellow-600 text-white rounded-lg" style="background-color: var(--color-gold, #f59e0b);">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    {{ $yearsExperience }}+ Years Experience
                </div>
            @endif
            
            @if(count($practiceAreas) > 0)
                <div class="mt-6 flex flex-wrap justify-center gap-2">
                    @foreach($practiceAreas as $area)
                        <span class="px-3 py-1 bg-gray-700 text-gray-100 rounded-full text-sm" style="background-color: var(--color-primary, #1f2937);">
                            {{ $area }}
                        </span>
                    @endforeach
                </div>
            @endif
            
            @if($emergencyContact)
                <div class="mt-4 inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-lg">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    24/7 Emergency Legal Support
                </div>
            @endif
            
            <div class="mt-4 text-sm text-gray-400" style="font-family: var(--font-body, system-ui);">
                Licensed by {{ $barAssociation }}
            </div>
        </div>
        
        <div class="flex justify-center mt-16 w-full md:w-auto space-x-4">
            <button class="px-8 py-4 font-bold text-white uppercase rounded-md transition-colors bg-yellow-600 hover:bg-yellow-700 shadow-lg" style="background-color: var(--color-gold, #f59e0b);">
                {{ $ctaText }}
            </button>
            <button class="px-5 py-2 font-bold text-gray-600 bg-white rounded-md transition-colors hover:bg-gray-50 shadow-lg">
                Case Evaluation
            </button>
        </div>
        
        @if($freeConsultation)
            <div class="mt-4 p-3 bg-green-100 border border-green-300 rounded-lg">
                <p class="text-green-800 text-sm font-semibold" style="font-family: var(--font-body, system-ui);">
                    ✓ Free initial consultation - No obligation
                </p>
            </div>
        @endif
        
        <div class="mt-6 text-center text-sm text-gray-400" style="font-family: var(--font-body, system-ui);">
            <p>Confidential consultation protected by attorney-client privilege</p>
        </div>
    </div>
</section> 