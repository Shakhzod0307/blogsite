@extends('admin.dashboard')

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Users Table</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>
                            User
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Role
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Phone
                        </th>
                        <th>
                            Join Date
                        </th>
                    </tr>
                </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                  <td class="py-1">
                    <img src="{{asset('users/'.$user->image)}}" alt="image"/>
                  </td>
                  <td>
                    {{$user->name}}
                  </td>
                  <td>
                    {{$user->role}}
                  </td>
                  <td>
                    {{$user->email}}
                  </td>
                  <td>
                    +{{$user->mobile}}
                  </td>
                  <td>
                    {{$user->created_at}}
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
