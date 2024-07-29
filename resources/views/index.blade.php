<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-----------------------------------------------------------
-- animate.min.css by Daniel Eden (https://animate.style)
-- is required for the animation of notifications and slide out panels
-- you can ignore this step if you already have this file in your project
--------------------------------------------------------------------------->

    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="px-6">
    @include('layouts.navigation')
    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3">
        @foreach($brands as $brand)
            <x-bladewind::card compact="true">
                <div class="flex items-center">
                    <div>
                        <x-bladewind.avatar label="{{$brand['name']}}" image="{{ asset($brand['image']) }}" show_ring="true" />
                    </div>
                    <div class="grow pl-2 pt-1">
                        <b class="text-xl">{{ $brand['name'] }}</b>
                        <p class="text-lg line-clamp-3">{{ $brand['description']  }}</p>
                    </div>
                </div>
            </x-bladewind::card>
        @endforeach
    </div>
</body>
</html>
