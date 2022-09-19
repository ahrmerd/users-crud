<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}

    <title>Users Crud</title>
</head>


<body class="bg-gray-100 font-sans antialiased">
    <x-navbar />
    <main class=" ">
        @yield('content')
    </main>
</body>

</html>
