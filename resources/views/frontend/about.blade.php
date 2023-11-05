@extends('frontend.layout.main')
@push('title')
    <title>Chatterie - À propos</title>
@endpush
@section('main-section')

  <div class="container">
    <h1>{{ $about->heading }}</h1>
    <img src="{{ asset('storage/' . $about->image) }}" alt="Chat" class="img-fluid float-right" style="width: 300px;">
    <p>{{ $about->para_one }}</p>
    <p>{{ $about->para_two }}</p>
    <p>{{ $about->para_three }}</p>
    <p>{{ $about->para_four }}</p>
  </div>


@endsection
