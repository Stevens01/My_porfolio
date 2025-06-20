<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio Laravel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
        @include('partials.styles')
    
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50">
    @include('partials.nav')

    @yield('content')

    @include('partials.footer')
    
    @include('partials.scripts')
</body>
</html>
