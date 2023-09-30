@extends('dashboard.mainpage')
@section('gallery')
<link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <ul class="nospace group team">
        <div class="row row-cols-1 row-cols-md-4">
            @foreach($galleries as $g)
            <div id="card" class="col mb-4">
                <div class="card">
                    <img src="{{asset('admin/gallery/'.$g->gallery)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">publisher: {{$g->user}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </ul>
</main>
</div>
<script  src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script  src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script  src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<style scoped>
img{
    height: 250px;
    padding:10px;
}
img:hover{
    transform: scale(1.03);
    transition: 1s all ease;
    background-attachment: fixed;
    border-radius: 50%;
    background-color: antiquewhite;
}
</style>
@endsection


