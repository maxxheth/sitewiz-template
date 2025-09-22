<div class="relative w-full max-w-7xl mx-auto bg-[var(--surface-secondary,#212A2B)] shadow rounded-[2rem] overflow-hidden outline outline-1 outline-[var(--border-tretinary,#4E6164)] outline-offset-[-1px] flex flex-col items-center gap-16">
    {{-- Decorative background gradients --}}
    <div class="absolute right-0 bottom-0 pointer-events-none select-none hidden lg:block" style="width:64vw;max-width:1024px;height:32vw;max-height:512px;transform:rotate(180deg);opacity:0.40;">
        <div class="absolute inset-0 overflow-hidden rounded-t-[50vw]">
            <div class="absolute left-0 -top-1/2 w-full h-full" style="background:linear-gradient(180deg,var(--gradient-color-light-1) 0%,rgba(0,0,0,0) 100%),linear-gradient(180deg,var(--gradient-color-dark-1) 0%,rgba(32,42,43,0) 100%);box-shadow:0px 0.8px 0.8px var(--shadow-color-light-inset-1) inset;border-radius:9999px;border:1px rgba(255,255,255,0) solid;"></div>
            <div class="absolute inset-0" style="background:linear-gradient(180deg,rgba(33,42,43,0) 0%,var(--surface-secondary, #212A2B) 100%),radial-gradient(ellipse 50% 50% at 50% 50%,var(--surface-secondary, #212A2B) 0%,rgba(33,42,43,0) 100%);"></div>
        </div>
    </div>

    {{-- Navigation Bar --}}
    <div class="w-full flex flex-col gap-2 pt-10 px-4 md:px-10">
        <div class="flex items-center justify-between w-full">
            {{-- Logo (SVG/Shapes as in Figma) --}}
            <div class="flex items-center gap-2 min-w-[140px]">
                {{-- SVG logo placeholder --}}
                <div class="w-36 h-8 bg-white rounded"></div>
                {{-- Figma logo shapes (SVGs) --}}
                <div class="flex flex-row items-center gap-0.5">
                    {{-- ...SVGs omitted for brevity... --}}
                </div>
            </div>
            {{-- Navigation Links --}}
            <nav class="hidden md:flex items-center gap-12 px-6 py-3 rounded-full" style="background:linear-gradient(180deg,rgba(255,255,255,0.02) 0%,rgba(255,255,255,0) 100%),var(--surface-secondary,#212A2B);box-shadow:0px 1px 1px var(--shadow-color-light-inset-1) inset;">
                @foreach($navItems as $item)
                    <a href="{{ $item['url'] }}" class="text-sm font-medium" style="color:var(--text-primary,#F9FBFB);line-height:21px;">
                        {{ $item['text'] }}
                    </a>
                @endforeach
            </nav>
            {{-- Call Button --}}
            <a href="tel:{{ preg_replace('/\D/', '', $phone) }}" class="flex items-center gap-1 px-6 py-3 rounded-xl uppercase font-medium text-base shadow"
                style="background:var(--surface-brand-primary,#7B43EA);color:var(--text-primary,#F9FBFB);box-shadow:0px 1px 1px var(--shadow-color-light-inset-3) inset;outline:1px var(--border-primary,#212A2B) solid;outline-offset:-1px;">
                <svg width="24" height="24" fill="none" class="mr-1" style="color:var(--text-primary,#F9FBFB);" xmlns="http://www.w3.org/2000/svg"><rect width="18" height="18" x="3" y="3" rx="4" stroke="currentColor" stroke-width="2"/></svg>
                {{ $phone }}
            </a>
        </div>
    </div>

    {{-- Hero Section --}}
    <div class="flex flex-col items-center gap-8 py-12 w-full">
        <div class="flex flex-col items-center gap-8 w-full max-w-4xl">
            <h1 class="text-center font-semibold leading-[1.1] text-5xl md:text-7xl lg:text-8xl" style="color:var(--text-primary,#F9FBFB);font-family:Inter;">
                {!! $heroTitle !!}
            </h1>
            <p class="text-center text-lg md:text-2xl font-medium leading-[2.25rem] max-w-2xl" style="color:var(--text-secondary,#DFE6E7);font-family:Inter;">
                {{ $heroSubtitle }}
            </p>
        </div>
        <div class="flex flex-row gap-2">
            <a href="#get-started" class="flex items-center justify-center px-8 h-14 rounded-[14px] font-semibold uppercase text-base tracking-wide shadow"
                style="background:var(--surface-tertiary,#344346);color:var(--text-primary,#F9FBFB);box-shadow:0px 1px 1px var(--shadow-color-light-inset-2) inset;">
                {{ $buttonText }}
            </a>
            <a href="tel:{{ preg_replace('/\D/', '', $phone) }}" class="flex items-center gap-1 px-6 h-14 rounded-xl uppercase font-medium text-base shadow"
                style="background:var(--surface-brand-primary,#7B43EA);color:var(--text-primary,#F9FBFB);box-shadow:0px 1px 1px var(--shadow-color-light-inset-3) inset;outline:1px var(--border-primary,#212A2B) solid;outline-offset:-1px;">
                <svg width="24" height="24" fill="none" class="mr-1" style="color:var(--text-primary,#F9FBFB);" xmlns="http://www.w3.org/2000/svg"><rect width="18" height="18" x="3" y="3" rx="4" stroke="currentColor" stroke-width="2"/></svg>
                {{ $phone }}
            </a>
        </div>
    </div>

    {{-- Image Gallery --}}
    <div class="w-full flex flex-col items-center gap-4 pb-8">
        <div class="flex flex-row gap-4 w-full overflow-x-auto px-4">
            @foreach($images as $img)
                <img src="{{ $img }}" alt="Gallery" class="rounded-2xl object-cover h-40 md:h-60 lg:h-80 w-48 md:w-64 lg:w-80 flex-shrink-0" />
            @endforeach
        </div>
    </div>
</div>