<div class="max-w-screen-md mx-auto text-center">
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
                <th class="px-4 py-2 border border-gray-800">Owner</th>
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
                    <td class="px-4 py-2 border border-gray-800"><img src="/images/{{ $flour->image }}"></td>
                    <td class="px-4 py-2 border border-gray-800">{{ $flour->owner->name }}</td>
                    <td class="px-4 py-2 border border-gray-800"> <a href='/flours/{{ $flour->id }}'
                            class="text-blue-500 hover:underline">more
                            informations</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
