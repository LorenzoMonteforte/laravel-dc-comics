@extends('layouts.layout1')

@section('header')
    @include('partials.header')
@endsection

@section('main')
    <ul>
        <li>Titolo: {{ $book["title"] }}</li>
        <br>
        <li>Descrizione: {{ $book["description"] }}</li>
        <br>
        <li>
            <img src="{{ $book['thumb'] }}" alt="">
        </li>
        <br>
        <li>Prezzo: {{ $book["price"] }}</li>
        <br>
        <li>Serie: {{ $book["series"] }}</li>
        <br>
        <li>Data di uscita: {{ $book["sale_date"] }}</li>
        <br>
        <li>Tipo: {{ $book["type"] }}</li>
    </ul>
@endsection

@section('footer')
    @include('partials.footer')
@endsection