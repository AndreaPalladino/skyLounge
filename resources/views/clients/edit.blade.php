@extends('layouts.app')
@section('style')
    
@endsection
@section('content')

<header class="editHeader">
    <div class="container-fluid">
        <div class="row h-100">

        </div>
    </div>
</header>

<div class="edit">

    
    


    <div class="container py-5 my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Modifica i Tuoi Dati</h1>
                <hr class="bar">
            </div>
        </div>
    </div>
    
    <div class="container my-5 py-5">
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
                <div class="wrapperedit px-5 py-5">
                <form method="POST" action="{{route('clients.update', compact('client'))}}">
                    @method('PUT')
                    @csrf
                    <div class="form-group my-3">
                        <label for="exampleInputEmail1" class="text-white">Nome e Cognome</label>
                        <input name="name" type="text" class="form-control bg-transparent box-bottom text-white" value="{{$client->name}}" >
                       </div>
                    <div class="form-group my-3">
                      <label for="exampleInputEmail1" class="text-white">Email</label>
                      <input name="email" type="email" class="form-control bg-transparent box-bottom text-white" value="{{$client->email}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                     </div>
                    <div class="form-group my-3">
                      <label for="exampleInputPassword1" class="text-white">Numero</label>
                      <input name="number" type="number" class="form-control bg-transparent box-bottom text-white" value="{{$client->number}}" id="exampleInputPasswo">
                    </div>
                    <div class="form-group my-3">
                        <label for="exampleInputPassword1" class="text-white">Data di Arrivo</label>
                        <input name="checkIn" type="date" class="form-control bg-transparent box-bottom text-white" value="{{$client->checkIn}}" id="exampleInputPasswor">
                      </div>
                      <div class="form-group my-2 3">
                        <label for="exampleInputPassword1" class="text-white">Data di Partenza</label>
                        <input name="checkOut" type="date" class="form-control bg-transparent box-bottom text-white" value="{{$client->checkOut}}" id="exampleInputPassword1">
                      </div>
                    <button type="submit" class="btn bg10 text-white mx-auto d-block mt-2 w-25">MODIFICA</button>
                    <a href="{{route('clients.index')}}" class="btn bg30 text-white d-block mx-auto w-25 mt-2">INDIETRO</a>
                  </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container py-5 my-5"></div>
    <div class="container py-5 my-5"></div>
    
    
    
    </div>






    
@endsection