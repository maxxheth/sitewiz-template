@props([
    'title' => 'Attention Grabbing Header',
    'subtitle' => 'This is a subtitle that explains more about the awesome product or service you are offering.',
    'image' => 'https://placehold.co/800x400/1a1a2e/8e44ad?text=Company+Showcase',
    'imageAlt' => 'Product Showcase'
])
<section class="py-20 text-center">
    <div class="p-8 bg-purple-900 bg-opacity-30 rounded-xl border shadow-2xl border-purple-700/50">
        <h1 class="mb-4 text-4xl font-bold leading-tight md:text-6xl">{{ $title }}</h1>
        <p class="mx-auto mb-8 max-w-2xl text-lg text-gray-300 md:text-xl">{{ $subtitle }}</p>
        <div class="mt-12">
            <img src="{{ $image }}" alt="{{ $imageAlt }}" class="mx-auto rounded-lg shadow-lg">
        </div>
    </div>
</section>