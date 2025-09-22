@props([
    'tagline' => 'Tagline',
    'title' => 'About XYZ<br/>heading goes here',
    'subtitle' => 'Sed iaculis aenean sit sed risus arcu vitae integer elit lorem. Volutpat amet etiam mi nunc diam nulla. Sed iaculis aenean sit sed risus arcu vitae integer elit.  Fames feugiat tellus.',
    'stats' => [
        [
            'value' => '30%',
            'desc' => 'Egestas sapien viverra neque ace. Morbi euismod, nunc id dictum ditum, nisi nunc.',
        ],
        [
            'value' => '50+',
            'desc' => 'Egestas sapien viverra neque ace. Morbi euismod, nunc id dictum ditum, nisi nunc.',
        ],
    ],
    'buttonText' => 'Get Started',
    'phone' => '(555) 555-5555',
    'image' => 'https://placehold.co/616x600',
])

<div class="w-full max-w-7xl mx-auto bg-[var(--surface-primary,#0F1415)] overflow-hidden rounded-[2rem] relative flex flex-col md:flex-row items-stretch min-h-[32rem]">
    <div class="flex flex-col justify-center gap-8 w-full md:w-1/2 px-4 md:px-10 py-10 md:py-16 z-10">
        {{-- Header --}}
        <div class="flex flex-col gap-4 w-full max-w-2xl">
            <div class="inline-flex items-center justify-center h-10 px-4 rounded-full"
                style="background:linear-gradient(180deg,rgba(0,0,0,0.06) 0%,rgba(0,0,0,0) 100%),var(--surface-brand-primary,#7B43EA);box-shadow:0px 1px 1px rgba(255,255,255,0.20) inset;">
                <span class="text-white text-sm font-medium leading-[21px]">{{ $tagline }}</span>
            </div>
            <h2 class="w-full text-left text-3xl md:text-5xl lg:text-6xl font-semibold leading-tight" style="color:var(--text-primary,#F9FBFB);font-family:Inter;">
                {!! $title !!}
            </h2>
            <p class="w-full text-left text-base md:text-xl font-medium leading-[2rem] text-[var(--text-secondary,#DFE6E7)]" style="font-family:Inter;">
                {{ $subtitle }}
            </p>
        </div>
        {{-- Stats --}}
        <div class="flex flex-col sm:flex-row gap-4 w-full">
            @foreach($stats as $stat)
                <div class="flex-1 p-6 rounded-2xl flex flex-col gap-3"
                    style="background:linear-gradient(180deg,rgba(0,0,0,0.12) 0%,rgba(0,0,0,0) 100%),var(--surface-secondary,#212A2B);box-shadow:0px 4px 4px rgba(0,0,0,0.10);">
                    <div class="text-4xl md:text-5xl font-semibold" style="color:var(--surface-brand-primary-strong,#9B71EF);font-family:Inter;">
                        {{ $stat['value'] }}
                    </div>
                    <div class="text-sm md:text-base text-[var(--text-tertiary,#A8B6B8)] font-medium leading-[21px]">
                        {{ $stat['desc'] }}
                    </div>
                </div>
            @endforeach
        </div>
        {{-- Actions --}}
        <div class="flex flex-col sm:flex-row gap-2 w-full">
            <a href="#get-started" class="flex items-center justify-center px-8 h-14 rounded-[14px] font-semibold uppercase text-base tracking-wide shadow"
                style="background:var(--surface-tertiary,#344346);color:var(--text-primary,#F9FBFB);box-shadow:0px 1px 1px var(--shadow-color-light-inset-2) inset;">
                {{ $buttonText }}
            </a>
            <a href="tel:{{ preg_replace('/\D/', '', $phone) }}" class="flex items-center gap-2 px-6 h-14 rounded-xl uppercase font-medium text-base shadow"
                style="background:var(--surface-brand-primary,#7B43EA);color:var(--text-primary,#F9FBFB);box-shadow:0px 1px 1px var(--shadow-color-light-inset-3) inset;outline:1px var(--border-primary,#212A2B) solid;outline-offset:-1px;">
                <svg width="24" height="24" fill="none" class="mr-1" style="color:var(--text-primary,#F9FBFB);" xmlns="http://www.w3.org/2000/svg"><path d="M6.42459 3.23775C7.51203 2.76707 8.77662 3.00825 9.61449 3.84612L9.9591 4.19073C11.0636 5.29519 11.3313 6.98519 10.6223 8.37694L9.97022 9.65693C9.58386 10.4153 9.72975 11.3363 10.3316 11.9381L12.0619 13.6684C12.6637 14.2702 13.5847 14.4161 14.3431 14.0298L15.6231 13.3777C17.0148 12.6687 18.7048 12.9364 19.8093 14.0409L20.1539 14.3855C20.9918 15.2234 21.2329 16.488 20.7623 17.5754C19.4986 20.4948 16.2974 21.9789 13.6038 20.2867C11.9845 19.2694 10.0931 17.8454 8.12386 15.8761C6.15459 13.9069 4.73063 12.0155 3.71332 10.3962C2.02107 7.70255 3.50523 4.50135 6.42459 3.23775Z" stroke="var(--text-primary, #F9FBFB)" stroke-linecap="round" stroke-linejoin="round"/></svg>
                {{ $phone }}
            </a>
        </div>
    </div>
    <div class="relative w-full md:w-1/2 flex items-center justify-center min-h-[20rem]">
        <img class="w-full h-full max-h-[600px] object-cover rounded-[2rem]" style="background:linear-gradient(0deg,#5014C8 0%,#5014C8 100%);background-blend-mode:hue,normal;" src="{{ $image }}" alt="Feature Image" />
    </div>
</div>