@extends('admin.dashboard')

@section('content')
<link href="{{asset('styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
    <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 id="all_blogs" class="font-weight-bold mb-0 ">News Dashboard Page</h4>
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
                        @foreach($news as $new)
                            <div id="card" class="card">
                            <li class="three_quarter ">
                                <article>
                                <h6 class="heading"><a href="#">{{$new->title}}</a></h6>
                                <p>{{$new->description}}</p>
                                <ul class="nospace meta">
                                    <li><i class="fas fa-user rgtspace-5"></i> <a >Admin</a></li>
                                    <li><i class="fas fa-tags rgtspace-5"></i> <a>{{$new->category}}</a></li>
                                    <li>
                                    <time datetime="2045-04-05T08:15+00:00"><i class="far fa-calendar-alt rgtspace-5"></i>{{$new->updated_time}}</time>
                                    </li>
                                </ul>
                                </article>
                            </li>
                            <p class="my-3">
                            <a href="{{route('admin.news.view',$new->id)}}" class="card-text btn btn-success">View</a>
                            <a href="{{route('admin.news.edit',$new->id)}}" class="card-text btn btn-primary">Edit</a>
                            <a  onclick="return confirm('Are you sure to delete?')" href="{{route('admin.news.delete',$new->id)}}" class="card-text btn btn-danger">Delete</a>
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
      max-height: 16em;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 8; /* limit to two lines of text */
      -webkit-box-orient: vertical;

    }
    @media (max-width: 768px) {
        #card {
            width: 320px;
            height: 370px;
            margin-right: 30px;
            font-size: 14px;
            padding: 10px;
        }
    }
</style>
@endsection
