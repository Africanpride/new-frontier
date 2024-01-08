<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />
    <x-header />
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <div class="max-w-[85rem] mx-auto py-10 px-4 sm:px-6 lg:px-8">
            <!-- Page Heading -->
            <header class="max-w-3xl">
                <p class="mb-2 text-sm font-semibold text-blue-600">Starter Pages &amp; Examples</p>
                <h1
                    class="block text-2xl font-['anton']  uppercase font-bold text-gray-800 sm:text-3xl dark:text-white">
                    Sticky Header using
                    Tailwind CSS</h1>
                <p class="mt-2 text-lg text-gray-800 dark:text-gray-400">This example is a quick exercise to illustrate
                    how fixed to top navbar works using Tailwind CSS. As you scroll, it will remain fixed to the top of
                    your browser's viewport.</p>
                <div class="mt-5 flex flex-col items-center gap-2 sm:flex-row sm:gap-3">
                    <a class="w-full sm:w-auto py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                        href="../../examples.html">
                        <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6" />
                        </svg>
                        Back to examples
                    </a>
                </div>
            </header>
            <!-- End Page Heading -->
        </div>
    </main>

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
<x-footer />
    @stack('modals')

    @livewireScripts
</body>

</html>
