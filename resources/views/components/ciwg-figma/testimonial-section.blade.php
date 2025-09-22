{{-- resources/views/components/testimonial-section.blade.php --}}
@props([
    'tagline' => 'Tagline',
    'heading' => 'Customer Testimonials',
    'subheading' => 'Sed iaculis aenean sit sed risus arcu vitae integer elit. Volutpat amet etiam mi nunc diam nulla. Fames feugiat tell.',
    'testimonials' => [
        [
            'type' => 'quote',
            'text' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare."',
            'name' => 'Jaroslav Dlask',
            'role' => null,
            'avatar' => 'https://placehold.co/64x64',
        ],
        [
            'type' => 'review',
            'text' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare."',
            'name' => 'Tatiana Will',
            'role' => 'Freelancer',
            'avatar' => 'svg-or-image-url-here',
            'stars' => 5,
        ],
        [
            'type' => 'quote',
            'text' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare."',
            'name' => 'Natalie Hofmann',
            'role' => null,
            'avatar' => 'svg-or-image-url-here',
        ],
        [
            'type' => 'review',
            'text' => '"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare."',
            'name' => null,
            'role' => null,
            'avatar' => 'svg-or-image-url-here',
            'stars' => 5,
        ],
    ]
])

<div class="relative bg-surface-secondary rounded-3xl overflow-hidden max-w-[1392px] mx-auto min-h-[789px]">
    {{-- Heading Section --}}
    <div class="absolute left-1/2 top-20 -translate-x-1/2 w-[720px] flex flex-col items-center gap-4">
        <div class="h-10 px-4 bg-gradient-to-b from-black/5 to-transparent bg-surface-brand-primary shadow-inner rounded-full flex items-center justify-center">
            <span class="text-white text-sm font-medium">{{ $tagline }}</span>
        </div>
        <div class="flex flex-col items-center gap-3 w-full">
            <h2 class="text-center text-primary text-5xl font-bold leading-tight">{{ $heading }}</h2>
            <p class="text-center text-secondary text-xl font-medium leading-9">{{ $subheading }}</p>
        </div>
    </div>

    {{-- Gradient Overlays --}}
    <div class="absolute left-40 top-[709px] w-40 h-[352px] rotate-180 bg-gradient-to-l from-surface-secondary to-transparent"></div>
    <div class="absolute right-40 top-[357px] w-40 h-[352px] bg-gradient-to-l from-surface-secondary to-transparent"></div>

    {{-- Testimonials Row --}}
    <div class="absolute left-[-128px] top-[357px] flex gap-4">
        @foreach($testimonials as $testimonial)
            <div class="w-[400px] p-10 bg-surface-primary shadow-inner rounded-2xl flex flex-col gap-2">
                <div class="flex flex-col gap-8">
                    {{-- Quote or Review Icon --}}
                    @if($testimonial['type'] === 'quote')
                        <div>
                            {{-- Example quote SVG --}}
                            <svg class="w-9 h-6 text-surface-quinary" fill="currentColor" viewBox="0 0 35 24">
                                <path d="M0 24L1.16905 17.3983C1.51289 15.4499 2.21203 13.3983 3.26648 11.2436C4.34384 9.08882 5.69628 7.02579 7.32378 5.05444C8.97421 3.08309 10.808 1.39828 12.8252 0L17.2264 3.6447C15.553 5.68481 14.0287 7.81662 12.6533 10.0401C11.2779 12.2636 10.384 14.6819 9.97135 17.2951L8.80229 24H0ZM17.5358 24L18.7049 17.3983C19.0487 15.4499 19.7479 13.3983 20.8023 11.2436C21.8797 9.08882 23.2321 7.02579 24.8596 5.05444C26.51 3.08309 28.3438 1.39828 30.361 0L34.7622 3.6447C33.0888 5.68481 31.5645 7.81662 30.1891 10.0401C28.8138 12.2636 27.9198 14.6819 27.5072 17.2951L26.3381 24H17.5358Z"/>
                            </svg>
                        </div>
                    @elseif($testimonial['type'] === 'review')
                        <div class="flex gap-2">
                            @for($i = 0; $i < ($testimonial['stars'] ?? 5); $i++)
                                {{-- Example star SVG --}}
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M11.0896 4.55198C11.4734 3.81601 12.5266 3.81601 12.9104 4.55198L14.9277 8.42007C15.0815 8.71501 15.3687 8.91716 15.6983 8.96248L20.1119 9.5694C20.9717 9.68762 21.3061 10.7529 20.6683 11.3413L17.5487 14.2189C17.2904 14.4572 17.1719 14.811 17.2345 15.1568L17.9808 19.2742C18.1315 20.1055 17.2696 20.7529 16.5131 20.3766L12.4574 18.3588C12.1693 18.2155 11.8307 18.2155 11.5426 18.3588L7.48688 20.3766C6.73042 20.7529 5.86852 20.1055 6.0192 19.2742L6.76546 15.1568C6.82813 14.811 6.70961 14.4572 6.45132 14.2189L3.33174 11.3413C2.69386 10.7529 3.02832 9.68762 3.88805 9.5694L8.30174 8.96248C8.63129 8.91716 8.91846 8.71501 9.07228 8.42007L11.0896 4.55198Z"/>
                                </svg>
                            @endfor
                        </div>
                    @endif

                    {{-- Testimonial Text --}}
                    <div class="text-secondary text-lg italic font-medium leading-7">
                        {{ $testimonial['text'] }}
                    </div>

                    {{-- Author --}}
                    <div class="flex items-center gap-4">
                        @if($testimonial['avatar'])
                            <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] ?? '' }}" class="w-16 h-16 rounded-full object-cover bg-white/60" />
                        @else
                            {{-- Placeholder avatar --}}
                            <div class="w-16 h-16 rounded-full bg-surface-quinary"></div>
                        @endif
                        <div class="flex flex-col">
                            @if($testimonial['name'])
                                <div class="text-primary text-base font-semibold leading-6">{{ $testimonial['name'] }}</div>
                            @endif
                            @if($testimonial['role'])
                                <div class="text-secondary text-sm font-medium leading-5">{{ $testimonial['role'] }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>