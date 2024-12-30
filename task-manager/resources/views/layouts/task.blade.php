<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md">
            <div class="p-4">
                <h2 class="text-2xl font-bold">ToDoi</h2>
            </div>
            <nav class="p-4 space-y-4">
                <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-200">Workspace</a>
                <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-200">Boards</a>
                <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-200">Tasks</a>
                <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-200">Meetings</a>
                <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-200">Timesheets</a>
                <a href="#" class="block px-4 py-2 rounded-md hover:bg-gray-200">Chat</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <header class="flex items-center justify-between">
                <h1 class="text-3xl font-bold">Meetings</h1>
                <button class="px-4 py-2 text-white bg-purple-500 rounded-md">Add New</button>
            </header>

            <div class="mt-8">
                <!-- Place your content here -->
                {{ $slot }}
            </div>
        </main>
    </div>
</body>
</html>
