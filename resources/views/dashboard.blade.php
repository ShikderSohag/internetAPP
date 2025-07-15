<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800  leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-2">
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 font-bold text-center">
                    Welcome Back Mr.{{ Auth::user()->name }}!
                </div>
            </div>
            <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 font-bold">
                    <h3 class="text-lg font-semibold mb-4">User List</h3>
                    <ul>
                        @if ($users->isEmpty())
                            <li class="text-gray-500">No users found.</li>
                        @else
                            @foreach ($users->where('isConsumer', true) as $user)
                                <li class="mb-2">
                                    <span class="font-medium">{{ $user->name }}</span>
                                </li>
                            @endforeach
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
