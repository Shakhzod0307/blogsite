<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{asset('styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    body{
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #ddd;
        align-items: center;
        justify-content: center;
    }

    *{
        box-sizing: border-box;
    }

    .container{
        display: flex;
        width: 100%;
        height: 100%;
        padding: 20px 20px;
    }

    .box{
        flex: 30%;
        display: table;
        align-items: center;
        text-align: center;
        font-size: 20px;
        background-color: #0d1425;
        color: #fff;
        padding: 30px 30px;
        border-radius: 20px;
    }

    .box img{
        border-radius: 50%;
        border: 2px solid #fff;
        height: 250px;
        width: 250px;
    }

    .box ul{
        margin-top: 30px;
        font-size: 30px;
        text-align: center;
    }
    .box ul li{
        list-style: none;
        margin-top: 50px;
        font-weight: 100;
    }

    .box ul li i{
        cursor: pointer;
        margin: 10px;
        font-size: 40px;
    }

    .box ul li i:hover{
        opacity: 0.6;
    }

    .About{
        margin-left: 20px;
        flex: 50%;
        display: table;
        padding: 30px 30px;
        font-size: 20px;
        background-color: #fff;
        border-radius: 20px;
    }

    .About h1{
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 50px;
        font-weight: 500;
    }

    .About ul li{
        list-style: none;
    }

    .About ul{
        margin-top: 20px;
    }

    @media screen and (max-width: 1068px) {
        .container{
            display: table;
        }

        .box{
            width: 100%;
        }

        .About{
            width: 100%;
            margin: 0;
            margin-top: 20px;
        }

        .About h1{
            text-align: center;
        }
    }
</style>
<body>

<nav style="background-color: dimgray;" id="mainav" class="hoc clear">

    <ul class="clear">
        <li style="color:white" class="active"><a href="{{route('dashboard.index')}}">Home</a></li>
        <li style="color:white"><a href="{{route('dashboard.galleries')}}">Gallery</a></li>
        <li style="color:white"><a href="{{route('dashboard.blogs')}}">Blogs</a></li>
        <li style="color:white"><a href="{{route('dashboard.news')}}">News</a></li>
        <li style="color:white"><a href="{{route('dashboard.contact')}}">Contact</a></li>
        @if(Auth::user())
            @if(auth::user()->role === 'admin')
                <li style="color:white"><a class="drop" href="#">{{Auth::user()->name}}</a>
                    <ul>
                        <li>
                            <a href="{{route('admin.index')}}"> Admin Panel </a>
                        </li>
                        <li>
                            <a href="{{route('user.profile')}}"> Profile </a>
                        </li>
                        <li>
                            <a onclick="confirm('Are you sure to Logout?')" href="{{route('signout')}}"> Logout </a>
                        </li>
                    </ul>
                </li>
            @else
                <li style="color:white"><a class="drop" href="#">{{Auth::user()->name}}</a>
                    <ul>
                        <li>
                            <a href="{{route('user.profile')}}"> Profile </a>
                        </li>
                        <li>
                            <a onclick="confirm('Are you sure to Logout?')" href="{{route('signout')}}"> Logout </a>
                        </li>
                    </ul>
                </li>
            @endif
        @else
            <li><a href="{{route('login')}}">Login</a></li>
            <li><a href="{{route('register-user')}}">Register</a></li>
        @endif

    </ul>

</nav>
<form action="{{route('user.profile.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="container">
    <div class="box">
        <img src="{{asset('users/'.$user->image)}}" alt="">
        <p><input type="file" class="form-control" value="{{$user->image}}" name="image"></p>
        <ul>

            @if($user->role === 'admin')
                <li>Role: {{$user->role}}</li>
            @endif
            <li><input type="email" class="form-control" name="email" value=" {{$user->email}}"></li>
            <li><i style="font-size:24px" class="fa"></i>
                <i style="font-size:24px" class="fa"></i>
                <i style="font-size:24px" class="fa"></i></li>
        </ul>
    </div>
    <div class="About">
        <ul>
            <h1>about</h1>
        </ul>
        <ul>
            <h3>Name</h3>
            <li><input type="text" class="form-control"  name="name" value="{{$user->name}}"></li>

        </ul>
        <ul>
            <h3>last Name</h3>
            <li><input type="text" class="form-control" name="last_name" value=" {{$user->last_name}}"></li>
        </ul>
        <ul>
            <h3>Gender</h3>
            <li><input type="text" class="form-control" name="gender" value=" {{$user->gender}}"></li>
        </ul>
        <ul>
            <h3>Contact</h3>
            <li><input type="text" class="form-control" name="mobile" value=" {{$user->mobile}}"></li>
        </ul>
        <ul>
            <h3>Address</h3>
            <li><input type="text" class="form-control" name="address" value=" {{$user->address}}"></li>
        </ul>
        <ul>
            <h3>Bio</h3>
            <li><textarea rows="10" class="form-control" name="bio">{{$user->bio}}</textarea></li>
        </ul>
        <input type="submit" class="btn btn-primary" value="Update">
    </div>
</div>
</form>

<script src="{{asset('scripts/jquery.min.js')}}"></script>
<script src="{{asset('scripts/jquery.backtotop.js')}}"></script>
<script src="{{asset('scripts/jquery.mobilemenu.js')}}"></script>
</body>
</html>
