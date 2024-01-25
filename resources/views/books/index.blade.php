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
            <a href="{{ route('books.show', $books[$i]['id'] )}}">Maggiori informazioni</a>
        </li>
    @endfor
    </ul>
</main>
@endsection

@section('footer')
    @include('partials.footer')
@endsection