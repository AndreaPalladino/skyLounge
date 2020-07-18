@extends('layouts.app')
@section('style')
@endsection
@section('content')

<div class="container py-5 my-5">
    <div class="row my-5">
        <div class="col-12">
            <div class="card text-center mx-auto">
                <div class="card-body">
                  <h5 class="card-title">{{$room->name}}</h5>
                  <p class="card-text">{{$room->description}}</p>
                  <p class="card-text">{{$room->type}}</p>
                  <img src="{{$room->img}}" alt="">
                  
                </div>
              </div>
        </div>
    </div>
</div>



@endsection