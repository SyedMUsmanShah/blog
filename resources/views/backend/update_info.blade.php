@extends('backend.layout.main')
@section('main-backend-section')
    <div class="content-wrapper">
        <!-- Main content -->

        <div class="container mt-5">
            <form action="{{ route('updateContact', ['id'=>$contact->id])}}" method="post">
                @csrf

                <h2 class="text-center bg-success p-2">Edit Contact Page Info</h2>
                <div class="form-group">
                  <label for="number">Contact Number</label>
                  <input type="text" name="number" id="number" class="form-control" value="{{ $contact->phone }}" placeholder="Enter Heading">
                </div>
                <div class="form-group">
                  <label for="email">Contact Email </label>
                  <input type="email" name="email" id="email" class="form-control" value="{{ $contact->email }}" placeholder="Enter Your Email Address">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" id="address" class="form-control" value="{{ $contact->address }}" placeholder="Enter Your  Address">
                </div>
                <button type="submit" class="btn btn-secondary w-50 mx-auto d-block">Update</button>

            </form>
        </div>

    </div>
@endsection
