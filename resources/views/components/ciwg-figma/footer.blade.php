<div class="w-full max-w-[1440px] pb-10 px-6 bg-[var(--surface-base,#090B0C)] overflow-hidden flex flex-col items-center gap-6">
  <div class="w-full flex flex-row items-start gap-20 rounded-[2rem] bg-[var(--surface-secondary,#212A2B)] px-10 py-16">
    {{-- Left: Logo and Links --}}
    <div class="flex-1 flex flex-col gap-10">
      <div class="flex flex-row gap-20 w-full">
        {{-- Logo and Figma shapes --}}
        <div class="flex flex-col items-start">
          <div data-svg-wrapper>
            {{-- Main logo --}}
            <svg width="140" height="33" viewBox="0 0 140 33" fill="none" xmlns="http://www.w3.org/2000/svg">
              {{-- ...SVG paths unchanged... --}}
            </svg>
          </div>
          <div class="flex flex-row items-center gap-1 mt-2">
            {{-- Figma shapes (SVGs) --}}
            {{-- ...SVGs unchanged... --}}
          </div>
        </div>
        {{-- Links columns --}}
        <div class="flex-1 flex flex-row gap-20">
          <div class="flex-1 flex flex-col gap-6 overflow-hidden">
            <div class="text-[16px] font-semibold leading-6 text-[var(--text-primary,#F9FBFB)]">Links</div>
            <div class="flex flex-col gap-2">
              <div class="text-[14px] font-normal leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">Link One</div>
              <div class="text-[14px] font-normal leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">Link Two</div>
              <div class="text-[14px] font-normal leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">Link Three</div>
              <div class="text-[14px] font-normal leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">Link Four</div>
            </div>
          </div>
          <div class="flex-1 flex flex-col gap-6 overflow-hidden">
            <div class="text-[16px] font-semibold leading-6 text-[var(--text-primary,#F9FBFB)]">Links</div>
            <div class="flex flex-col gap-2">
              <div class="text-[14px] font-normal leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">Link Five</div>
              <div class="text-[14px] font-normal leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">Link Six</div>
              <div class="text-[14px] font-normal leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">Link Seven</div>
              <div class="text-[14px] font-normal leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">Link Eight</div>
            </div>
          </div>
          <div class="flex-1 flex flex-col gap-6 overflow-hidden">
            <div class="text-[16px] font-semibold leading-6 text-[var(--text-primary,#F9FBFB)]">Links</div>
            <div class="flex flex-col gap-2">
              <div class="text-[14px] font-normal leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">Promotions</div>
              <div class="text-[14px] font-normal leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">Gallery</div>
            </div>
          </div>
        </div>
      </div>
      {{-- Google Review Card --}}
      <div class="pl-6 pr-6 pt-3.5 pb-3.5 bg-[var(--surface-tertiary,#344346)] shadow-md rounded-3xl outline outline-1 outline-[var(--border-tretinary,#4E6164)] outline-offset-[-1px] flex flex-col gap-2.5">
        <div class="flex flex-row items-center gap-4">
          <div data-svg-wrapper>
            {{-- Google logo --}}
            <svg width="48" height="51" viewBox="0 0 48 51" fill="none" xmlns="http://www.w3.org/2000/svg">
              {{-- ...SVG paths unchanged... --}}
            </svg>
          </div>
          <div class="flex flex-col gap-1">
            <div class="flex flex-row items-center gap-2.5">
              <div class="w-[51px] h-[23px] flex items-center text-[32px] font-semibold leading-[44.8px] text-[var(--text-primary,#F9FBFB)]">4.9</div>
              <div class="flex flex-row items-center gap-1.5">
                {{-- 5 stars --}}
                @for ($i = 0; $i < 5; $i++)
                  <div data-svg-wrapper class="relative">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.20295 2.58956C8.9606 1.13681 11.0394 1.13682 11.7971 2.58956L13.8144 6.45765C13.8184 6.46535 13.8259 6.47062 13.8345 6.4718L18.2482 7.07872C19.9452 7.31207 20.6054 9.41491 19.3463 10.5764L16.2267 13.454C16.22 13.4602 16.2169 13.4694 16.2185 13.4784L16.9648 17.5958C17.2622 19.2369 15.5609 20.5148 14.0677 19.7719L10.0119 17.7541C10.0044 17.7504 9.9956 17.7504 9.98809 17.7541L5.93232 19.7719C4.43914 20.5148 2.73782 19.2369 3.03525 17.5958L3.7815 13.4784C3.78314 13.4694 3.78005 13.4602 3.77331 13.454L0.653737 10.5764C-0.6054 9.41491 0.0548029 7.31207 1.75184 7.07872L6.16553 6.4718C6.17413 6.47062 6.18162 6.46535 6.18563 6.45765L8.20295 2.58956Z" fill="var(--text-primary,#F9FBFB)"/>
                    </svg>
                  </div>
                @endfor
              </div>
            </div>
            <div class="text-[15px] font-normal leading-[22.5px] text-[var(--text-tertiary-invert,#6C8184)]">Based on 1894 reviews</div>
          </div>
        </div>
      </div>
    </div>
    {{-- Right: Address, Contact, Buttons --}}
    <div class="w-[380px] flex flex-col justify-between h-full">
      <div class="flex flex-col gap-6">
        <div class="flex flex-col gap-4">
          <div class="text-[16px] font-semibold leading-6 text-[var(--text-primary,#F9FBFB)]">Address</div>
          <div class="text-[14px] font-medium leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">5555 Northland Dr, Sunnyside, Ca. 55555</div>
        </div>
        <div class="flex flex-col gap-4">
          <div class="text-[16px] font-semibold leading-6 text-[var(--text-primary,#F9FBFB)]">Contact</div>
          <div class="text-[14px] font-medium leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">(555) 555-5555</div>
        </div>
      </div>
      <div class="flex flex-row items-center gap-2 mt-6">
        <div class="h-14 px-8 bg-[var(--surface-tertiary,#344346)] shadow-inner rounded-[14px] flex items-center gap-2">
          <div class="uppercase font-semibold text-[16px] leading-6 tracking-wide text-[var(--text-primary,#F9FBFB)]">Button</div>
        </div>
        <div class="h-14 px-6 bg-[var(--surface-brand-primary,#7B43EA)] shadow-inner rounded-xl outline outline-1 outline-[var(--border-primary,#212A2B)] outline-offset-[-1px] flex items-center gap-1.5">
          <div data-svg-wrapper class="relative">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6.42459 3.23775C7.51203 2.76707 8.77662 3.00825 9.61449 3.84612L9.9591 4.19073C11.0636 5.29519 11.3313 6.98519 10.6223 8.37694L9.97022 9.65693C9.58386 10.4153 9.72975 11.3363 10.3316 11.9381L12.0619 13.6684C12.6637 14.2702 13.5847 14.4161 14.3431 14.0298L15.6231 13.3777C17.0148 12.6687 18.7048 12.9364 19.8093 14.0409L20.1539 14.3855C20.9918 15.2234 21.2329 16.488 20.7623 17.5754C19.4986 20.4948 16.2974 21.9789 13.6038 20.2867C11.9845 19.2694 10.0931 17.8454 8.12386 15.8761C6.15459 13.9069 4.73063 12.0155 3.71332 10.3962C2.02107 7.70255 3.50523 4.50135 6.42459 3.23775Z" stroke="var(--text-primary,#F9FBFB)" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="uppercase font-medium text-[16px] leading-6 tracking-wide text-[var(--text-primary,#F9FBFB)]">(555) 555-5555</div>
        </div>
      </div>
    </div>
  </div>
  {{-- Bottom bar --}}
  <div class="w-full flex flex-row items-center justify-between px-3">
    <div class="text-[14px] font-normal leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">Designed & Developed by CI WEB GROUP</div>
    <div class="flex flex-row gap-6">
      <div class="text-[14px] font-normal leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">Privacy Policy</div>
      <div class="text-[14px] font-normal leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">Terms of Service</div>
      <div class="text-[14px] font-normal leading-[21px] text-[var(--text-tertiary,#A8B6B8)]">Cookie Settings</div>
    </div>
    <div class="flex flex-row gap-3">
      {{-- Social icons --}}
      <div data-svg-wrapper class="relative">
        {{-- ...SVGs unchanged... --}}
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22 12.3033C22 6.7467 17.5229 2.24219 12 2.24219C6.47715 2.24219 2 6.7467 2 12.3033C2 17.325 5.65684 21.4874 10.4375 22.2422V15.2116H7.89844V12.3033H10.4375V10.0867C10.4375 7.56515 11.9305 6.17231 14.2146 6.17231C15.3088 6.17231 16.4531 6.36882 16.4531 6.36882V8.8448H15.1922C13.95 8.8448 13.5625 9.62041 13.5625 10.4161V12.3033H16.3359L15.8926 15.2116H13.5625V22.2422C18.3432 21.4874 22 17.3252 22 12.3033Z" fill="var(--text-tertiary,#A8B6B8)"/>
        </svg>
      </div>
      <div data-svg-wrapper class="relative">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M16 3.24219H8C5.23858 3.24219 3 5.48077 3 8.24219V16.2422C3 19.0036 5.23858 21.2422 8 21.2422H16C18.7614 21.2422 21 19.0036 21 16.2422V8.24219C21 5.48077 18.7614 3.24219 16 3.24219ZM19.25 16.2422C19.2445 18.0348 17.7926 19.4867 16 19.4922H8C6.20735 19.4867 4.75549 18.0348 4.75 16.2422V8.24219C4.75549 6.44954 6.20735 4.99768 8 4.99219H16C17.7926 4.99768 19.2445 6.44954 19.25 8.24219V16.2422ZM16.75 8.49219C17.3023 8.49219 17.75 8.04447 17.75 7.49219C17.75 6.93991 17.3023 6.49219 16.75 6.49219C16.1977 6.49219 15.75 6.93991 15.75 7.49219C15.75 8.04447 16.1977 8.49219 16.75 8.49219ZM12 7.74219C9.51472 7.74219 7.5 9.75691 7.5 12.2422C7.5 14.7275 9.51472 16.7422 12 16.7422C14.4853 16.7422 16.5 14.7275 16.5 12.2422C16.5027 11.0479 16.0294 9.90176 15.1849 9.05727C14.3404 8.21278 13.1943 7.73953 12 7.74219ZM9.25 12.2422C9.25 13.761 10.4812 14.9922 12 14.9922C13.5188 14.9922 14.75 13.761 14.75 12.2422C14.75 10.7234 13.5188 9.49219 12 9.49219C10.4812 9.49219 9.25 10.7234 9.25 12.2422Z" fill="var(--text-tertiary,#A8B6B8)"/>
        </svg>
      </div>
      <div data-svg-wrapper class="relative">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M17.1761 4.24219H19.9362L13.9061 11.0196L21 20.2422H15.4456L11.0951 14.6488L6.11723 20.2422H3.35544L9.80517 12.993L3 4.24219H8.69545L12.6279 9.35481L17.1761 4.24219ZM16.2073 18.6176H17.7368L7.86441 5.78147H6.2232L16.2073 18.6176Z" fill="var(--text-tertiary,#A8B6B8)"/>
        </svg>
      </div>
      <div data-svg-wrapper class="relative">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 3.24219C3.67157 3.24219 3 3.91376 3 4.74219V19.7422C3 20.5706 3.67157 21.2422 4.5 21.2422H19.5C20.3284 21.2422 21 20.5706 21 19.7422V4.74219C21 3.91376 20.3284 3.24219 19.5 3.24219H4.5ZM8.52076 7.24491C8.52639 8.20116 7.81061 8.79038 6.96123 8.78616C6.16107 8.78194 5.46357 8.14491 5.46779 7.24632C5.47201 6.40116 6.13998 5.72194 7.00764 5.74163C7.88795 5.76132 8.52639 6.40679 8.52076 7.24491ZM12.2797 10.0039H9.75971H9.7583V18.5638H12.4217V18.3641C12.4217 17.9842 12.4214 17.6042 12.4211 17.2241C12.4203 16.2103 12.4194 15.1954 12.4246 14.1819C12.426 13.9358 12.4372 13.6799 12.5005 13.445C12.7381 12.5675 13.5271 12.0008 14.4074 12.1401C14.9727 12.2286 15.3467 12.5563 15.5042 13.0893C15.6013 13.4225 15.6449 13.7811 15.6491 14.1285C15.6605 15.1761 15.6589 16.2237 15.6573 17.2714C15.6567 17.6412 15.6561 18.0112 15.6561 18.381V18.5624H18.328V18.3571C18.328 17.9051 18.3278 17.4532 18.3275 17.0013C18.327 15.8718 18.3264 14.7423 18.3294 13.6124C18.3308 13.1019 18.276 12.5985 18.1508 12.1049C17.9638 11.3708 17.5771 10.7633 16.9485 10.3246C16.5027 10.0124 16.0133 9.81129 15.4663 9.78879C15.404 9.7862 15.3412 9.78281 15.2781 9.7794C14.9984 9.76428 14.7141 9.74892 14.4467 9.80285C13.6817 9.95613 13.0096 10.3063 12.5019 10.9236C12.4429 10.9944 12.3852 11.0663 12.2991 11.1736L12.2797 11.1979V10.0039ZM5.68164 18.5666H8.33242V10.0095H5.68164V18.5666Z" fill="var(--text-tertiary,#A8B6B8)"/>
        </svg>
      </div>
      <div data-svg-wrapper class="relative">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M21.5931 7.20301C21.4792 6.78041 21.2566 6.39501 20.9475 6.08518C20.6383 5.77534 20.2534 5.55187 19.8311 5.43701C18.2651 5.00701 12.0001 5.00001 12.0001 5.00001C12.0001 5.00001 5.73609 4.99301 4.16909 5.40401C3.74701 5.52415 3.36291 5.75078 3.05365 6.06214C2.7444 6.3735 2.52037 6.75913 2.40309 7.18201C1.99009 8.74801 1.98609 11.996 1.98609 11.996C1.98609 11.996 1.98209 15.26 2.39209 16.81C2.62209 17.667 3.29709 18.344 4.15509 18.575C5.73709 19.005 11.9851 19.012 11.9851 19.012C11.9851 19.012 18.2501 19.019 19.8161 18.609C20.2386 18.4943 20.6238 18.2714 20.9337 17.9622C21.2436 17.653 21.4675 17.2682 21.5831 16.846C21.9971 15.281 22.0001 12.034 22.0001 12.034C22.0001 12.034 22.0201 8.76901 21.5931 7.20301ZM9.99609 15.005L10.0011 9.00501L15.2081 12.01L9.99609 15.005Z" fill="var(--text-tertiary,#A8B6B8)"/>
        </svg>
      </div>
    </div>
  </div>
</div>