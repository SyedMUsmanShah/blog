@extends('backend.layout.main')
@section('main-backend-section')
    <div class="content-wrapper">

        <div class="add text-center p-5">
            <a href="{{ route('editAbout') }}" class="btn btn-primary">Edit About Page</a>
        </div>

        <div class="row m-0 p-0">
            <div class="card col-8 p-2">
                <div class="data">
                    <h1>{{ $about->heading }}</h1>
                    <p>{{ $about->para_one }}</p>
                    <p>{{ $about->para_two }}</p>
                    <p>{{ $about->para_three }}</p>
                    <p>{{ $about->para_four }}</p>
                </div>
            </div>
            <div class="col-4">
                <img src="{{ asset('storage/' . $about->image) }}" alt="Chat" class="img-fluid float-right" style="width: 300px;">
            </div>
        </div>

    </div>
@endsection
