@extends('layout')

@section('main')
<h1>Just one flours</h1>
<ul>
    <li>{{ $flour['id'] }}</li>
    <li>{{ $flour['name'] }}</li>
    <li>{{ $flour['price'] }}</li>
</ul>

<a href='/flours'>
<button>Retour</button>
</a>
@endsection