@extends('backend.layout.main')
@section('main-backend-section')
    <div class="content-wrapper">

        <div class="add text-center p-5">
            <a href="{{ route('addCats') }}" class="btn btn-primary">Add New Cat</a>
        </div>

        <div class="row m-0 p-0">
            @foreach ($availableCats as $cat)
            <div class="card col-3 m-2">
                <div class="card-body">
                    <img class="w-100" src="{{ asset('storage/' . $cat->image) }}" alt="Cat" height="200px">
                    <div class="data">
                        <span class="font-weight-bold">Name : </span><span>{{ $cat->name }}</span><br>
                        <span class="font-weight-bold">Age : </span><span>{{ $cat->age }}</span><span>Years</span><br>
                        <span class="font-weight-bold">Weight : </span><span>{{ $cat->weight }}</span><span>Kg</span><br>
                        <span class="font-weight-bold">Price : </span><span>{{ $cat->price }}</span><span>$</span>

                    </div>
                </div>
                <div class="card-footer bordered text-center">
                    <a href="{{ route('updateCat', ['id'=>$cat->id]) }}" class="btn btn-success mr-2">Edit</a><a href="{{ route('deleteCat', ['id'=>$cat->id]) }}" class="btn btn-danger">Delete</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection
