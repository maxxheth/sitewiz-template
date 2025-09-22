@php
// Defensive variable initialization
$map_embed_url = $map_embed_url ?? '';
$business_address = $business_address ?? '';
$map_height = $map_height ?? '400';
$map_width = $map_width ?? '100%';
$containerClass = $containerClass ?? 'container mx-auto px-4';
$sectionClass = $sectionClass ?? 'py-16';
$title = $title ?? 'Find Us';
@endphp

{{-- Accept address as a single string or as separate fields --}}
@php
    $address = $address ?? trim(($street ?? '') . ', ' . ($city ?? '') . ', ' . ($state ?? '') . ' ' . ($zip ?? ''));
    $encodedAddress = urlencode($address);
    $apiKey = $apiKey ?? env('GOOGLE_MAPS_API_KEY', 'YOUR_API_KEY');
    $width = $width ?? 600;
    $height = $height ?? 450;
@endphp

<div class="w-full flex justify-center mt-4">
    <iframe
        width="{{ $width }}"
        height="{{ $height }}"
        class="rounded-lg shadow-lg border border-[var(--border-tretinary)]"
        style="border:0;"
        loading="lazy"
        allowfullscreen
        referrerpolicy="no-referrer-when-downgrade"
        src="https://www.google.com/maps/embed/v1/place?key={{ $apiKey }}&q={{ $encodedAddress }}">
    </iframe>
</div>