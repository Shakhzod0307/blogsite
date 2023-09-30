@extends('admin.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 id="all_blogs"class="font-weight-bold mb-0 ">All Blogs Dashboard Page</h4>
            </div>

          </div>
        </div>
      </div>
      <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
            @if(session('success'))
              <div class="alert alert-info">
                    {{ session('success') }}
              </div>
            @endif
              <div class="table-responsive">
                <div class="card-container">
                    @foreach($blogs as $blog)
                    <div id="card" class="card">
                    <img src="{{asset('admin/blog/images/'.$blog->images)}}" alt="Image 1">
                    <h3>{{$blog->title}}</h3>
                    <p>{{$blog->description}}</p>
                    <p class="my-3">
                        <a href="{{route('admin.blog.view',$blog->id)}}" class="card-text btn btn-success">View</a>
                        <a href="{{route('admin.blog.edit',$blog->id)}}" class="card-text btn btn-primary">Edit</a>
                        <a  onclick="return confirm('Are you sure to delete?')" href="{{route('admin.blog.delete',$blog->id)}}" class="card-text btn btn-danger">Delete</a>
                    </p>
                    </div>
                    @endforeach
                </div>
              </div>
            </div>
          </div>
      </div>
<style scoped>

.card-container {
      display: flex;
      flex-wrap: wrap;
    }

    .card {
      width: 28%;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      margin-left: 20px;
    }

    .card img {
      width: 100%;
      height: auto;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    .card h3 {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 14px;
      color: #666;
      max-height: 3.6em;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 2; /* limit to two lines of text */
      -webkit-box-orient: vertical;
    }

    @media (max-width: 768px) {
        #card {
            width: 280px;
            height: 450px;
            margin: 10px;
            font-size: 14px;
            padding: 10px;
        }
    }
</style>
@endsection
