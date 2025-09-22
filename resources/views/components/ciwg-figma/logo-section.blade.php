@props([
    'logos' => [
        // Each logo: ['svg' => '<svg ...></svg>'] or ['img' => 'url']
    ]
])

<div class="relative w-full max-w-7xl h-48 md:h-[184px] mx-auto overflow-hidden flex items-center bg-base-100">
    {{-- Left gradient overlays --}}
    <div class="absolute left-0 top-0 w-16 md:w-20 h-full bg-base-200"></div>
    <div class="absolute left-16 md:left-20 top-0 w-40 md:w-52 h-full bg-gradient-to-r from-base-200 to-transparent"></div>
    {{-- Right gradient overlays --}}
    <div class="absolute right-0 top-0 w-16 md:w-20 h-full bg-base-200"></div>
    <div class="absolute right-16 md:right-20 top-0 w-40 md:w-52 h-full bg-gradient-to-l from-base-200 to-transparent"></div>

    {{-- Logos Row --}}
    <div class="relative w-5/6 mx-auto flex flex-row justify-between items-center gap-4 md:gap-8">
        {{-- Example logos, replace with dynamic loop if needed --}}
        <div class="flex-shrink-0 w-36 h-6 md:w-40 md:h-6 flex items-center justify-center overflow-hidden">
            {{-- Place SVG or <img> here --}}
            <svg width="39" height="24" viewBox="0 0 39 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.2678 0.0908203L26.0569 23.9618H14.5874L19.6977 14.0686H19.4684C15.2525 19.5414 8.96226 23.1442 -0.000366211 23.9618V14.2056C-0.000366211 14.2056 5.73323 13.8669 9.10386 10.3232H-0.000366211V0.0910089H10.2318V8.50681L10.4615 8.50587L14.6427 0.0910089H22.381V8.45346L22.6107 8.45309L26.9487 0.0908203H38.2678Z" fill="var(--surface-quinary, #6C8184)"/>
            </svg>
        </div>
        <div class="flex-shrink-0 w-12 h-6 flex items-center justify-center overflow-hidden">
            <svg width="5" height="20" viewBox="0 0 5 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.852905 19.3275H4.1482V0.412109H0.852905V19.3275Z" fill="var(--surface-quinary, #6C8184)"/>
            </svg>
        </div>
        <div class="flex-shrink-0 w-16 h-6 flex items-center justify-center overflow-hidden">
            <svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.68651 19.1339C6.4028 19.4317 7.13102 19.5805 7.87144 19.5805C9.09465 19.5805 10.189 19.2828 11.1547 18.6873C12.1204 18.0918 12.8687 17.2709 13.3999 16.2249C13.9311 15.1706 14.1966 13.9756 14.1966 12.6397C14.1966 11.3038 13.923 10.1088 13.3758 9.05461C12.8286 8.00042 12.0681 7.18361 11.0943 6.6042C10.1207 6.01674 9.01416 5.72703 7.77478 5.73508C6.98623 5.73508 6.22976 5.88798 5.50552 6.19379C4.78114 6.49958 4.17769 6.93414 3.69478 7.49745C3.65752 7.54035 3.62132 7.58366 3.58618 7.62741V0.423828H0.278687V19.3271H3.56205L3.55542 17.5612C3.64042 17.6653 3.73111 17.767 3.82764 17.8664C4.35073 18.4057 4.97035 18.8281 5.68651 19.1339ZM9.06641 16.0799C8.52727 16.4098 7.91162 16.5749 7.21959 16.5749C6.53553 16.5749 5.90782 16.4059 5.33646 16.0679C4.7651 15.7218 4.31042 15.2511 3.97243 14.6556C3.64253 14.0601 3.47758 13.3841 3.47758 12.6277C3.46949 11.8712 3.63047 11.1952 3.96037 10.5997C4.29836 9.99615 4.75303 9.52942 5.32439 9.19947C5.89575 8.86149 6.52744 8.69651 7.21959 8.70456C7.91162 8.69651 8.52727 8.85745 9.06641 9.18739C9.61363 9.50929 10.0321 9.97201 10.3218 10.5756C10.6195 11.1711 10.7684 11.8551 10.7684 12.6277C10.7684 13.4002 10.6195 14.0842 10.3218 14.6797C10.0321 15.2752 9.61363 15.742 9.06641 16.0799Z" fill="var(--surface-quinary, #6C8184)"/>
            </svg>
        </div>
        {{-- ...repeat for all logo SVGs or images as needed... --}}
        {{-- If you want to use dynamic logos: --}}
        @foreach($logos as $logo)
            <div class="flex-shrink-0 w-24 h-6 flex items-center justify-center overflow-hidden">
                @if(isset($logo['svg']))
                    {!! $logo['svg'] !!}
                @elseif(isset($logo['img']))
                    <img src="{{ $logo['img'] }}" alt="Logo" class="max-h-6 max-w-full object-contain" />
                @endif
            </div>
        @endforeach
    </div>
</div>