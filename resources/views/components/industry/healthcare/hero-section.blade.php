@props([
    'title' => 'Expert Healthcare Services',
    'subtitle' => 'Trusted medical care in your community',
    'providerName' => null,
    'specialties' => [],
    'acceptingPatients' => true,
    'showAppointmentButton' => true,
    'showInsuranceInfo' => true,
    'telehealthAvailable' => false,
    'urgentCare' => false,
    'designSystem' => null
])

@php
    // Healthcare-specific styling
    $healthcareClasses = 'healthcare-trust bg-blue-900 text-white';
    $ctaText = $acceptingPatients ? 'Schedule Appointment' : 'Contact Office';
    
    // CSS custom properties for healthcare
    $cssVars = 'style="';
    $cssVars .= '--color-primary: var(--color-primary, #1e40af); ';
    $cssVars .= '--color-secondary: var(--color-secondary, #3b82f6); ';
    $cssVars .= '--color-accent: var(--color-accent, #60a5fa); ';
    $cssVars .= '--font-heading: var(--font-heading, system-ui); ';
    $cssVars .= '--font-body: var(--font-body, system-ui); ';
    $cssVars .= '"';
@endphp

<!-- Healthcare Hero Section -->
<section class="relative px-4 py-24 {{ $healthcareClasses }} md:py-48" {!! $cssVars !!}>
    <div class="container flex relative flex-col items-center mx-auto">
        <div class="mx-auto w-full text-center">
            <h2 class="mb-4 w-full text-4xl font-extrabold leading-tight text-center md:text-6xl text-blue-100" style="font-family: var(--font-heading, system-ui); color: var(--color-accent, #60a5fa);">
                {{ $title }}
            </h2>
            <p class="mx-auto w-full text-lg text-center md:w-2/3 md:text-2xl text-blue-200" style="font-family: var(--font-body, system-ui);">
                {{ $subtitle }}
            </p>
            
            @if($providerName)
                <p class="mt-4 text-xl text-blue-300" style="font-family: var(--font-body, system-ui);">
                    Dr. {{ $providerName }}
                </p>
            @endif
            
            @if(count($specialties) > 0)
                <div class="mt-6 flex flex-wrap justify-center gap-2">
                    @foreach($specialties as $specialty)
                        <span class="px-3 py-1 bg-blue-800 text-blue-100 rounded-full text-sm" style="background-color: var(--color-primary, #1e40af);">
                            {{ $specialty }}
                        </span>
                    @endforeach
                </div>
            @endif
            
            @if($telehealthAvailable)
                <div class="mt-4 inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-lg">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                    </svg>
                    Telehealth Available
                </div>
            @endif
            
            @if($urgentCare)
                <div class="mt-4 inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-lg">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                    </svg>
                    Urgent Care Available
                </div>
            @endif
        </div>
        
        <div class="flex justify-center mt-16 w-full md:w-auto space-x-4">
            @if($showAppointmentButton)
                <button class="px-8 py-4 font-bold text-white uppercase rounded-md transition-colors bg-blue-600 hover:bg-blue-700 shadow-lg" style="background-color: var(--color-primary, #1e40af);">
                    {{ $ctaText }}
                </button>
            @endif
            @if($showInsuranceInfo)
                <button class="px-5 py-2 font-bold text-blue-600 bg-white rounded-md transition-colors hover:bg-blue-50 shadow-lg">
                    Insurance Info
                </button>
            @endif
        </div>
        
        @if(!$acceptingPatients)
            <div class="mt-4 p-3 bg-yellow-100 border border-yellow-300 rounded-lg">
                <p class="text-yellow-800 text-sm">
                    Currently not accepting new patients. Contact office for waitlist information.
                </p>
            </div>
        @endif
    </div>
</section> 