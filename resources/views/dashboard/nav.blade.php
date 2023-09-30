
<nav id="mainav" class="hoc clear">
    <ul class="clear">
        <li class="active"><a href="{{route('dashboard.index')}}">Home</a></li>
        <li><a href="{{route('dashboard.galleries')}}">Gallery</a></li>
        <li><a href="{{route('dashboard.blogs')}}">Blogs</a></li>
        <li><a href="{{route('dashboard.news')}}">News</a></li>
        <li><a href="{{route('dashboard.contact')}}">Contact</a></li>
        @if(Auth::user())
            @if(auth::user()->role === 'admin')
            <li><a class="drop" href="#">{{Auth::user()->name}}</a>
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
                <li><a class="drop" href="#">{{Auth::user()->name}}</a>
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
