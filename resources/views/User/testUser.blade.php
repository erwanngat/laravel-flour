@extends('layout')

@section('main')
    <div class="max-w-screen-md mx-auto text-center">
        <div class="justify-between p-8">
            <h1 class="text-4xl text-center">Your flours</h1>
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
                        <th class="px-4 py-2 border border-gray-800">Image</th>
                        <th class="px-4 py-2 border border-gray-800">Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userFlours as $userFlour)
                        <tr>
                            <td class="px-4 py-2 border border-gray-800">{{ $userFlour->id }}</td>
                            <td class="px-4 py-2 border border-gray-800">{{ $userFlour->name }}</td>
                            <td class="px-4 py-2 border border-gray-800">{{ $userFlour->price }}</td>
                            <td class="px-4 py-2 border border-gray-800">{{ $userFlour->type }}</td>
                            <td class="px-4 py-2 border border-gray-800">{{ $userFlour->mineral_content }}</td>
                            <td class="px-4 py-2 border border-gray-800">{{ $userFlour->expiry_date }}</td>
                            <td class="px-4 py-2 border border-gray-800"><img src="/images/{{ $userFlour->image }}"></td>
                            <td class="px-4 py-2 border border-gray-800"> <a href='/flours/{{ $userFlour->id }}'
                                    class="text-blue-500 hover:underline">more
                                    informations</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="absolute top-0 left-4 mt-4 mr-4">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Logout</button>
            </form>
        @endsection
