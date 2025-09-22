@props([
    'tagline' => 'Tagline',
    'title' => 'Service Areas',
    'columns' => [
        [
            'links' => ['Link One', 'Link Two', 'Link Three', 'Link Four'],
        ],
        [
            'links' => ['Link One', 'Link Two', 'Link Three', 'Link Four'],
        ],
        [
            'links' => ['Link One', 'Link Two', 'Link Three', 'Link Four'],
        ],
    ],
    'buttonText' => 'Get Started',
    'phone' => '(555) 555-5555',
    'image' => 'https://placehold.co/616x600',
])

<div class="relative w-full max-w-7xl min-h-[760px] mx-auto bg-[var(--surface-primary,#0F1415)] overflow-hidden rounded-[2rem] flex items-center">
    <div class="absolute left-1/2 top-20 -translate-x-1/2 w-11/12 flex flex-row items-center">
        {{-- Left: Content --}}
        <div class="flex-1 flex flex-col justify-center items-start gap-8 pr-20">
            {{-- Tagline and Title --}}
            <div class="flex flex-col gap-4 w-full">
                <div class="inline-flex items-center h-10 px-4 bg-gradient-to-b from-black/5 to-transparent bg-[var(--surface-brand-primary,#7B43EA)] shadow-inner rounded-full">
                    <span class="text-white text-sm font-medium leading-[21px]">{{ $tagline }}</span>
                </div>
                <h2 class="text-[2.5rem] md:text-[4rem] font-semibold leading-tight text-[var(--text-primary,#F9FBFB)] font-sans">
                    {{ $title }}
                </h2>
            </div>
            {{-- Columns of Links --}}
            <div class="flex flex-row gap-4 w-full">
                @foreach($columns as $col)
                    <div class="w-36 flex flex-col gap-2">
                        @foreach($col['links'] as $link)
                            <div class="text-[var(--text-tertiary,#A8B6B8)] text-sm font-normal leading-[21px] font-sans">{{ $link }}</div>
                        @endforeach
                    </div>
                @endforeach
            </div>
            {{-- Actions --}}
            <div class="flex flex-row gap-2">
                <button class="btn btn-lg px-8 rounded-[14px] bg-[var(--surface-tertiary,#344346)] text-[var(--text-primary,#F9FBFB)] font-semibold uppercase tracking-wide border-0 shadow-inner">
                    {{ $buttonText }}
                </button>
                <a href="tel:{{ preg_replace('/\D/', '', $phone) }}" class="btn btn-lg px-6 rounded-xl bg-[var(--surface-brand-primary,#7B43EA)] shadow-inner border border-[var(--border-primary,#212A2B)] text-[var(--text-primary,#F9FBFB)] font-medium uppercase tracking-wide flex items-center gap-2 outline outline-1 outline-[var(--border-primary,#212A2B)] outline-offset-[-1px]">
                    <svg width="24" height="25" fill="none" viewBox="0 0 24 25" class="inline-block" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.42459 3.73775C7.51203 3.26707 8.77662 3.50825 9.61449 4.34612L9.9591 4.69073C11.0636 5.79519 11.3313 7.48519 10.6223 8.87694L9.97022 10.1569C9.58386 10.9153 9.72975 11.8363 10.3316 12.4381L12.0619 14.1684C12.6637 14.7702 13.5847 14.9161 14.3431 14.5298L15.6231 13.8777C17.0148 13.1687 18.7048 13.4364 19.8093 14.5409L20.1539 14.8855C20.9918 15.7234 21.2329 16.988 20.7623 18.0754C19.4986 20.9948 16.2974 22.4789 13.6038 20.7867C11.9845 19.7694 10.0931 18.3454 8.12386 16.3761C6.15459 14.4069 4.73063 12.5155 3.71332 10.8962C2.02107 8.20255 3.50523 5.00135 6.42459 3.73775Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    {{ $phone }}
                </a>
            </div>
        </div>
        {{-- Right: Image --}}
        <div class="flex-1 flex items-center justify-center h-[600px] relative">
            <img class="w-full max-w-xl h-full object-cover rounded-[2rem]" src="{{ $image }}" alt="Service Areas Image" style="background-blend-mode:color;" />
        </div>
    </div>
</div>