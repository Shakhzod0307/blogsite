@extends('admin.dashboard')

@section('content')
<link href="{{asset('styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
    <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 id="all_blogs"class="font-weight-bold mb-0 ">News View Page</h4>
            </div>

          </div>
        </div>
      </div>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-content">
                <ul class="nospace group latest">
                    <li class="three_quarter ">
                        <article>
                            <h6 class="heading"><a href="#">{{$news->title}}</a></h6>
                            <p>{{$news->description}}</p>
                            <ul class="nospace meta">
                                <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Admin</a></li>
                                <li><i class="fas fa-tags rgtspace-5"></i> <a href="#">{{$news->category}}</a></li>
                                <li>
                                 <time datetime="2045-04-05T08:15+00:00"><i class="far fa-calendar-alt rgtspace-5"></i>{{$news->updated_time}}</time>
                                </li>
                            </ul>
                            <footer>
                                <p class="my-3">
                                <a href="{{route('admin.news.index',$news->id)}}" class="card-text btn btn-secondary">Back</a>
                                <a href="{{route('admin.news.edit',$news->id)}}" class="card-text btn btn-primary">Edit</a>
                                <a  onclick="return confirm('Are you sure to delete?')" href="{{route('admin.news.delete',$news->id)}}" class="card-text btn btn-danger">Delete</a>
                                </p>
                            </footer>
                        </article>
                    </li>
                </ul>
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
      height: 75vh;
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
      padding: 20px;
      margin-left: 10%;
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

</style>
@endsection
