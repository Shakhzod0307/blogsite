@extends('admin.dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h4 id="all_blogs"class="font-weight-bold mb-0 ">Blog Create Page</h4>
            </div>

          </div>
        </div>
      </div>
      <div class="col-lg-12 grid-margin stretch-card">
      <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form action="{{route('admin.blog.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Title">
                    </div>
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="images" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                      <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
      </div>

@endsection
