<!DOCTYPE html>
{{-- Use html lang attribute from Laravel localization --}}
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Use config value or fallback for title --}}
    <title>{{ $title ?? config('app.name', 'CoolAir') }}</title>

    {{-- Link compiled CSS (Vite example) --}}

    @if (env('ENV') === 'development')
        {{-- Development - Use Vite dev server --}}
        <link rel="stylesheet" href="http://localhost:5173/resources/assets/app.css">
    @else
        {{-- Production - Use built assets --}}
        <link rel="stylesheet" href="{{ asset('/app.css') }}">
    @endif

    {{-- Include Swiper.js CSS (CDN - consider bundling) --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    {{-- Include Badger Accordion CSS (v1.2.4 - CDN - consider bundling) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/badger-accordion@1.2.4/dist/badger-accordion.css">

    {{-- Optional: Include an icon library like Ionicons (CDN - consider local/SVG approach) --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    @stack('styles') {{-- Allow pushing styles from views --}}
</head>
<body class="bg-gray-50 font-sans flex flex-col min-h-screen">

    {{-- Include Header Component --}}

    {{-- Main Content Area --}}
    <main class="flex-grow">
        @yield('content') {{-- Page specific content goes here --}}
    </main>

    {{-- Include Footer Component --}}

    {{-- Include JS Libraries (CDN - consider bundling) --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/badger-accordion@1.2.4/dist/badger-accordion.min.js"></script>

    @if (env('ENV') === 'development')
        {{-- Development - Use Vite dev server --}}
        <script type="module" src="http://localhost:5173/resources/assets/app.js"></script>
    @else
        {{-- Production - Use built assets --}}
        <script type="module" src="{{ asset('/app.js') }}"></script>
    @endif
    @stack('scripts') {{-- Allow pushing scripts from views --}}
</body>
</html>

