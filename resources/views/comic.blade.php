@extends('layouts.app')

@section('page-title', 'Lista fumetti')


@section('content')

    <div class="text-center text-bg-primary ">
        <h3>This is our comic books selection</h3>
        <h4>Buy now your favourite!</h4>
    </div>

    <div class="ms_books ms_comics row justify-content-center container-fluid">
        @foreach ($books as $book)
            <div class="card m-2 comics-wrapper">
                <img class="comics-img" src="{{ $book['thumb'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="card-text title">{{ $book['title'] }}</span>
                    <span class="card-text title">-{{ $book['type'] }}-</span>
                    <h6 class="card-text title">{{ $book['price'] }}</h6>
                    <button class="btn btn-sm btn-outline-primary">Buy Now!</button>
                </div>
            </div>
        @endforeach
    </div>
@endsection
