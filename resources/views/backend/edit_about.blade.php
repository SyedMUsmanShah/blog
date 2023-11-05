@extends('backend.layout.main')
@section('main-backend-section')
    <div class="content-wrapper">
        <!-- Main content -->

        <div class="container mt-5">
            <form action="{{ route('updateAbout', ['id'=>$about->id]) }}" method="post" enctype="multipart/form-data">
                @csrf

                <h2 class="text-center bg-success p-2">Edit About Page</h2>

                <div class="form-group p-2">
                    <label for="image">Add About Image</label>
                    <input type="file" class="form-control p-2" name="image" id="image" placeholder="Add Image">
                </div>
                <div class="form-group">
                  <label for="heading">About Heading</label>
                  <input type="text" name="heading" id="heading" class="form-control" value="{{ $about->heading }}" placeholder="Enter Heading">
                </div>
                <div class="form-group">
                    <label for="para_one">Type Paragraph 1</label>
                    <textarea class="form-control" name="para_one" id="para_one" rows="3">{{ $about->para_one }}</textarea>
                </div>
                <div class="form-group">
                    <label for="para_two">Type Paragraph 2</label>
                    <textarea class="form-control" name="para_two" id="para_two" rows="3">{{ $about->para_two }}</textarea>
                </div>
                <div class="form-group">
                    <label for="para_three">Type Paragraph 3</label>
                    <textarea class="form-control" name="para_three" id="para_three" rows="3">{{ $about->para_three }}</textarea>
                </div>
                <div class="form-group">
                    <label for="para_four">Type Paragraph 4 (optional)</label>
                    <textarea class="form-control" name="para_four" id="para_four" rows="3">{{ $about->para_four }}</textarea>
                </div>

                <button type="submit" class="btn btn-secondary w-50 mx-auto d-block">Update</button>

            </form>
        </div>

    </div>
@endsection
