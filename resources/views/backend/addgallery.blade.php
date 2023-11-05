@extends('backend.layout.main')
@section('main-backend-section')
    <div class="content-wrapper">
        <!-- Main content -->

        <div class="container mt-5">
            <form action="{{ route('addgallery') }}" method="post" enctype="multipart/form-data">
                @csrf

                <h2 class="text-center bg-success p-2">Add New Cat Image</h2>

                <div class="form-group p-2">
                    <label for="image">Add New Cat Image</label>
                    <input type="file" class="form-control p-2" name="image" id="image" placeholder="Add Image">
                </div>

                <button type="submit" class="btn btn-secondary w-50 mx-auto d-block">Upload</button>

            </form>
        </div>

    </div>
@endsection
