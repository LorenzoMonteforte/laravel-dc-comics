@extends('layouts.layout1')

@section('header')
    @include('partials.header')
@endsection

@section('main')
    <form action="{{ route('books.update', $book['id']) }}" method="POST">
        @csrf
        @method("PUT")
        <input name="title" type="text" value="{{ $book["title"] }}">
        <input name="description" type="text" value="{{ $book["description"] }}">
        <input name="thumb" type="text" value="{{ $book["thumb"] }}">
        <input name="price" type="text" value="{{ $book["price"] }}">
        <input name="series" type="text" value="{{ $book["series"] }}">
        <input name="sale_date" type="date" value="{{ $book["sale_date"] }}">
        <input name="type" type="text" value="{{ $book["type"] }}">
        <input type="submit" value="Inserisci">
    </form>
@endsection

@section('footer')
    @include('partials.footer')
@endsection