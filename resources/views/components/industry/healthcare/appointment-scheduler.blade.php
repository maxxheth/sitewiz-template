@props([
    'providerName' => null,
    'specialties' => [],
    'availableSlots' => [],
    'insuranceAccepted' => ['Medicare', 'Medicaid', 'Blue Cross Blue Shield', 'Aetna', 'Cigna'],
    'telehealthAvailable' => false,
    'urgentCare' => false,
    'designSystem' => null
])

@php
    // CSS custom properties for healthcare
    $cssVars = 'style="';
    $cssVars .= '--color-primary: var(--color-primary, #1e40af); ';
    $cssVars .= '--color-secondary: var(--color-secondary, #3b82f6); ';
    $cssVars .= '--color-success: var(--color-success, #059669); ';
    $cssVars .= '--color-warning: var(--color-warning, #d97706); ';
    $cssVars .= '--color-error: var(--color-error, #dc2626); ';
    $cssVars .= '"';
@endphp

<div class="bg-white rounded-lg shadow-lg p-6 max-w-md mx-auto" {!! $cssVars !!}>
    <h3 class="text-2xl font-bold text-gray-900 mb-4" style="font-family: var(--font-heading, system-ui);">
        Schedule Appointment
    </h3>
    
    @if($providerName)
        <p class="text-gray-600 mb-4" style="font-family: var(--font-body, system-ui);">
            with Dr. {{ $providerName }}
        </p>
    @endif
    
    @if(count($specialties) > 0)
        <div class="mb-4">
            <p class="text-sm font-semibold text-gray-700 mb-2" style="font-family: var(--font-body, system-ui);">Specialties:</p>
            <div class="flex flex-wrap gap-2">
                @foreach($specialties as $specialty)
                    <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded" style="background-color: var(--color-primary, #1e40af); color: white;">
                        {{ $specialty }}
                    </span>
                @endforeach
            </div>
        </div>
    @endif
    
    @if($telehealthAvailable)
        <div class="mb-4 p-3 bg-green-50 border border-green-200 rounded" style="background-color: var(--color-success, #059669); background-opacity: 0.1;">
            <p class="text-green-800 text-sm" style="color: var(--color-success, #059669);">
                <svg class="w-4 h-4 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                </svg>
                Telehealth appointments available
            </p>
        </div>
    @endif
    
    @if($urgentCare)
        <div class="mb-4 p-3 bg-red-50 border border-red-200 rounded" style="background-color: var(--color-error, #dc2626); background-opacity: 0.1;">
            <p class="text-red-800 text-sm font-semibold" style="color: var(--color-error, #dc2626);">
                ⚠️ Urgent care available - walk-ins welcome
            </p>
        </div>
    @endif
    
    <form class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" style="font-family: var(--font-body, system-ui);">
                Appointment Type
            </label>
            <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" style="border-color: var(--color-primary, #1e40af);">
                <option>Select appointment type</option>
                <option>Routine Check-up</option>
                <option>Follow-up Visit</option>
                <option>New Patient Consultation</option>
                @if($telehealthAvailable)
                    <option>Telehealth Consultation</option>
                @endif
                @if($urgentCare)
                    <option>Urgent Care</option>
                @endif
            </select>
        </div>
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" style="font-family: var(--font-body, system-ui);">
                Preferred Date
            </label>
            <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" style="border-color: var(--color-primary, #1e40af);">
        </div>
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" style="font-family: var(--font-body, system-ui);">
                Preferred Time
            </label>
            <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" style="border-color: var(--color-primary, #1e40af);">
                <option>Select a time</option>
                <option>8:00 AM</option>
                <option>9:00 AM</option>
                <option>10:00 AM</option>
                <option>11:00 AM</option>
                <option>1:00 PM</option>
                <option>2:00 PM</option>
                <option>3:00 PM</option>
                <option>4:00 PM</option>
            </select>
        </div>
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" style="font-family: var(--font-body, system-ui);">
                Insurance Provider
            </label>
            <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" style="border-color: var(--color-primary, #1e40af);">
                <option>Select insurance</option>
                @foreach($insuranceAccepted as $insurance)
                    <option>{{ $insurance }}</option>
                @endforeach
                <option>Self-Pay</option>
                <option>Other (please specify)</option>
            </select>
        </div>
        
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1" style="font-family: var(--font-body, system-ui);">
                Reason for Visit (Optional)
            </label>
            <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" rows="3" placeholder="Brief description of your concern or reason for visit" style="border-color: var(--color-primary, #1e40af);"></textarea>
        </div>
        
        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition-colors" style="background-color: var(--color-primary, #1e40af);">
            Schedule Appointment
        </button>
        
        <p class="text-xs text-gray-500 text-center" style="font-family: var(--font-body, system-ui);">
            You will receive a confirmation call within 24 hours to confirm your appointment.
        </p>
    </form>
</div> 