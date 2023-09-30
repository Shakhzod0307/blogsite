<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>

  <link rel="stylesheet" href="{{asset('template/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('template/vendors/base/vendor.bundle.base.css')}}">

  <link rel="stylesheet" href="{{asset('template/css/style.css')}}">

  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="{{asset('template/images/favicon.png')}}" />

</head>
<body>


<div class="container-scroller">

<!-- partial:partials/_navbar.html -->
    @include('admin.navbar')


<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">

    @yield('content')


    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    @include('admin.footer')
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('template/vendors/base/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('template/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('template/js/jquery.cookie.js')}}" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('template/js/off-canvas.js')}}"></script>
  <script src="{{asset('template/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('template/js/template.js')}}"></script>
  <script src="{{asset('template/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('template/js/dashboard.js')}}"></script>
  <script src="{{asset('template/js/file-upload.js')}}"></script>
  <!-- End custom js for this page-->

    <script src="{{asset('scripts/jquery.min.js')}}"></script>
    <script src="{{asset('scripts/jquery.backtotop.js')}}"></script>
    <script src="{{asset('scripts/jquery.mobilemenu.js')}}"></script>
</body>

</html>
