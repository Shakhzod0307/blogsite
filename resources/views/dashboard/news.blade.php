@extends('dashboard.mainpage')

@section('news')
<sect class="hoc container clear">
    <div class="sectiontitle">
      <h6 class="heading font-x3">Consectetuer dui sed libero suspendisse</h6>
      <p>Nec orci nec elit convallis porttitor maecenas tortor tellus.</p>
    </div>
    <ul class="nospace group latest">
    @foreach($news as $new)
      <li class="three_quarter ">
        <article>
          <h6 class="heading"><a href="#">{{$new->title}}</a></h6>
          <p>{{$new->description}}</p>
          <ul class="nospace meta">
            <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Admin</a></li>
            <li><i class="fas fa-tags rgtspace-5"></i> <a href="#">{{$new->category}}</a></li>
            <li>
              <time datetime="2045-04-05T08:15+00:00"><i class="far fa-calendar-alt rgtspace-5"></i>{{$new->updated_time}}5</time>
            </li>
          </ul>
          <footer><a class="btn" href="#">View Details</a></footer>
        </article>
      </li>
    @endforeach
    </ul>
</sect>
<style scoped>
    .three_quarter{
        margin-left:15%;
    }
</style>
@endsection
