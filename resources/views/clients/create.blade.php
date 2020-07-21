@extends('layouts.app')
@section('style')
<style>
    .wrapper{
     background-color: rgba(0,0,0,0.7);
   }
</style>
@endsection
@section('content')

<header class="prenotazioni">
    <div class="container-fluid">
        <div class="row h-100">

        </div>
    </div>
</header>

<div class="bodyBooking">



<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Prenota la tua Vacanza</h1>
            <hr class="bar">
        </div>
    </div>
</div>

<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @if (session('message'))
                <div class="alert alert-bg10 text-center">
                    {{session('message')}}
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3">
            <div class="wrapper px-5 py-5">
            <form method="POST" action="{{route('clients.store')}}">
                @csrf
                <div class="form-group my-3">
                    <label for="exampleInputEmail1" class="text-white">Nome e Cognome</label>
                    <input value="{{old('name')}}" name="name" type="text" class="form-control bg-transparent box-bottom text-white" >
                   </div>
                <div class="form-group my-3">
                  <label for="exampleInputEmail1" class="text-white">Email</label>
                  <input value="{{old('email')}}" name="email" type="email" class="form-control bg-transparent box-bottom text-white" id="exampleInputEmail1" aria-describedby="emailHelp">
                 </div>
                <div class="form-group my-3">
                  <label for="exampleInputPassword1" class="text-white">Numero</label>
                  <input value="{{old('number')}}" name="number" type="number" class="form-control bg-transparent box-bottom text-white" id="exampleInputPasswo">
                </div>
                <div class="form-group my-3">
                    <label for="exampleInputPassword1" class="text-white">Data di Arrivo</label>
                    <input value="{{old('checkIn')}}" name="checkIn" type="date" class="form-control bg-transparent box-bottom text-white" id="exampleInputPasswor">
                  </div>
                  <div class="form-group my-2 3">
                    <label for="exampleInputPassword1" class="text-white">Data di Partenza</label>
                    <input value="{{old('checkOut')}}" name="checkOut" type="date" class="form-control bg-transparent box-bottom text-white" id="exampleInputPassword1">
                  </div>
                <button type="submit" class="btn bg10 text-white mx-auto d-block">Submit</button>
              </form>
            </div>
        </div>
    </div>
</div>






</div>








@endsection