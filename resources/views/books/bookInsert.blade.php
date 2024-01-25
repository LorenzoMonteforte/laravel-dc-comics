@extends('layouts.layout1')

@section('header')
    @include('partials.header')
@endsection

@section('main')
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input name="title" type="text" placeholder="Titolo">
        <input name="description" type="text" placeholder="Descrizione">
        <input name="thumb" type="text" placeholder="Percorso immagine">
        <input name="price" type="text" placeholder="Prezzo">
        <input name="series" type="text" placeholder="Serie">
        <input name="sale_date" type="date" placeholder="Data di uscita">
        <input name="type" type="text" placeholder="Tipo">
        <input type="submit" value="Inserisci">
    </form>
@endsection

@section('footer')
    @include('partials.footer')
@endsection