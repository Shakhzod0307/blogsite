@extends('admin.dashboard')

@section('content')
<link href="{{asset('styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
    <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 id="all_blogs" class="font-weight-bold mb-0 ">Galleries Dashboard Page</h4>
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
                        @foreach($galleries as $g)
                            <div id="card" class="card">
                            <img style="height: 350px;" src="{{asset('admin/gallery/'.$g->gallery)}}" alt="Image 1">
                            <ul class="nospace meta">
                                <li><i class="fas fa-user rgtspace-5"></i> <a >{{$g->user}}</a></li>
                                <li><time datetime="2045-04-05T08:15+00:00"><i class="far fa-calendar-alt rgtspace-5"></i>{{$g->updated_at}}</time></li>
                            </ul>
                            <p class="my-3">
                                <a  onclick="return confirm('Are you sure to delete?')" href="{{route('admin.galleries.delete',$g->id)}}" class="card-text btn btn-danger">Delete</a>
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
            width: 300px;
            height: 450px;
            margin: 10px;
            font-size: 14px;
            padding: 10px;
        }
    }
</style>
@endsection
