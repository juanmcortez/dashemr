<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title inertia>{{ config('app.name', 'DashEMR') }}</title>

    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Scripts -->
    @routes
    @vite('resources/js/dashemr.js')
    @inertiaHead
</head>

<body class="font-sans leading-normal tracking-normal bg-gray-200"">
    <div class="flex ">
    @inertia
    </div>
</body>

</html>
