<x-app-layout>
    <div class="p-6 bg-white rounded-lg shadow">
        <table class="w-full border-collapse">
            <thead>
                <tr class="text-left">
                    <th class="py-2 border-b">Agenda</th>
                    <th class="py-2 border-b">Status</th>
                    <th class="py-2 border-b">Date of Meeting</th>
                    <th class="py-2 border-b">Start Time</th>
                    <th class="py-2 border-b">Discussion Points</th>
                    <th class="py-2 border-b">Assignees</th>
                    <th class="py-2 border-b"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td class="py-2">{{ $task->title }}</td>
                        <td class="py-2 text-purple-600">{{ $task->status }}</td>
                        <td class="py-2">{{ $task->meeting_date }}</td>
                        <td class="py-2">{{ $task->start_time }}</td>
                        <td class="py-2">
                            <a href="{{ $task->discussion_points }}" class="text-blue-500 hover:underline">
                                View Points
                            </a>
                        </td>
                        <td class="py-2">
                            <div class="flex -space-x-2">
                                <!-- Replace with actual profile images -->
                                <img class="w-6 h-6 border rounded-full" src="/path/to/user1.jpg" alt="User 1">
                                <img class="w-6 h-6 border rounded-full" src="/path/to/user2.jpg" alt="User 2">
                            </div>
                        </td>
                        <td class="py-2">
                            <button class="text-gray-500 hover:text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 19c0 .553.448 1 1 1h10c.552 0 1-.447 1-1V7H6v12zm12-15H6l-1-1H2v2h20V3h-3l-1 1zM4 4l1 1h14l1-1H4z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
