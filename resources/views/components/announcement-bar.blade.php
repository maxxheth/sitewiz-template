@props([
    'message' => 'ATTENTION GRABBING PROMOTION OR ANNOUNCEMENT GOES HERE',
    'bgColor' => 'bg-yellow-400',
    'textColor' => 'text-black',
    'fontSize' => 'text-sm',
    'fontWeight' => 'font-semibold',
    'padding' => 'px-4 py-2',
    'alignment' => 'text-center',
    'dismissible' => false,
    'id' => 'announcement-bar',
    'animation' => 'animate-pulse'
])

<!-- Announcement Bar -->
<div 
    id="{{ $id }}"
    class="{{ $padding }} {{ $fontSize }} {{ $fontWeight }} {{ $alignment }} {{ $textColor }} {{ $bgColor }} {{ $dismissible ? 'relative' : '' }} {{ $animation }}"
    @if($dismissible) x-data="{ show: true }" x-show="show" @endif
>
    @if($dismissible)
        <button 
            @click="show = false"
            class="absolute top-1/2 right-2 transform -translate-y-1/2 {{ $textColor }} hover:opacity-70 transition-opacity"
            aria-label="Close announcement"
        >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    @endif
    
    @if($slot->isNotEmpty())
        {{ $slot }}
    @else
        {{ $message }}
    @endif
</div> 