@extends('layouts.app')
@section('style')
    
@endsection
@section('content')
   
<div class="client">
<div class="container py-5 my-5"></div>
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Info Cliente {{$client->id}}</h1>
            <hr class="bar">
        </div>
    </div>
</div>
<div class="container mt-3 mb-5 py-3">
    <div class="row">
        <div class="col-12">
            <div class="card text-center">
                <div class="card-header bg10 text-white">
                  <h3>{{$client->name}}</h3>
                </div>
                <div class="card-body bg10opaque">
                  <h6 class="card-title">Email: {{$client->email}}</h6>
                  <h6 class="card-text">Numero di persone: {{$client->number}}</h6>
                  <a href="{{route('clients.edit', compact('client'))}}" class="btn btn-info">MODIFICA</a>
                  <a href="{{route('clients.index')}}" class="btn bg10 text-white">INDIETRO</a>
                </div>
                <div class="card-footer bg10 text-white">
                  Check-In {{$client->checkIn}}
                  <span class="card-footer text-white bg-info">
                    Check-Out {{$client->checkOut}}
                  </span>
                </div>
           </div>
        </div>
   </div>
</div>
<div class="container py-5 my-5"></div>
<div class="container py-5 my-5"></div>
</div>






@endsection