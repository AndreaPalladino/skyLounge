@extends('layouts.app')
@section('style')
<style>
  body{
          background: linear-gradient(rgba(255,255,255,0.5),transparent),url('/media/room.webp');
          background-repeat: no-repeat;
          background-size: cover;
      }
</style>
@endsection
@section('content')

<div class="container my-5 py-5"></div>
<div class="container my-5 py-5">
  <a href="{{route('rooms.index')}}" class="btn bg10 text-white mx-auto d-block w-50">INDIETRO</a>
</div>


<div class="container py-5 my-5">
    <div class="row my-5">
        <div class="col-12">
            <div class="card text-center mx-auto">
                <div class="card-body bg10 text-white">
                  <h5 class="card-title">{{$room->name}}</h5>
                  <p class="card-text">{{$room->description}}</p>
                  <p class="card-text">{{$room->type}}</p>
                  <img src="{{$room->img}}" alt="" width="500" height="500">
                  <p class="card-text my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, accusantium? Amet voluptatibus vitae est debitis, natus autem dicta totam eligendi itaque nobis animi dolorum qui deleniti, nostrum provident eveniet iste.</p>
                  <p class="card-text my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, accusantium? Amet voluptatibus vitae est debitis, natus autem dicta totam eligendi itaque nobis animi dolorum qui deleniti, nostrum provident eveniet iste.</p>
                  <p class="card-text my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, accusantium? Amet voluptatibus vitae est debitis, natus autem dicta totam eligendi itaque nobis animi dolorum qui deleniti, nostrum provident eveniet iste.</p>
                </div>
              </div>
        </div>
    </div>
</div>

<div class="container my-5 py-5"></div>
<div class="container my-5 py-5"></div>
<div class="container my-5 py-5"></div>

@endsection