@extends('admin.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 class="font-weight-bold mb-0">Dashboard Page</h4>
            </div>

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Blogs</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">Total:  {{$blogcount}}</h3>
                <a href="{{route('admin.blog.index')}}"> <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i></a>
              </div>
              <!-- <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ms-1"><small>(30 days)</small></span></p> -->
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Users</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">Total: {{$usercount}}</h3>
                <a href="{{route('admin.users.index')}}"> <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i></a>
              </div>
              <!-- <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ms-1"><small>(30 days)</small></span></p> -->
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">News</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">Total: {{$newscount}}</h3>
                  <a href="{{route('admin.news.index')}}"> <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i></a>
              </div>
              <!-- <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ms-1"><small>(30 days)</small></span></p> -->
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title text-md-center text-xl-left">Galleries</p>
              <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">Total: {{$gallerycount}}</h3>
                  <a href="{{route('admin.galleries.index')}}"> <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i></a>
              </div>
              <!-- <p class="mb-0 mt-2 text-success">23.00%<span class="text-black ms-1"><small>(30 days)</small></span></p> -->
            </div>
          </div>
        </div>
      </div>

@endsection
