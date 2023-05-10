{{--  --}}
@extends('layouts.app')

@section('page-title', 'Home Page')

@section('content')
    <h1>Benvenuto nel tuo dc comics ---main</h1>

    <div class="row">
        @foreach ($books as $book)
            <div class="card" style="width: 18rem;">
                <img src="{{ $book['thumb'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="card-text">{{ $book['title'] }}</span>
                </div>
            </div>
        @endforeach
    </div>
@endsection
