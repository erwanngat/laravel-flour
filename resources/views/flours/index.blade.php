@extends('layout')

@section('main')
<h1>All the flours</h1>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>link</th>
    </tr>
    @foreach($flours as $flour)
        <tr>
            <td>{{ $flour['id'] }}</td>
            <td>{{ $flour['name'] }}</td>
            <td>{{ $flour['price'] }}</td>
            <td> <a href='flours/{{ $flour["id"] }}'>more informations</a></td>
        </tr>
    @endforeach
</table>
@endsection
