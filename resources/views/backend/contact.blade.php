@extends('backend.layout.main')
@section('main-backend-section')
    <div class="content-wrapper">
        <div class="p-5">
            <a href="{{ route('editContact') }}" class="btn btn-primary">Edit Your Contact Information</a>
        </div>

        <div class="container p-5">
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-default">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->message }}</td>
                            <td><a href="{{ route('delMessages', ['id' => $message->id]) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
