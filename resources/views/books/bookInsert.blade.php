@extends('layouts.layout1')

@section('header')
    @include('partials.header')
@endsection

@section('main')
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        @error("title")
            <div class="error">{{ $message }}</div>
        @enderror
        <input name="title" type="text" placeholder="Titolo" value="{{ old('title') }}">
        <br>
        @error("description")
            <div class="error">{{ $message }}</div>
        @enderror
        <input name="description" type="text" placeholder="Descrizione" value="{{ old('description') }}">
        <br>
        @error("thumb")
            <div class="error">{{ $message }}</div>
        @enderror
        <input name="thumb" type="text" placeholder="Percorso immagine" value="{{ old('thumb') }}">
        <br>
        @error("price")
            <div class="error">{{ $message }}</div>
        @enderror
        <input name="price" type="text" placeholder="Prezzo" value="{{ old('price') }}">
        <br>
        @error("series")
            <div class="error">{{ $message }}</div>
        @enderror
        <input name="series" type="text" placeholder="Serie" value="{{ old('series') }}">
        <br>
        <input name="sale_date" type="date" placeholder="Data di uscita">
        <br>
        @error("type")
            <div class="error">{{ $message }}</div>
        @enderror
        <input name="type" type="text" placeholder="Tipo" value="{{ old('type') }}">
        <br>
        <input type="submit" value="Inserisci">
    </form>
@endsection

@section('footer')
    @include('partials.footer')
@endsection