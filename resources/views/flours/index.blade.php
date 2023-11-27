<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-4xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('All the flours') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="max-w-screen-md mx-auto text-center">
                    <div class="max-w-screen-md mx-auto">
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr>
                                    <x-tab.th>ID</x-tab.th>
                                    <x-tab.th>Name</x-tab.th>
                                    <x-tab.th>Price</x-tab.th>
                                    <x-tab.th>Type</x-tab.th>
                                    <x-tab.th>Mineral Content</x-tab.th>
                                    <x-tab.th>Expiry Date</x-tab.th>
                                    <x-tab.th>Image</x-tab.th>
                                    <x-tab.th>Owner</x-tab.th>
                                    <x-tab.th>Details</x-tab.th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($flours as $flour)
                                    <tr>
                                        <x-tab.td>{{ $flour->id }}</x-tab.td>
                                        <x-tab.td>{{ $flour->name }}</x-tab.td>
                                        <x-tab.td>{{ $flour->price }}</x-tab.td>
                                        <x-tab.td>{{ $flour->type }}</x-tab.td>
                                        <x-tab.td>{{ $flour->mineral_content }}</x-tab.td>
                                        <x-tab.td>{{ $flour->expiry_date }}</x-tab.td>
                                        <x-tab.td><img src="/images/{{ $flour->image }}"></x-tab.td>
                                        <x-tab.td>
                                            @if ($flour->owner)
                                                {{ $flour->owner->name }}
                                            @else
                                                no one
                                            @endif
                                        </x-tab.td>
                                        <x-tab.td> <a href='/flours/{{ $flour->id }}'
                                                class="text-blue-500 hover:underline">more
                                                informations</a></x-tab.td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
