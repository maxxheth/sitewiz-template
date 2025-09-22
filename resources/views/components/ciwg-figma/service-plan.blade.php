<div class="relative w-full max-w-7xl mx-auto min-h-[900px] bg-[var(--surface-primary,#0F1415)] overflow-hidden rounded-[2rem] flex flex-col">
    {{-- Header --}}
    <div class="absolute left-1/2 top-20 -translate-x-1/2 flex flex-col items-center gap-4 w-full max-w-2xl z-10">
        <div class="h-10 px-4 bg-[linear-gradient(180deg,rgba(0,0,0,0.06)_0%,rgba(0,0,0,0)_100%),var(--surface-brand-primary,#7B43EA)] shadow-inner rounded-full flex items-center gap-2">
            <div class="text-center text-white text-sm font-medium leading-[21px]">Tagline</div>
        </div>
        <div class="w-full flex flex-col items-center gap-3">
            <div class="w-full text-center text-[2.5rem] md:text-[4rem] font-semibold leading-[1.2] text-[var(--text-primary,#F9FBFB)]">Maintenance Plan</div>
            <div class="w-full max-w-xl text-center text-lg md:text-2xl font-medium leading-9 text-[var(--text-secondary,#DFE6E7)]">Pellentesque vel consequat amet tincidunt sodales. Idetac tristique lectus sed eu consequat egestas dui faucibus.</div>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="flex flex-col md:flex-row gap-16 md:gap-20 w-full max-w-6xl mx-auto mt-[340px] px-4 z-10">
        {{-- Left: Features --}}
        <div class="w-full md:w-1/2 flex flex-col gap-4">
            @for ($i = 0; $i < 3; $i++)
            <div class="w-full p-6 bg-[linear-gradient(180deg,rgba(0,0,0,0.12)_0%,rgba(0,0,0,0)_100%),var(--surface-secondary,#212A2B)] shadow rounded-2xl flex flex-col gap-2">
                <div class="flex items-center gap-3">
                    <div data-svg-wrapper class="relative">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 19.9997H4V14.9997L14.5858 4.41391C15.3668 3.63286 16.6332 3.63286 17.4142 4.41391L19.5858 6.58549C20.3668 7.36653 20.3668 8.63286 19.5858 9.41391L9 19.9997ZM9 19.9997H21" stroke="var(--text-primary,#F9FBFB)" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="flex-1 text-[20px] font-medium leading-[30px] text-[var(--text-primary,#F9FBFB)]">Customize with a couple of clicks</div>
                </div>
                <div class="pl-9 flex items-center gap-2">
                    <div class="flex-1 text-[16px] font-medium leading-6 text-[var(--text-tertiary,#A8B6B8)]">Ornare ac sem tortor elementum morbi. Dictum imperdiet pharetra id nulla id cursus. Orci arcu egestas sed tempor. </div>
                </div>
            </div>
            @endfor
        </div>
        {{-- Right: Plan Card --}}
        <div class="w-full md:w-1/2 flex flex-col md:flex-row gap-0 bg-[linear-gradient(180deg,rgba(0,0,0,0.12)_0%,rgba(0,0,0,0)_100%),var(--surface-secondary,#212A2B)] shadow-lg rounded-2xl">
            <div class="flex-1 flex flex-col justify-between p-8 gap-8">
                <div class="flex flex-col gap-5">
                    <div class="flex items-center gap-2">
                        <div class="w-10 flex flex-col">
                            <div class="h-7 text-[var(--color-primary-600,#9B71EF)] text-2xl font-bold leading-9">Pro</div>
                        </div>
                    </div>
                    <div class="text-[16px] font-medium leading-6 text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse nisl.</div>
                </div>
                <div class="flex items-end gap-2">
                    <div class="text-[80px] font-semibold leading-[88px] text-white">$19</div>
                    <div class="text-[20px] font-medium leading-[30px] text-[var(--color-primary-600,#9B71EF)]">/monthly</div>
                </div>
                <button class="btn btn-primary h-10 px-4 rounded-xl shadow-inner outline outline-1 outline-[var(--border-primary,#212A2B)] outline-offset-[-1px] flex items-center gap-2 uppercase text-xs font-medium tracking-wide">
                    <span class="flex items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 17V11C17 8.79086 15.2091 7 13 7H7M17 17C17 19.2091 15.2091 21 13 21H7C4.79086 21 3 19.2091 3 17V11C3 8.79086 4.79086 7 7 7M17 17C19.2091 17 21 15.2091 21 13V7C21 4.79086 19.2091 3 17 3H11C8.79086 3 7 4.79086 7 7M13.25 11.75L9.25 15.75L7.25 13.75" stroke="var(--text-primary,#F9FBFB)" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <span class="text-[12px] font-medium leading-[18px] tracking-wide text-[var(--text-primary,#F9FBFB)]">SCHEDULE YOUR SERVICE TODAY</span>
                </button>
            </div>
            <div class="flex-1 flex flex-col justify-center items-center gap-4 px-5 py-16 bg-[linear-gradient(180deg,rgba(0,0,0,0.22)_0%,rgba(0,0,0,0)_100%),var(--surface-tertiary,#344346)] rounded-r-2xl">
                <div class="flex flex-col gap-4 w-full">
                    @for ($i = 0; $i < 4; $i++)
                    <div class="flex items-center gap-3">
                        <div data-svg-wrapper class="relative">
                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_14361_1779)">
                                    <circle cx="13" cy="13" r="13" fill="var(--color-primary-600,#9B71EF)"/>
                                    <path d="M7.1167 13.8406L10.4785 17.2024L18.8831 8.79785" stroke="var(--color-neutral-white,white)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_14361_1779">
                                        <rect width="26" height="26" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="flex-1 text-[14px] font-medium leading-[21px] text-white">Lorem iaculis sit sed risus arcu vitae integer.</div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>