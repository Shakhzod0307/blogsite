@extends('admin.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 id="all_blogs"class="font-weight-bold mb-0 ">Blog Edit Page</h4>
            </div>

          </div>
        </div>
      </div>
      <div class="col-lg-12 grid-margin ">
          <form method="post" action="{{url('/admin/index/blog/update',$blog->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-image">
                <p>Previous image: {{$blog->images}}</p>
                <p style="padding-left:5px">
                    <input type="file" class="form-control" name="images" value="{{$blog->images}}">
                </p>
                </div>
                <div class="card-content">
                <h3>Title</h3>
                <input type="text" name="title" class="form-control" value="{{$blog->title}}" >
                <h3>Description</h3>
                <textarea rows="20" name="description" class="form-control"> {{$blog->description}}</textarea>
                <p class="my-3">
                    <a href="{{route('admin.blog.index')}}" class="card-text btn btn-secondary">Back</a>

                    <input type="submit" value="Submit" class="btn btn-success">
                </p>
                </div>
            </div>
        </form>

      </div>

<style scoped>
     body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .card {
      height: 100vh;
      display: flex;
      flex-direction: row;
      align-items: center;
      background-image: url('background.jpg');
      background-size: cover;
      background-position: center;
    }

    .card-image {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card-image img {
      width: 400px;
      height: 400px;
      border-radius: 5px;
    }

    .card-content {
      flex: 1;
      padding: 40px;
      border-radius: 5px;
      background-color: rgba(255, 255, 255, 0.8);
      text-align: center;
    }

    .card h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }

    .card p {
      font-size: 18px;
      margin-bottom: 40px;
    }

    .card button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
h3{
    text-align: start;
    align-items: baseline;
    margin-top: 7px;
}
</style>
@endsection
