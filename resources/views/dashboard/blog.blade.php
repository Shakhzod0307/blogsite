@extends('dashboard.mainpage')
@section('blog')
<main class="hoc container clear">
    <div class="sectiontitle">
      <h6 class="heading font-x3">Molestie nec dignissim ac hendrerit</h6>
      <p>Quis purus nulla facilisi aliquam non ligula nam ut nisi.</p>
    </div>
    <div class="posts">
        @foreach($blog as $b )
            <figure class="group">
                <div><a class="imgover" href="#"><img id="images" src="{{asset('admin/blog/images/'.$b->images)}}" alt=""></a></div>
                <figcaption>
                <h6 class="heading">{{$b->title}}</h6>
                <p>{{$b->description}}</p>
                <footer><a class="btn" href="#">View Details</a></footer>
                </figcaption>
            </figure>
        @endforeach
    </div>
<div class="clear"></div>
  </main>
  <style scoped>
    #images{
        height: 264px;
        width: 470px;
    }
  </style>
@endsection
@section('vehicle')
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/04.jpg');">
<section class="hoc container clear">
<div class="sectiontitle">
  <h6 class="heading font-x3">Vehicula scelerisque erat gravida metus</h6>
  <p>Nunc hendrerit adipiscing nulla sed pharetra faucibus dui.</p>
</div>
<ul class="nospace group center">
  <li class="one_third first">
    <article><i class="btmspace-30 fa-6x fas fa-hands-helping"></i>
      <h6 class="heading">Mauris eu enim quisque</h6>
      <p class="btmspace-30">Dignissim neque et consectetuer dapibus magna elit vehicula libero vel interdum dolor neque in lacus pellentesque.</p>
      <footer><a class="btn inverse" href="#">View Details</a></footer>
    </article>
  </li>
  <li class="one_third">
    <article><i class="btmspace-30 fa-6x fas fa-gem"></i>
      <h6 class="heading">Lectus magna laoreet</h6>
      <p class="btmspace-30">Sit amet tincidunt vel cursus a dui suspendisse in ante cras pede sed et erat cum sociis natoque penatibus et magnis.</p>
      <footer><a class="btn inverse" href="#">View Details</a></footer>
    </article>
  </li>
  <li class="one_third">
    <article><i class="btmspace-30 fa-6x fas fa-volleyball-ball"></i>
      <h6 class="heading">Dis parturient montes</h6>
      <p class="btmspace-30">Nascetur ridiculus mus integer congue elit non semper laoreet lectus orci posuere nisl id tempor lacus felis ac.</p>
      <footer><a class="btn inverse" href="#">View Details</a></footer>
    </article>
  </li>
</ul>

</section>

</div>
<div class="wrapper row2">

<section class="hoc container clear">

<div class="sectiontitle">
  <h6 class="heading font-x3">Mauris rutrum elementum etiam sit amet</h6>
  <p>Turpis suspendisse semper sem sit amet ligula quisque.</p>
</div>
<ul class="nospace group team">
  <li class="one_quarter first">
    <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
      <figcaption><strong class="heading">A. Doe</strong> <em>Job Type Here</em></figcaption>
    </figure>
  </li>
  <li class="one_quarter">
    <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
      <figcaption><strong class="heading">B. Doe</strong> <em>Job Type Here</em></figcaption>
    </figure>
  </li>
  <li class="one_quarter">
    <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
      <figcaption><strong class="heading">C. Doe</strong> <em>Job Type Here</em></figcaption>
    </figure>
  </li>
  <li class="one_quarter">
    <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
      <figcaption><strong class="heading">D. Doe</strong> <em>Job Type Here</em></figcaption>
    </figure>
  </li>
</ul>

</section>
</div>

@endsection
@section('news')


<sect class="hoc container clear">

    <div class="sectiontitle">
      <h6 class="heading font-x3">Consectetuer dui sed libero suspendisse</h6>
      <p>Nec orci nec elit convallis porttitor maecenas tortor tellus.</p>
    </div>
    <ul class="nospace group latest">
    @foreach($news as $new)
      <li class="one_third ">
        <article>
          <h6 class="heading"><a href="#">{{$new->title}}</a></h6>
          <p id="desc">{{$new->description}}</p>
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

  </sect >
<style scoped>
    #desc{
      font-size: 14px;
      color: #666;
      max-height: 16em;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 7; /* limit to two lines of text */
      -webkit-box-orient: vertical;


    }
</style>
@endsection
@section('callback')
<div class="wrapper bgded" style="background-image:url('images/demo/backgrounds/03.jpg');">
    <!-- callback pages -->
<section id="callback" class="hoc clear">
<div>
  <h6 class="heading">Torquent per conubia</h6>
  <p class="btmspace-30">Sed non tortor class aptent taciti sociosqu ad litora nostra per inceptos himenaeos vivamus vitae.</p>
  <form method="post" action="#">
    <fieldset>
      <input type="text" value="" placeholder="Name">
      <input type="text" value="" placeholder="Email">
      <button type="submit" value="submit">Submit</button>
    </fieldset>
  </form>
</div>
</section>
</div>

@endsection
