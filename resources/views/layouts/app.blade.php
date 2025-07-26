<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sagar Construction Group')</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/png">
    @vite('resources/css/app.css')
    @include('Frontend.styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet"
        href="https://unpkg.com/bs-brain@2.0.4/components/contacts/contact-5/assets/css/contact-5.css">
        
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</head>

<body>
    @include('Frontend.header')
    <main class="mt-[80px]">
        @yield('content')
    </main>
    @include('Frontend.footer')
    @include('Frontend.scripts')
</body>

</html>