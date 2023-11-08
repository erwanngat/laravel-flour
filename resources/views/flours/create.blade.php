@extends('layout')

@section('main')
    <div class="max-w-screen-md mx-auto text-center">
        <div class="justify-between p-8">
            <h1 class="text-4xl text-center">Make a flour</h1>
        </div>
        <form action="/flours" method="post">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold">Name:</label>
                <input type="text" id="name" name="name" placeholder="Name" required
                    class="w-full px-3 py-2 border rounded-md shadow-md focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-bold">Price:</label>
                <input type="number" id="price" name="price" step="0.01" placeholder="Price" required
                    class="w-full px-3 py-2 border rounded-md shadow-md focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-4">
                <label for="type" class="block text-gray-700 font-bold">Type:</label>
                <input type="text" id="type" name="type" placeholder="Type" required
                    class="w-full px-3 py-2 border rounded-md shadow-md focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-4">
                <label for="mineral_content" class="block text-gray-700 font-bold">Mineral Content:</label>
                <input type="number" id="mineral_content" name="mineral_content" step="0.01"
                    placeholder="Mineral Content" required
                    class="w-full px-3 py-2 border rounded-md shadow-md focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-4">
                <label for="expiry_date" class="block text-gray-700 font-bold">Expiry Date:</label>
                <input type="date" id="expiry_date" name="expiry_date" placeholder="Expiry Date" required
                    class="w-full px-3 py-2 border rounded-md shadow-md focus:outline-none focus:ring focus:border-blue-300">
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
