@extends('backend.layout.main')
@section('main-backend-section')
<div class="content-wrapper">
  <!-- Main content -->
  <div class="col-12 row m-0 p-0">
          <div class="card p-2 m-2 col-sm-6 col-md-3">
            <a class="card-block stretched-link text-decoration-none text-dark" href="{{ route('gallery') }}">
              <h2 class="card-title">Edit Gallery</h2>
              <div class="card-body">

                <h1 class="mt-4"><span class="mr-3"></span><span><i class="fa-solid fa-images"></i></span></h1>
              </div>
            </a>
          </div>
          <div class="card p-2 m-2 col-sm-6 col-md-3">
            <a class="card-block stretched-link text-decoration-none text-dark" href="{{ route('availableCats') }}">
              <h2 class="card-title">Edit Available cats</h2>
              <div class="card-body">

                <h1 class="mt-4"><span class="mr-3"></span><span><i class="fa-solid fa-cat"></i></span></h1>
              </div>
            </a>
          </div>
          <div class="card p-2 m-2 col-sm-6 col-md-3">
            <a class="card-block stretched-link text-decoration-none text-dark" href="{{ route('viewMessages') }}">
              <h2 class="card-title">Contact</h2>
              <div class="card-body">

                <h1 class="mt-4"><span class="mr-3"></span><span><i class="fa-solid fa-phone"></i></i></span></h1>
              </div>
            </a>
          </div>
          <div class="card p-2 m-2 col-sm-6 col-md-3">
            <a class="card-block stretched-link text-decoration-none text-dark" href="{{ route('admin.about') }}">
              <h2 class="card-title">Edit About Page</h2>
              <div class="card-body">

                <h1 class="mt-4"><span class="mr-3"></span><span><i class="fa-solid fa-address-card"></i></span></h1>
              </div>
            </a>
          </div>
  </div>
</div>
<!-- /.content -->
</div>

@endsection
