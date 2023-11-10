@extends('layout')

@section('main')
    <div class="max-w-screen-md mx-auto text-center">
        <div class="justify-between p-8">
            <h1 class="text-4xl text-center">All the flours</h1>
        </div>
        <div class="max-w-screen-md mx-auto">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border border-gray-800">ID</th>
                        <th class="px-4 py-2 border border-gray-800">Name</th>
                        <th class="px-4 py-2 border border-gray-800">Price</th>
                        <th class="px-4 py-2 border border-gray-800">Type</th>
                        <th class="px-4 py-2 border border-gray-800">Mineral Content</th>
                        <th class="px-4 py-2 border border-gray-800">Expiry Date</th>
                        <th class="px-4 py-2 border border-gray-800">Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($flours as $flour)
                        <tr>
                            <td class="px-4 py-2 border border-gray-800">{{ $flour->id }}</td>
                            <td class="px-4 py-2 border border-gray-800">{{ $flour->name }}</td>
                            <td class="px-4 py-2 border border-gray-800">{{ $flour->price }}</td>
                            <td class="px-4 py-2 border border-gray-800">{{ $flour->type }}</td>
                            <td class="px-4 py-2 border border-gray-800">{{ $flour->mineral_content }}</td>
                            <td class="px-4 py-2 border border-gray-800">{{ $flour->expiry_date }}</td>
                            <td class="px-4 py-2 border border-gray-800"> <a href='/flours/{{ $flour->id }}'
                                    class="text-blue-500 hover:underline">more
                                    informations</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="absolute top-0 right-0 mt-4 mr-4">
            <a href="/flours/create" class="text-right">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add a flour</button>
            </a>
        @endsection
    </div>
