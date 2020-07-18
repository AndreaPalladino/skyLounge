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
            <h3 class="font-weight-light">PORTIAMO IL TUO RIPOSO </h3>
            <h1>SU UN<span class="h1 display-4 font-weight-bold"> ALTRO LIVELLO</span></h1>
          </div>
      </div>
    </div>
  </header>

  <div class="corpo">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 my-5">
        <div class=" mx-auto my-5">
         <h1 class="text-dark text-center pt-5">Il tuo resort al Settimo Cielo...</h1>
         <hr class="bar">
        </div>
      </div>
      
        <div class="col-4 bg-blue bg-blue:hover mb-5">
          
                      <h3 class=" text-center text60">Paesaggio</h3>
                      <hr class="bar">
                      <div class="text-center">
                      <p class=" text30 text-prag">Godi dei panorami più belli </p>
                      <p class=" text30 text-prag">  visibili ovunque tu sia. </p>
                    </div>
        </div>
        <div class="col-4 bg-blue bg-blue:hover mb-5">
          
                      <h3 class=" text-center text60">Paesaggio</h3>
                      <hr class="bar">
                      <div class="text-center">
                      <p class=" text30 text-prag">Godi dei panorami più belli </p>
                      <p class=" text30 text-prag">  visibili ovunque tu sia. </p>
                    </div>
        </div>
        <div class="col-4 bg-blue bg-blue:hover mb-5">
          
                      <h3 class=" text-center text60">Paesaggio</h3>
                      <hr class="bar">
                      <div class="text-center">
                      <p class=" text30 text-prag">Godi dei panorami più belli </p>
                      <p class=" text30 text-prag">  visibili ovunque tu sia. </p>
                    </div>
        </div>
    
    </div>
  </div>
  
<div class="container-fluid my-5 py-5 second" data-aos="fade-right" data-aos-delay="500">
  <div class="row">
    <div class="col-12 mt-5" >
      <h2 class="text-left">TheSkyLounge</h2>
      <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
      
      Asperiores animi assumenda tempore unde eligendi mollitia nostrum.</p>
      <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
      
      Asperiores animi assumenda tempore unde eligendi mollitia nostrum.</p>
    
    </div>
  </div>
</div>

<div class="container-fluid secondbis" >
  <div class="row">
    <div class="col-12 mt-5" >
      <h2 class="text-right py-3">TheSkyLounge</h2>
      <p class="lead text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> 
      
      Asperiores animi assumenda tempore unde eligendi mollitia nostrum.</p>
      <p class="lead text-right pb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
      
      Asperiores animi assumenda tempore unde eligendi mollitia nostrum.</p>
      
    </div>
  </div>
</div>


<div class="container-fluid py-5 my-5">
  <div class="row">
    <div class="col-12">
      <h2 class="text-center">Dove Siamo</h2>
      <hr class="bar">
      <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Heavenly%20Street,%20Los%20Angeles+(The%20Sky%20Lounge)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
    </div>
  </div>
</div>

</div>


@endsection