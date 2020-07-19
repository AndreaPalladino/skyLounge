@extends('layouts.app')
@section('style')
<style>
  body{
          background: url('/media/details.jpeg');
          background-repeat: no-repeat;
          background-size: cover;
      }
 </style>
@endsection
@section('content')
   


<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">I Nostri Servizi</h1>
            <hr class="bar">
        </div>
    </div>
</div>
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-md-8">
          <img class="img-fluid" src="{{$selectedService['img']}}" alt="">
        </div>
    
        <div class="col-md-4">
          <h3 class="my-3">{{$selectedService['name']}}</h3>
          <p>{{$selectedService['desc']}}</p>
          <p>{{$selectedService['desc']}}</p>
          <p>{{$selectedService['desc']}}</p>
        </div>
    
      </div>
</div>





@endsection