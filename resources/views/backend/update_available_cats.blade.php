@extends('backend.layout.main')
@section('main-backend-section')
    <div class="content-wrapper">
        <!-- Main content -->

        <div class="container mt-5">
            <form action="{{ route('editCat', ['id'=>$updateCat->id]) }}" method="post" enctype="multipart/form-data">
                @csrf

                <h2 class="text-center bg-success p-2">Edit Available Cat</h2>

                <div class="form-group p-2">
                    <label for="image">Add Cat Image</label>
                    <input type="file" class="form-control p-2" name="image" id="image" placeholder="Add Image">
                </div>
                <div class="form-group">
                  <label for="name">Cat Name</label>
                  <input type="text" name="name" id="name" value="{{ $updateCat->name }}" class="form-control" placeholder="Enter Cat Name" aria-describedby="helpId">
                  <small id="helpId" class="text-danger"></small>
                </div>
                <div class="form-group">
                  <label for="age">Cat Age</label>
                  <input type="number" name="age" id="age" value="{{ $updateCat->age }}" class="form-control" placeholder="Enter Cat Age" aria-describedby="helpId">
                  <small id="helpId" class="text-danger"></small>
                </div>
                <div class="form-group">
                  <label for="weight">Cat Weight in Kgs</label>
                  <input type="number" name="weight" id="weight" value="{{ $updateCat->weight }}" class="form-control" placeholder="Enter Cat Weight" aria-describedby="helpId">
                  <small id="helpId" class="text-danger"></small>
                </div>
                <div class="form-group">
                  <label for="price">Cat Price ($)</label>
                  <input type="number" name="price" id="price" value="{{ $updateCat->price }}" class="form-control" placeholder="Enter Cat Price" aria-describedby="helpId">
                  <small id="helpId" class="text-danger"></small>
                </div>

                <button type="submit" class="btn btn-secondary w-50 mx-auto d-block">Submit</button>

            </form>
        </div>

    </div>
@endsection
