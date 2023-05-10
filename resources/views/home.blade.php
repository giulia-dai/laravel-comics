{{--  --}}
@extends('layouts.app')

@section('page-title', 'Home Page')

@section('content')
    <h1>Benvenuto nel tuo dc comics ---main</h1>

    <div class="row justify-content-center container">
        @foreach ($books as $book)
            <div class="card m-2" style="width: calc(100% /7);">
                <img src="{{ $book['thumb'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="card-text">{{ $book['title'] }}</span>
                </div>
            </div>
        @endforeach
    </div>
@endsection
