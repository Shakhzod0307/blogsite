@extends('admin.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 id="all_blogs" class="font-weight-bold mb-0 ">Blog View Page</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 grid-margin stretch-card">
           <div class="table-responsive">
               <div  class="card">
                   <div  id="card" class="card-image">
                        <img src="{{asset('admin/blog/images/'.$blogs->images)}}" alt="Image">
                   </div>
                   <div class="card-content">
                        <h1>{{$blogs->title}}</h1>
                        <p>{{$blogs->description}}</p>
                        <p class="my-3">
                            <a href="{{route('admin.blog.index',$blogs->id)}}" class="card-text btn btn-secondary">Back</a>
                            <a href="{{route('admin.blog.edit',$blogs->id)}}" class="card-text btn btn-primary">Edit</a>
                            <a  onclick="return confirm('Are you sure to delete?')" href="{{route('admin.blog.delete',$blogs->id)}}" class="card-text btn btn-danger">Delete</a>
                        </p>
                   </div>
               </div>
           </div>
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
     @media (max-width: 768px) {
         #card {
             width: 400px;
             height: 500px;
             margin: 10px;
             font-size: 14px;
             padding: 10px;
         }
     }
</style>
@endsection
