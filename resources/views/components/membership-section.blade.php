@props([
    'title' => 'Membership Plans',
    'subtitle' => 'Choose the plan that fits your gaming style. Become a member and enjoy exclusive benefits.',
    'plans' => []
])

<!-- Membership Section -->
<section id="membership" class="py-16 text-white bg-purple-900/20 md:py-24">
    <div class="container px-4 mx-auto">
        <h2 class="mb-4 text-3xl font-bold text-center md:text-4xl">{{ $title }}</h2>
        <p class="mx-auto mb-12 max-w-2xl text-center text-gray-400">{{ $subtitle }}</p>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            @foreach ($plans as $plan)
                <div class="bg-custom-dark-2 p-8 rounded-lg shadow-lg flex flex-col transition-all duration-300 @if($plan['featured']) border-2 border-purple-500 transform md:scale-105 shadow-purple-500/30 @else border-2 border-transparent @endif">
                    @if ($plan['featured'])
                        <span class="self-start px-3 py-1 mb-4 text-xs font-bold text-white bg-purple-600 rounded-full">Most Popular</span>
                    @endif
                    <h3 class="mb-4 text-2xl font-bold">{{ $plan['name'] }}</h3>
                    <p class="mb-6 text-4xl font-extrabold">{{ $plan['price'] }}<span class="text-lg font-normal text-gray-400">/mo</span></p>
                    <ul class="flex-grow mb-8 space-y-3 text-gray-300">
                        @foreach ($plan['features'] as $feature)
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 mr-3 w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                <span>{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                    <button class="@if($plan['featured']) bg-purple-600 hover:bg-purple-700 @else bg-gray-700 hover:bg-gray-600 @endif text-white font-bold py-3 px-6 rounded-md w-full transition-colors">
                        Choose Plan
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</section> 