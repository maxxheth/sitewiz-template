@props([
    'title' => 'Featured Manufacturer',
    'subtitle' => 'Tristique mauris tristique nam tincidunt vitae quis erat dictum. Diam diam maecenas tempor molestie risus eu.',
    'image' => 'https://placehold.co/727x430',
    'logo1' => null,
    'logo2' => 'https://placehold.co/236x70',
    'logo3' => 'https://placehold.co/163x16',
    'logo4' => null,
    'buttonText' => 'Get Started',
    'phone' => '(555) 555-5555',
])

<div class="relative w-full max-w-7xl h-[540px] mx-auto rounded-[2rem] overflow-hidden flex items-stretch bg-gradient-to-b from-black/20 to-transparent bg-[var(--surface-brand-primary,#7B43EA)]">
    {{-- Right Side Image --}}
    <img class="absolute right-0 top-20 w-[45%] max-w-xl h-[430px] object-cover z-0" src="{{ $image }}" alt="CTA Image" />

    {{-- Content --}}
    <div class="relative flex flex-col justify-center items-start gap-8 w-full max-w-2xl pl-8 md:pl-16 py-12 z-10">
        {{-- Logos Row --}}
        <div class="flex flex-col gap-4 w-full max-w-2xl">
            <div class="flex flex-row items-center gap-4">
                <div class="w-56 h-16 bg-neutral-300 rounded"></div>
                @if($logo2)
                    <img class="w-56 h-16 object-contain" src="{{ $logo2 }}" alt="Logo 2" />
                @endif
            </div>
            <div class="flex flex-row items-center gap-4">
                @if($logo3)
                    <img class="w-40 h-4 object-contain" src="{{ $logo3 }}" alt="Logo 3" />
                @endif
                <div class="w-56 h-8 bg-white rounded"></div>
            </div>
        </div>
        {{-- Headline and Subtitle --}}
        <div class="flex flex-col gap-3 w-full max-w-xl">
            <h2 class="text-primary-content text-5xl md:text-6xl font-semibold leading-tight font-sans break-words">{{ $title }}</h2>
            <p class="text-secondary-content text-xl md:text-2xl font-medium leading-9 font-sans break-words">{{ $subtitle }}</p>
        </div>
        {{-- Actions --}}
        <div class="flex flex-row gap-2">
            <button class="btn btn-lg px-8 rounded-[14px] bg-base-100 text-base-content font-semibold uppercase tracking-wide border-0 shadow-none">
                {{ $buttonText }}
            </button>
            <a href="tel:{{ preg_replace('/\D/', '', $phone) }}" class="btn btn-lg px-6 rounded-xl bg-gradient-to-r from-transparent to-black shadow-inner border border-primary text-primary-content font-medium uppercase tracking-wide flex items-center gap-2">
                <svg width="24" height="25" fill="none" viewBox="0 0 24 25" class="inline-block" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.42459 4.18062C7.51203 3.70994 8.77662 3.95112 9.61449 4.78899L9.9591 5.1336C11.0636 6.23806 11.3313 7.92806 10.6223 9.31981L9.97022 10.5998C9.58386 11.3582 9.72975 12.2792 10.3316 12.881L12.0619 14.6113C12.6637 15.2131 13.5847 15.359 14.3431 14.9727L15.6231 14.3206C17.0148 13.6116 18.7048 13.8793 19.8093 14.9838L20.1539 15.3284C20.9918 16.1662 21.2329 17.4308 20.7623 18.5183C19.4986 21.4376 16.2974 22.9218 13.6038 21.2296C11.9845 20.2122 10.0931 18.7883 8.12386 16.819C6.15459 14.8497 4.73063 12.9584 3.71332 11.3391C2.02107 8.64542 3.50523 5.44422 6.42459 4.18062Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                {{ $phone }}
            </a>
        </div>
    </div>
</div>