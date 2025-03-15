<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    @stack('css')
</head>
<body>
    @yield('content')
    <script src="https://unpkg.com/flowbite@latest/dist/flowbite.bundle.js"></script>
    @stack('script')
</body>
</html>