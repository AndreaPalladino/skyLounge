@extends('layouts.app')
@section('style')
  <style>
      body{
          background: linear-gradient(transparent ,rgba(0,0,0,0.9)),url('media/dream.jpeg');
          background-repeat: no-repeat;
          background-size: cover;
      }

  </style>  
@endsection
@section('content')
    



<div class="container py-5 my-5">
    <div class="row">
        @foreach($services as $service)
        <div class="col-md-7" data-aos="fade-left">
         
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{$service[0]['img']}}" alt="">
         
        </div>
        <div class="col-md-5 my-5">
          <h3 class="text-light">{{$service[0]['name']}}</h3>
          <p class="text-light">{{$service[0]['desc']}}</p>
          <a class="btn bg10 text-white" href="{{route('details', ['name'=>$service[0]['name']])}}">Dettagli</a>
        </div>
        <div class="col-md-5 my-5">
            <h3 class="text-light">{{$service[1]['name']}}</h3>
            <p class="text-light">{{$service[1]['desc']}}</p>
            <a class="btn bg10 text-white" href="{{route('details', ['name'=>$service[1]['name']])}}">Dettagli</a>
          </div>
        <div class="col-md-7 my-5" data-aos="fade-right">
           
              <img class="img-fluid rounded mb-3 mb-md-0" src="{{$service[1]['img']}}" alt="">
           
        </div>
        @endforeach
    </div>
</div>











@endsection