@extends('layout')

@section('main')
<h1>Make a flour</h1>
<form action="/flours" method="post">
    @csrf
    <p>name : <input type="text" name="name" /></p>
    <p>price : <input type="number" name="price" /></p>

    <input type="submit" value="submit">
</form>
@endsection