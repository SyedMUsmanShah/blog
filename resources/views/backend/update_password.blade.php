@extends('backend.layout.main')
@section('main-backend-section')
    <div class="content-wrapper">
        <!-- Main content -->

        <div class="container mt-5">
            <form action="{{ route('updatePassword', ['id'=>$user->id])}}" method="post">
                @csrf

                <h2 class="text-center bg-success p-2">Update Password</h2>
                <div class="form-group">
                  <label for="password">Update Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="">
                </div>
                <button type="submit" class="btn btn-secondary w-50 mx-auto d-block">Update</button>

            </form>
        </div>

    </div>
@endsection
