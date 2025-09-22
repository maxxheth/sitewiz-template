<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Hyde Site' }}</title>

    
    @if (env('ENV') === 'development')
        {{-- Development - Use Vite dev server --}}
        <script type="module" src="http://localhost:5173/resources/assets/app.js"></script>
        <link rel="stylesheet" href="http://localhost:5173/resources/assets/app.css">
    @else
        {{-- Production - Use built assets --}}
        <script type="module" src="{{ asset('/app.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('/app.css') }}">
    @endif
    
    
    @stack('styles')
</head>
@php($links = [
    ['url' => '/', 'title' => 'Home'],
    ['url' => '/about', 'title' => 'About'],
    ['url' => '/contact', 'title' => 'Contact'],
])
<body>

    <x-headers:links="$links" />
    <main class="site-content">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Hyde Website. All rights reserved.</p>
        </div>
    </footer>
    
    @stack('scripts')
</body>
</html>