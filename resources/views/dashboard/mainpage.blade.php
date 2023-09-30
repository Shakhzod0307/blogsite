<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="{{asset('styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">

    </head>
<body class="antialiased">

<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/landing.jpg');">

    <div class="wrapper row0">
        <header id="header" class="hoc clear center">
        <h1 id="logo"><i class="fas fa-truck-loading"></i> <a href="{{route('dashboard.index')}}">Shiphile</a></h1>
        </header>
    </div>
    <div class="wrapper row1">
    <!-- navbar -->
    @include('dashboard.nav')
    </div>
    <div id="pageintro" class="hoc clear">
    <!-- pageintro -->
    <article>
      <h3 class="heading">Pellentesque sodales quam</h3>
      <p>In nunc nam et ante donec facilisis mattis quam cum sociis natoque penatibus et magnis dis parturient montes.</p>
      <footer><a class="btn" href="#">Nascetur ridiculus mus</a></footer>
    </article>
    </div>
</div>
<!-- End Top Background Image Wrapper -->
<div class="wrapper row3">
   @yield('blog')
</div>
    @yield('vehicle')
<div class="wrapper row3">
    @yield('news')
</div>
    @yield('callback')
    @yield('gallery')
    @yield('contact')
    @include('dashboard.footer')
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.backtotop.js"></script>
<script src="scripts/jquery.mobilemenu.js"></script>
</body>
</html>
