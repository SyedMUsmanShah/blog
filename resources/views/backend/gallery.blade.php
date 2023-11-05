@extends('backend.layout.main')
@section('main-backend-section')
    <div class="content-wrapper">

        <div class="add text-center p-5">
            <a href="{{ route('addgallery') }}" class="btn btn-primary">Add New Cat</a>
        </div>

        <div class="row m-0 p-0">
            @foreach ($gallery as $item)
            <div class="card col-3 m-2">
                <div class="card-body">
                    <img class="w-100" src="{{ asset('storage/' . $item->image) }}" alt="Cat" height="200px">
                </div>
                <div class="card-footer bordered">
                    <a href="{{ route('delgallery', ['id'=>$item->id]) }}" class="btn btn-danger w-100">Delete</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection
