@extends('layouts.app')
@section('style')
<style>
  .corpo{
    height: 100%;
    width: 100%;
    background:linear-gradient(rgba(255,255,255,1),transparent 80%), url('media/sky.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
  }
</style>
@endsection

@section('content')

 <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="cloud"></div>
        <div class="col-12 text-left">
            <h3 class="font-weight-light">PORTIAMO IL TUO RELAX </h3>
            <h3>SU UN<span class="h1 display-4 font-weight-bold text10"> ALTRO LIVELLO</span></h3>
          </div>
      </div>
    </div>
  </header>

  <div class="corpo mb-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 my-5">
        <div class=" mx-auto my-5">
         <h1 class="text-dark text-center pt-5">Il tuo resort al Settimo Cielo...</h1>
         <hr class="bar">
        </div>
      </div>
      
        <div class="col-4 bg-blue bg-blue:hover mb-5">
          
                      <h3 class=" text-center text60">Relax</h3>
                      <hr class="bar">
                      <div class="text-center">
                      <p class="  text-prag">blablablablablablablablabla </p>
                      <p class="  text-prag">  blablablablablablablablaa </p>
                    </div>
        </div>
        <div class="col-4 bg-blue bg-blue:hover mb-5">
          
                      <h3 class=" text-center text60">Paesaggio</h3>
                      <hr class="bar">
                      <div class="text-center">
                      <p class="  text-prag">blablablablablablablablabla </p>
                      <p class="  text-prag">  blablablablablablablablaa </p>
                    </div>
        </div>
        <div class="col-4 bg-blue bg-blue:hover mb-5">
          
                      <h3 class=" text-center text60">Divertimento</h3>
                      <hr class="bar">
                      <div class="text-center">
                      <p class="  text-prag">blablablablablablablablabla </p>
                      <p class="  text-prag">  blablablablablablablablaa </p>
                    </div>
        </div>
    
    </div>
  </div>
  
<div class="container-fluid my-5 py-5 second" data-aos="fade-right" data-aos-delay="500">
  <div class="row">
    <div class="col-12 mt-5" >
      <h2 class="text-left text10">TheSkyLounge</h2>
      <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
      
      Asperiores animi assumenda tempore unde eligendi mollitia nostrum.</p>
      <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
      
      Asperiores animi assumenda tempore unde eligendi mollitia nostrum.</p>
    
    </div>
  </div>
</div>

<div class="container-fluid secondbis" >
  <div class="row">
    <div class="col-12 mt-5" >
      <h2 class="text-right py-3 text10">TheSkyLounge</h2>
      <p class="lead text-right text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
      
      Asperiores animi assumenda tempore unde eligendi mollitia nostrum.</p>
      <p class="lead text-right pb-5 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
      
      Asperiores animi assumenda tempore unde eligendi mollitia nostrum.</p>
      
    </div>
  </div>
</div>

<div class="container-fluid">
  <h2 class="text-center">Immagini</h2>
  <hr class="bar">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" {{-- data-interval="false" --}}>
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('media/skylounge.jpeg')">
        <div class="carousel-caption d-none d-md-block slide__overlay slide__overlay:hover">
          <h3 class="display-4 text-left mt-5 ml-4 ">First Slide</h3>
          <p class="lead text-left mt-5 ml-4 ">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('media/bar.jpeg')">
        <div class="carousel-caption d-none d-md-block slide__overlay slide__overlay:hover">
          <h3 class="display-4 text-left mt-5 ml-4">Second Slide</h3>
          <p class="lead text-left mt-5 ml-4">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('media/swing.jpeg')">
        <div class="carousel-caption d-none d-md-block slide__overlay slide__overlay:hover">
          <h3 class="display-4 text-left mt-5 ml-4">Third Slide</h3>
          <p class="lead text-left mt-5 ml-4">This is a description for the third slide.</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('media/dream.jpeg')">
        <div class="carousel-caption d-none d-md-block slide__overlay slide__overlay:hover ">
          <h3 class="display-4 text-left mt-5 ml-4">Fourth Slide</h3>
          <p class="lead text-left mt-5 ml-4">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="" aria-hidden="true"><i class="fas fa-arrow-alt-circle-right fa-2x"></i></span>
          
        </a>
  </div>
</div>

<div class="container-fluid py-5 my-5">
  <div class="row">
    <div class="col-12">
      <h2 class="text-center text-white">Dove Siamo</h2>
      <hr class="bar">
      <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Heaven%20Street,%20Los%20Angeles,%20Ireland+(Sky%20Lounge)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="http://www.gps.ie/"></a></div>
    </div>
  </div>
</div>

</div>


@endsection