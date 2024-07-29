<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.header')
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>
    @include('partials.footer')
</body>
</html>
