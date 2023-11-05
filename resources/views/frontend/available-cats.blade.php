@extends('frontend.layout.main')
@push('title')
    <title>Chatterie - Chats disponibles</title>
@endpush
@section('main-section')
    <div class="container1">

        <div class="row m-0 p-0">
        @foreach ($availableCats as $availableCat)
            <div class="flip-card ">
                <div class="flip-card-inner">
                    <div class="flip-card-front fill1">
                        <img src=" {{ asset('storage/' . $availableCat->image) }} ">
                    </div>
                    <div class="flip-card-back">
                        <p>Nom: {{ $availableCat->name }}</p>
                        <p>Age: {{ $availableCat->age }} an</p>
                        <p>Poids: {{ $availableCat->weight }} kg</p>
                        <p>Prix: {{ $availableCat->price }}$</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

        <div class="cart">
            <div class="cart2">
            </div>
        </div>

    </div>
@endsection
