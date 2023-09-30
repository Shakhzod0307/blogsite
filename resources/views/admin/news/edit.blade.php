@extends('admin.dashboard')

@section('content')
<link href="{{asset('styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
    <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 id="all_blogs"class="font-weight-bold mb-0 ">News Edit Page</h4>
            </div>

          </div>
        </div>
      </div>
      <div class="col-lg-12 grid-margin ">
          <form method="post" action="{{url('/admin/index/news/update',$news->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-content">
                    <h3>Title</h3>
                    <input type="text"  name="title" class="form-control" value="{{$news->title}}" >
                    <h3>Category</h3>
                    <input type="text"    name="category" class="form-control" value="{{$news->category}}" >
                    <h3>Created time</h3>
                    <input type="text"    name="updated_time" class="form-control" value="{{$news->updated_time}}" >
                    <h3>Description</h3>
                    <textarea rows="10" style="font-size: 20px;" name="description" class="form-control"> {{$news->description}}</textarea>
                    <p class="my-3">
                    <a href="{{route('admin.news.index')}}" class="card-text btn btn-secondary">Back</a>
                    <input type="submit" value="Submit" class="btn btn-success">
                    </p>
                </div>
            </div>
          </form>
      </div>

<style scoped>
    input[type="text"] {
        font-size: 20px;
    }
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
    margin-top: 15px;

}
</style>
@endsection
