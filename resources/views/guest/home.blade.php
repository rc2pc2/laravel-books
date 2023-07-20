@extends('layouts.app')

@section('title', 'Homepage')

@section('main-content')
    <h1>
        Homepage
    </h1>

    <div>

        @foreach ($books as $book)
            {{-- @dump($book) --}}
            <article>
                <h3>
                    {{ $book->title }}
                </h3>
                <p>
                    {{ $book->id }} - {{ $book->author }}
                </p>
            </article>
        @endforeach

    </div>
@endsection