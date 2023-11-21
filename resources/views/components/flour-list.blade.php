<div class="max-w-screen-md mx-auto text-center">
    <div class="justify-between p-8">
        <h1 class="text-4xl text-center">List of your flours</h1>
    </div>
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
                    <x-tab.th>Details</x-tab.th>
                </tr>
            </thead>
            <tbody>
                @foreach (auth()->user()->flours as $flour)
                    <tr>
                        <x-tab.td>{{ $flour->id }}</x-tab.td>
                        <x-tab.td>{{ $flour->name }}</x-tab.td>
                        <x-tab.td>{{ $flour->price }}</x-tab.td>
                        <x-tab.td>{{ $flour->type }}</x-tab.td>
                        <x-tab.td>{{ $flour->mineral_content }}</x-tab.td>
                        <x-tab.td>{{ $flour->expiry_date }}</x-tab.td>
                        <x-tab.td><img src="/images/{{ $flour->image }}"></x-tab.td>
                        <x-tab.td> <a href='/flours/{{ $flour->id }}'
                                class="text-blue-500 hover:underline">more
                                informations</a></x-tab.td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
