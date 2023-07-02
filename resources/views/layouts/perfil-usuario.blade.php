<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a tu portal de pagos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/checkout.js') }}"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

</head>

<body>
    <main>
        @yield('content')
    </main>

    @livewireScripts

    <script src="https://js.stripe.com/v3/"></script>
</body>

</html>
