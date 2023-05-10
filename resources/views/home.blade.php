{{--  --}}
@extends('layouts.app')

@section('page-title', 'Home Page')

@section('content')
    <div class="row justify-content-center container-fluid">
        @foreach ($books as $book)
            <div class="card m-2" style="width: calc(100% /7);">
                <img src="{{ $book['thumb'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <span class="card-text">{{ $book['title'] }}</span>
                </div>
            </div>
        @endforeach
        <div class="ms_btn text-center ">
            <button type="button" class="btn btn-primary">LOAD MORE</button>
        </div>

        <div class="cta container-fluid mt-2 p-4 " style="background-color: #0082F9">

            <div class="flex-row float-end  ps-3">
                <img style="width: 55px;" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                <span style="color:white">DC POWER VISA</span>
            </div>

            <div class="flex-row float-end  ps-3">
                <img style="width: 30px;" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                    alt="">
                <span style="color:white">COMIC SHOP LOCATOR</span>
            </div>

            <div class="flex-row float-end ps-3">
                <img style="width: 40px;" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                    alt="">
                <span style="color:white">SUBSCRIPTIONS</span>
            </div>

            <div class="flex-row float-end  ps-3">
                <img style="width: 40px;" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                    alt="">
                <span style="color:white">DC MERCHANDISE</span>
            </div>

            <div class="flex-row float-end pe-4">
                <img style="width: 40px;" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                    alt="">
                <span style="color:white">DIGITAL COMICS</span>
            </div>
        </div>

    </div>
@endsection
