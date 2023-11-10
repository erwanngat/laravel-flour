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
            @if ($flour->name == 'Almond')
                <img class="mx-auto" src="{{ asset('images/almond.png') }}" alt="Almond Flour Image">
            @endif
            @if ($flour->name == 'Coconut')
                <img class="mx-auto" src="{{ asset('images/coconut.png') }}" alt="Coconut Flour Image">
            @endif
            @if ($flour->name == 'Barley')
                <img class="mx-auto" src="{{ asset('images/barley.png') }}" alt="Barley Flour Image">
            @endif
            @if ($flour->name == 'Rye')
                <img class="mx-auto" src="{{ asset('images/rye.png') }}" alt="Rye Flour Image">
            @endif
            @if ($flour->name == 'Rice')
                <img class="mx-auto" src="{{ asset('images/rice.png') }}" alt="Rice Flour Image">
            @endif
            @if ($flour->name == 'Wheat')
                <img class="mx-auto" src="{{ asset('images/wheat.png') }}" alt="Wheat Flour Image">
            @endif
            @if ($flour->name == 'Corn')
                <img class="mx-auto" src="{{ asset('images/corn.png') }}" alt="Corn Flour Image">
            @endif

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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 border border-gray-800">{{ $flour->id }}</td>
                        <td class="px-4 py-2 border border-gray-800">{{ $flour->name }}</td>
                        <td class="px-4 py-2 border border-gray-800">{{ $flour->price }}</td>
                        <td class="px-4 py-2 border border-gray-800">{{ $flour->type }}</td>
                        <td class="px-4 py-2 border border-gray-800">{{ $flour->mineral_content }}</td>
                        <td class="px-4 py-2 border border-gray-800">{{ $flour->expiry_date }}</td>
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
