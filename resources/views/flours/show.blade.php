@extends('layout')

@section('main')
    <div class="max-w-screen-md mx-auto text-center">
        <div class="justify-between p-8">
            <h1 class="text-4xl text-center inline-block">{{ $flour->name }} Flour</h1>
            <div class="inline-block ml-0">
                <a href="/flours/{{ $flour->id }}/edit">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                </a>
            </div>
        </div>
        <div class="justify-center">
            <img src="/images/{{ $flour->image }}" alt="{{ $flour->name }} image" class="w-1/2 mx-auto my-auto mb-2">
        </div>
        <div class="max-w-screen-md mx-auto mt-7">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border border-gray-800">ID</th>
                        <th class="px-4 py-2 border border-gray-800">Name</th>
                        <th class="px-4 py-2 border border-gray-800">Price</th>
                        <th class="px-4 py-2 border border-gray-800">Type</th>
                        <th class="px-4 py-2 border border-gray-800">Mineral Content</th>
                        <th class="px-4 py-2 border border-gray-800">Expiry Date</th>
                        <th class="px-4 py-2 border border-gray-800">Owner</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 border border-gray-800">{{ $flour->id }}</td>
                        <td class="px-4 py-2 border border-gray-800">{{ $flour->name }}</td>
                        <td class="px-4 py-2 border border-gray-800">{{ $flour->price }}</td>
                        <td class="px-4 py-2 border border-gray-800">{{ $flour->type }}</td>
                        <td class="px-4 py-2 border border-gray-800">{{ $flour->mineral_content }}</td>
                        <td class="px-4 py-2 border border-gray-800">{{ $dateDifference }}</td>
                        <td class="px-4 py-2 border border-gray-800">{{ $flour->owner->name }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="absolute top-0 right-0 mt-4 mr-4">
                <a href="/flours/">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Retour</button>
                </a>
            </div>
            <div class="absolute top-0 left-4 mt-4 mr-4">
                <form action="/flours/{{ $flour->id }}" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
                </form>
            </div>
        @endsection
