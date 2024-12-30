<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Task Manager</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')
            <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-4">
                <h2 class="text-2xl font-bold">ToDoi</h2>
            </div>
            <nav class="p-4 space-y-4">
                <a href="/tasks/create" class="block px-4 py-2 rounded-md hover:bg-gray-200">Workouts</a>
                <a href="/tasks/edit" class="block px-4 py-2 rounded-md hover:bg-gray-200">Learning</a>
                <a href="/tasks/delete" class="block px-4 py-2 rounded-md hover:bg-gray-200">Meetings</a>
                <a href="/tasks/create" class="block px-4 py-2 rounded-md hover:bg-gray-200">Lectures</a>
                <a href="/tasks/delete" class="block px-4 py-2 rounded-md hover:bg-gray-200">Entertainment</a>
                <a href="/tasks/delete" class="block px-4 py-2 rounded-md hover:bg-gray-200">Others</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <header class="flex items-center justify-between">
                <h1 class="text-3xl font-bold">Meetings</h1>
                <button class="px-4 py-2 text-white bg-purple-500 rounded-md">Add New</button>
            </header>

            <div class="mt-8">

            

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
