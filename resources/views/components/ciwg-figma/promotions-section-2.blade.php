@props([
    'title' => 'Promotions',
    'subtitle' => 'Tristique mauris tristique nam tincidunt vitae quis erat dictum. Diam diam maecenas tempor molestie risus eu.',
    'buttonText' => 'View All',
    'phone' => '(555) 555-5555',
    'promotions' => [
        [
            'svg' => '', // SVG string or component
            'discount' => '10%OFF',
            'desc' => 'Text of the promotion in here',
        ],
        [
            'svg' => '',
            'discount' => '10%OFF',
            'desc' => 'Text of the promotion in here',
        ],
        [
            'svg' => '',
            'discount' => '10%OFF',
            'desc' => 'Text of the promotion in here',
        ],
    ],
])

<div class="relative w-full max-w-7xl min-h-[573px] mx-auto bg-secondary overflow-hidden rounded-[2rem] flex items-center">
    <div class="absolute inset-0 flex justify-center items-center">
        <div class="flex flex-row w-11/12 mx-auto gap-8 items-center">
            {{-- Left: Text and Actions --}}
            <div class="flex flex-col gap-8 w-full max-w-xl pl-8 pr-8">
                <h2 class="text-primary text-5xl md:text-6xl font-semibold leading-tight font-sans">{{ $title }}</h2>
                <p class="text-secondary text-xl md:text-2xl font-medium leading-9 font-sans max-w-lg">{{ $subtitle }}</p>
                <div class="flex flex-row gap-2">
                    <button class="btn btn-lg px-8 rounded-[14px] bg-tertiary text-primary-content font-semibold uppercase tracking-wide border-0 shadow-none">
                        {{ $buttonText }}
                    </button>
                    <a href="tel:{{ preg_replace('/\D/', '', $phone) }}" class="btn btn-lg px-6 rounded-xl bg-primary shadow-inner border border-primary text-primary-content font-medium uppercase tracking-wide flex items-center gap-2">
                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24" class="inline-block" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.42459 3.23775C7.51203 2.76707 8.77662 3.00825 9.61449 3.84612L9.9591 4.19073C11.0636 5.29519 11.3313 6.98519 10.6223 8.37694L9.97022 9.65693C9.58386 10.4153 9.72975 11.3363 10.3316 11.9381L12.0619 13.6684C12.6637 14.2702 13.5847 14.4161 14.3431 14.0298L15.6231 13.3777C17.0148 12.6687 18.7048 12.9364 19.8093 14.0409L20.1539 14.3855C20.9918 15.2234 21.2329 16.488 20.7623 17.5754C19.4986 20.4948 16.2974 21.9789 13.6038 20.2867C11.9845 19.2694 10.0931 17.8454 8.12386 15.8761C6.15459 13.9069 4.73063 12.0155 3.71332 10.3962C2.02107 7.70255 3.50523 4.50135 6.42459 3.23775Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        {{ $phone }}
                    </a>
                </div>
            </div>
            {{-- Right: Promotions Stack --}}
            <div class="relative flex-1 h-[355px] flex items-center">
                <div class="absolute left-12 top-[-6px] rotate-[9deg] w-[580px] h-[266px] shadow-lg flex items-center">
                    <div class="w-full h-full border border-primary rounded-2xl overflow-hidden flex flex-col justify-center items-center p-5 bg-base-100/80">
                        <div class="w-full h-full flex flex-col justify-center items-center gap-4 rounded-xl outline outline-1 outline-primary/50 outline-offset-[-1px] p-5">
                            <span class="block text-primary text-[4.5rem] font-semibold leading-[1.1]">10%OFF</span>
                            <span class="block text-base-content text-lg font-medium">Text of the promotion in here</span>
                        </div>
                    </div>
                </div>
                <div class="absolute left-9 top-2 rotate-[6deg] w-[580px] h-[266px] shadow-lg flex items-center">
                    <div class="w-full h-full border border-primary rounded-2xl overflow-hidden flex flex-col justify-center items-center p-5 bg-base-100/80">
                        <div class="w-full h-full flex flex-col justify-center items-center gap-4 rounded-xl outline outline-1 outline-primary/50 outline-offset-[-1px] p-5">
                            <span class="block text-primary text-[4.5rem] font-semibold leading-[1.1]">10%OFF</span>
                            <span class="block text-base-content text-lg font-medium">Text of the promotion in here</span>
                        </div>
                    </div>
                </div>
                <div class="absolute left-7 top-6 rotate-[3deg] w-[580px] h-[266px] shadow-lg flex items-center">
                    <div class="w-full h-full border border-primary rounded-2xl overflow-hidden flex flex-col justify-center items-center p-5 bg-base-100/80">
                        <div class="w-full h-full flex flex-col justify-center items-center gap-4 rounded-xl outline outline-1 outline-primary/50 outline-offset-[-1px] p-5">
                            <span class="block text-primary text-[4.5rem] font-semibold leading-[1.1]">10%OFF</span>
                            <span class="block text-base-content text-lg font-medium">Text of the promotion in here</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>