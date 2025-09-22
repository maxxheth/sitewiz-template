@props([
    'tagline' => 'Tagline',
    'title' => 'Our Services',
    'subtitle' => 'Pellentesque vel consequat amet tincidunt sodales. Idetac tristique lectus sed eu consequat egestas dui faucibus.',
    'benefits' => [
        [
            'icon' => '<svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 19.9999H4V14.9999L14.5858 4.41416C15.3668 3.63311 16.6332 3.63311 17.4142 4.41416L19.5858 6.58573C20.3668 7.36678 20.3668 8.63311 19.5858 9.41416L9 19.9999ZM9 19.9999H21" stroke="var(--text-primary, #F9FBFB)" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            'title' => 'Service 1',
            'desc' => 'Ornare ac sem tortor elementum morbi. Dictum imperdiet pharetra id nulla id cursus. Orci arcu egestas sed tempor. Aliquam at vitae orci velit nullam integer.',
            'selected' => true,
        ],
        [
            'icon' => '<svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.0896 4.55198C11.4734 3.81601 12.5266 3.81601 12.9104 4.55198L14.9277 8.42007C15.0815 8.71501 15.3687 8.91716 15.6983 8.96248L20.1119 9.5694C20.9717 9.68762 21.3061 10.7529 20.6683 11.3413L17.5487 14.2189C17.2904 14.4572 17.1719 14.811 17.2345 15.1568L17.9808 19.2742C18.1315 20.1055 17.2696 20.7529 16.5131 20.3766L12.4574 18.3588C12.1693 18.2155 11.8307 18.2155 11.5426 18.3588L7.48688 20.3766C6.73042 20.7529 5.86852 20.1055 6.0192 19.2742L6.76546 15.1568C6.82813 14.811 6.70961 14.4572 6.45132 14.2189L3.33174 11.3413C2.69386 10.7529 3.02832 9.68762 3.88805 9.5694L8.30174 8.96248C8.63129 8.91716 8.91846 8.71501 9.07228 8.42007L11.0896 4.55198Z" stroke="var(--surface-brand-primary-strong, #9B71EF)" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            'title' => 'One template for all your next SaaS Projects',
            'desc' => '',
            'selected' => false,
        ],
        [
            'icon' => '<svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 3L5.5 13.5H10.5L11 21L18.5 10.5H13.5L13 3Z" stroke="var(--surface-brand-primary-strong, #9B71EF)" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            'title' => 'Unlock the power of Figma & Webflow',
            'desc' => '',
            'selected' => false,
        ],
        [
            'icon' => '<svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.37142 20.6464C2.17616 20.8417 2.17616 21.1583 2.37142 21.3536C2.56668 21.5488 2.88327 21.5488 3.07853 21.3536L2.37142 20.6464ZM3.00001 12H3.50001C3.50001 7.30558 7.30559 3.5 12 3.5V3V2.5C6.7533 2.5 2.50001 6.75329 2.50001 12H3.00001ZM12 3V3.5C16.6944 3.5 20.5 7.30558 20.5 12H21H21.5C21.5 6.75329 17.2467 2.5 12 2.5V3ZM12 21V20.5C9.58666 20.5 7.40892 19.4949 5.86107 17.8791L5.50001 18.225L5.13894 18.5708C6.86758 20.3754 9.30288 21.5 12 21.5V21ZM5.50001 18.225L5.86107 17.8791C4.3981 16.3519 3.50001 14.2814 3.50001 12H3.00001H2.50001C2.50001 14.5493 3.50481 16.865 5.13894 18.5708L5.50001 18.225ZM5.50001 18.225L5.14645 17.8714L2.37142 20.6464L2.72498 21L3.07853 21.3536L5.85356 18.5785L5.50001 18.225ZM21 12H20.5C20.5 14.2814 19.6019 16.3519 18.1389 17.8791L18.5 18.225L18.8611 18.5708C20.4952 16.865 21.5 14.5493 21.5 12H21ZM18.5 18.225L18.1389 17.8791C16.5911 19.4949 14.4133 20.5 12 20.5V21V21.5C14.6971 21.5 17.1324 20.3754 18.8611 18.5708L18.5 18.225ZM18.5 18.225L18.1465 18.5785L20.9215 21.3536L21.275 21L21.6286 20.6464L18.8536 17.8714L18.5 18.225ZM17 12H16.5C16.5 14.4853 14.4853 16.5 12 16.5V17V17.5C15.0376 17.5 17.5 15.0376 17.5 12H17ZM12 17V16.5C9.51473 16.5 7.50001 14.4853 7.50001 12H7.00001H6.50001C6.50001 15.0376 8.96244 17.5 12 17.5V17ZM7.00001 12H7.50001C7.50001 9.51472 9.51473 7.5 12 7.5V7V6.5C8.96244 6.5 6.50001 8.96243 6.50001 12H7.00001ZM12 7V7.5C14.4853 7.5 16.5 9.51472 16.5 12H17H17.5C17.5 8.96243 15.0376 6.5 12 6.5V7ZM13 12H12.5C12.5 12.2761 12.2761 12.5 12 12.5V13V13.5C12.8284 13.5 13.5 12.8284 13.5 12H13ZM12 13V12.5C11.7239 12.5 11.5 12.2761 11.5 12H11H10.5C10.5 12.8284 11.1716 13.5 12 13.5V13ZM11 12H11.5C11.5 11.7239 11.7239 11.5 12 11.5V11V10.5C11.1716 10.5 10.5 11.1716 10.5 12H11ZM12 11V11.5C12.2761 11.5 12.5 11.7239 12.5 12H13H13.5C13.5 11.1716 12.8284 10.5 12 10.5V11Z" fill="var(--surface-brand-primary-strong, #9B71EF)"/></svg>',
            'title' => 'Focus only on your business',
            'desc' => '',
            'selected' => false,
        ],
        [
            'icon' => '<svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 3V21M6 4H20L15 9L20 14H6V4Z" stroke="var(--surface-brand-primary-strong, #9B71EF)" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            'title' => 'Choose your favorite framework',
            'desc' => '',
            'selected' => false,
        ],
    ],
    'imageLeft' => 'https://placehold.co/692x560',
    'imageRight' => 'https://placehold.co/692x560',
])

<div class="w-full max-w-7xl mx-auto bg-[var(--surface-secondary,#212A2B)] shadow rounded-[2rem] overflow-hidden flex flex-col items-center gap-8 px-4 py-10 md:gap-12 md:px-10 md:py-16">
    {{-- Header --}}
    <div class="flex flex-col items-center gap-4 w-full md:w-5/6 max-w-3xl">
        <div class="inline-flex items-center justify-center h-10 px-4 rounded-full"
            style="background:linear-gradient(180deg,rgba(0,0,0,0.06) 0%,rgba(0,0,0,0) 100%),var(--surface-brand-primary-strong,#9B71EF);box-shadow:0px 1px 1px rgba(255,255,255,0.20) inset;">
            <span class="text-white text-sm font-medium leading-[21px]">{{ $tagline }}</span>
        </div>
        <h2 class="w-full text-center text-[2.5rem] md:text-[4rem] font-semibold leading-tight" style="color:var(--text-primary,#F9FBFB);font-family:Inter;">
            {{ $title }}
        </h2>
        <p class="w-full text-center text-lg md:text-2xl font-medium leading-[2.25rem] text-[var(--text-secondary,#DFE6E7)]" style="font-family:Inter;">
            {{ $subtitle }}
        </p>
    </div>

    {{-- Benefits Grid --}}
    <div class="flex flex-col gap-8 w-full">
        {{-- Row 1: Image Left, Benefits Right --}}
        <div class="flex flex-col lg:flex-row gap-8 w-full items-center">
            <img src="{{ $imageLeft }}" alt="Benefit Image Left" class="w-full lg:w-1/2 h-72 md:h-[28rem] object-cover rounded-2xl" style="background:linear-gradient(0deg,rgba(60,12,159,0.70) 0%,rgba(60,12,159,0.70) 100%);background-blend-mode:soft-light,normal;">
            <div class="flex flex-col gap-6 w-full lg:w-1/2">
                @foreach($benefits as $benefit)
                    @if($loop->index < ceil(count($benefits)/2))
                        <div class="@if($benefit['selected']) bg-[var(--surface-secondary,#212A2B)] shadow @endif rounded-2xl p-6 flex flex-col gap-2">
                            <div class="flex items-center gap-3">
                                {!! $benefit['icon'] !!}
                                <span class="text-lg md:text-xl font-medium" style="color:var(--text-primary,#F9FBFB);">{{ $benefit['title'] }}</span>
                            </div>
                            @if(!empty($benefit['desc']))
                                <div class="pl-9 text-base text-[var(--text-tertiary,#A8B6B8)] font-medium">{{ $benefit['desc'] }}</div>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        {{-- Row 2: Benefits Left, Image Right --}}
        <div class="flex flex-col-reverse lg:flex-row gap-8 w-full items-center">
            <div class="flex flex-col gap-6 w-full lg:w-1/2">
                @foreach($benefits as $benefit)
                    @if($loop->index >= ceil(count($benefits)/2))
                        <div class="@if($benefit['selected']) bg-[var(--surface-secondary,#212A2B)] shadow @endif rounded-2xl p-6 flex flex-col gap-2">
                            <div class="flex items-center gap-3">
                                {!! $benefit['icon'] !!}
                                <span class="text-lg md:text-xl font-medium" style="color:var(--text-primary,#F9FBFB);">{{ $benefit['title'] }}</span>
                            </div>
                            @if(!empty($benefit['desc']))
                                <div class="pl-9 text-base text-[var(--text-tertiary,#A8B6B8)] font-medium">{{ $benefit['desc'] }}</div>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
            <img src="{{ $imageRight }}" alt="Benefit Image Right" class="w-full lg:w-1/2 h-72 md:h-[28rem] object-cover rounded-2xl" style="background:linear-gradient(0deg,#7B43EA 0%,#7B43EA 100%);background-blend-mode:overlay,normal;">
        </div>
    </div>
</div>