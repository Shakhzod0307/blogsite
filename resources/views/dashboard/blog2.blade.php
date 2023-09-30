
@extends('dashboard.mainpage')
@section('blog')

<main class="hoc container clear">
    <!-- main body -->
    <div class="sectiontitle">
      <h6 class="heading font-x3">Molestie nec dignissim ac hendrerit</h6>
      <p>Quis purus nulla facilisi aliquam non ligula nam ut nisi.</p>
    </div>
    <div class="posts">
        @foreach($blog as $b )
            <figure class="group">
                <div><a class="imgover" href="#"><img id="image" src="{{asset('admin/blog/images/'.$b->images)}}" alt=""></a></div>
                <figcaption>
                <h6 class="heading">{{$b->title}}</h6>
                <p>{{$b->description}}</p>
                <footer><a class="btn" href="#">View Details</a></footer>
                </figcaption>
            </figure>
        @endforeach
    </div>
    <!-- / main body -->
<div class="clear"></div>
</main>
<style scoped>
    #image{
        height: 264px;
        width: 470px;
    }
</style>
@endsection
