@props([
    'title' => 'Growing Your Business Together',
    'subtitle' => 'Local expertise, personal service, and results that matter',
    'businessName' => null,
    'localArea' => null,
    'familyOwned' => false,
    'yearsInBusiness' => null,
    'communityFocused' => true,
    'personalizedService' => true,
    'designSystem' => null
])

@php
    // Small business styling (approachable, local, trustworthy)
    $smallBizClasses = 'small-business-friendly bg-green-800 text-white';
    
    // CSS custom properties for small business
    $cssVars = 'style="';
    $cssVars .= '--color-primary: var(--color-primary, #166534); ';
    $cssVars .= '--color-secondary: var(--color-secondary, #22c55e); ';
    $cssVars .= '--color-accent: var(--color-accent, #84cc16); ';
    $cssVars .= '--color-warm: var(--color-warm, #f59e0b); ';
    $cssVars .= '--font-heading: var(--font-heading, system-ui); ';
    $cssVars .= '--font-body: var(--font-body, system-ui); ';
    $cssVars .= '"';
@endphp

<!-- Small Business Hero Section -->
<section class="relative px-4 py-24 {{ $smallBizClasses }} md:py-48" {!! $cssVars !!}>
    <div class="container flex relative flex-col items-center mx-auto">
        <div class="mx-auto w-full text-center">
            <h2 class="mb-4 w-full text-4xl font-bold leading-tight text-center md:text-6xl text-green-100" style="font-family: var(--font-heading, system-ui); color: var(--color-accent, #84cc16);">
                {{ $title }}
            </h2>
            <p class="mx-auto w-full text-lg text-center md:w-2/3 md:text-2xl text-green-200" style="font-family: var(--font-body, system-ui);">
                {{ $subtitle }}
            </p>
            
            @if($businessName)
                <p class="mt-4 text-xl text-green-300" style="font-family: var(--font-body, system-ui);">
                    {{ $businessName }}
                </p>
            @endif
            
            @if($localArea)
                <p class="mt-2 text-lg text-green-300" style="font-family: var(--font-body, system-ui);">
                    Proudly serving {{ $localArea }}
                </p>
            @endif
            
            <div class="mt-6 flex flex-wrap justify-center gap-4">
                @if($familyOwned)
                    <div class="inline-flex items-center px-4 py-2 bg-yellow-600 text-white rounded-lg" style="background-color: var(--color-warm, #f59e0b);">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Family Owned
                    </div>
                @endif
                
                @if($yearsInBusiness)
                    <div class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-lg" style="background-color: var(--color-primary, #166534);">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        {{ $yearsInBusiness }}+ Years
                    </div>
                @endif
                
                @if($communityFocused)
                    <div class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                        </svg>
                        Community Focused
                    </div>
                @endif
                
                @if($personalizedService)
                    <div class="inline-flex items-center px-4 py-2 bg-purple-600 text-white rounded-lg">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                        </svg>
                        Personal Service
                    </div>
                @endif
            </div>
        </div>
        
        <div class="flex justify-center mt-16 w-full md:w-auto space-x-4">
            <button class="px-8 py-4 font-bold text-white uppercase rounded-md transition-colors bg-green-600 hover:bg-green-700 shadow-lg" style="background-color: var(--color-secondary, #22c55e);">
                Get Started
            </button>
            <button class="px-5 py-2 font-bold text-green-600 bg-white rounded-md transition-colors hover:bg-green-50 shadow-lg">
                Learn More
            </button>
        </div>
        
        <div class="mt-6 text-center text-sm text-green-300" style="font-family: var(--font-body, system-ui);">
            <p>Supporting local businesses and families since {{ $yearsInBusiness ?? 'day one' }}</p>
        </div>
        
        @if($communityFocused)
            <div class="mt-4 p-3 bg-green-100 border border-green-300 rounded-lg">
                <p class="text-green-800 text-sm font-semibold" style="font-family: var(--font-body, system-ui);">
                    🏠 Your neighbors, your trusted local business
                </p>
            </div>
        @endif
    </div>
</section> 