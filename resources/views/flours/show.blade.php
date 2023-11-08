@extends('layout')

@section('main')
    <div class="max-w-screen-md mx-auto">
        <div class="justify-between p-8">
            <h1 class="text-4xl text-center">Just one flour</h1>
        </div>
        <div class="flex justify-center">
            <ul class="list-disc pl-4">
                <li>ID: {{ $flour->id }}</li>
                <li>Name: {{ $flour->name }}</li>
                <li>Price: {{ $flour->price }}</li>
                <li>Type: {{ $flour->type }}</li>
                <li>Mineral Content: {{ $flour->mineral_content }}</li>
                <li>Expiry Date: {{ $flour->expiry_date }}</li>
            </ul>
        </div>
    </div>
    <div class="absolute top-0 right-0 mt-4 mr-4">
        <a href="/flours">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Retour</button>
        </a>
    @endsection
