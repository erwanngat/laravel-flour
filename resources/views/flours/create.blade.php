@extends('layout')

@section('main')
    {{-- @if ($errors->any())
    @foreach ($errors->all() as $error)
        <p> {{ $error }}</p>
    @endforeach
@endif --}}

    <div class="max-w-screen-md mx-auto text-center">
        <div class="justify-between p-8">
            <h1 class="text-4xl text-center">Make a flour</h1>
        </div>
        <form action="/flours" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold">Name:</label>
                <input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required
                    class="w-full px-3 py-2 border rounded-md shadow-md focus:outline-none focus:ring focus:border-blue-300 @error('name') border-red-500 @enderror">
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-bold">Price:</label>
                <input type="number" id="price" name="price" step="0.01" placeholder="Price"
                    value="{{ old('price') }}" required
                    class="w-full px-3 py-2 border rounded-md shadow-md focus:outline-none focus:ring focus:border-blue-300 @error('price') border-red-500 @enderror">
                @error('price')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="type" class="block text-gray-700 font-bold">Type:</label>
                <input type="text" id="type" name="type" placeholder="Type" value="{{ old('type') }}" required
                    class="w-full px-3 py-2 border rounded-md shadow-md focus:outline-none focus:ring focus:border-blue-300 @error('type') border-red-500 @enderror">
                @error('type')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="mineral_content" class="block text-gray-700 font-bold">Mineral Content:</label>
                <input type="number" id="mineral_content" name="mineral_content" step="0.01"
                    placeholder="Mineral Content" value="{{ old('mineral_content') }}" required
                    class="w-full px-3 py-2 border rounded-md shadow-md focus:outline-none focus:ring focus:border-blue-300 @error('mineral_content') border-red-500 @enderror">
                @error('mineral_content')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="expiry_date" class="block text-gray-700 font-bold">Expiry Date:</label>
                <input type="date" id="expiry_date" name="expiry_date" placeholder="Expiry Date"
                    value="{{ old('expiry_date') }}" required
                    class="w-full px-3 py-2 border rounded-md shadow-md focus:outline-none focus:ring focus:border-blue-300 @error('expiry_date') border-red-500 @enderror">
                @error('expiry_date')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            </div>
        </form>
    </div>

    <div class="absolute top-0 right-0 mt-4 mr-4">
        <a href="/flours">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Retour</button>
        </a>
    </div>
@endsection
