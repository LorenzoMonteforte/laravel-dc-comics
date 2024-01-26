@extends('layouts.layout1')

@section('header')
    @include('partials.header')
@endsection

@section('main')
<main>
    <ul>
    @for ($i=0; $i<sizeof($books); $i++)
        <li class="marTop3rem">
            <div>{{ $books[$i]["title"] }}</div>
            <a href="{{ route('books.show', $books[$i]['id'] ) }}">Maggiori informazioni</a>
            <a href="{{ route('books.edit', $books[$i]['id'] ) }}">Modifica</a>
            <form action="{{ route('books.destroy', $books[$i]['id']) }}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Elimina">
            </form>
        </li>
    @endfor
    </ul>
</main>
@endsection

@section('footer')
    @include('partials.footer')
@endsection