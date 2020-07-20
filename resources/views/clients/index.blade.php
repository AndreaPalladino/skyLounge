@extends('layouts.app')
@section('style')
@endsection
@section('content')



<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Lista Prenotazioni</h1>
            <hr class="bar">
      </div>
            <div class="col-12 mt-5">
                <form action="#" method="get">
                    <div class="input-group">
                        <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                        <input class="box-bottom" id="system-search" name="q" placeholder="Search for" required>
                        <span class="input-group-btn">
                            <button type="submit" class="btn "><i class="glyphicon glyphicon-search"></i></button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="col-12 mt-5">
           <table class="table table-list-search">
                        <thead>
                            <tr>
                                <th class="bg30 text-white my-auto">ID</th>
                                <th class="bg30 text-white mx-auto">Nome</th>
                                <th class="bg30 text-white mx-auto">E-mail</th>
                                <th class="bg30 text-white mx-auto">Nr. di persone</th>
                                <th class="bg30 text-white mx-auto">Data CheckIn</th>
                                <th class="bg30 text-white mx-auto">Data CheckOut</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                            <tr>
                                <td class="bg30 text-white my-auto">{{$client->id}}</td>
                                <td>{{$client->name}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->number}}</td>
                                <td>{{$client->checkIn}}</td>
                                <td>{{$client->checkOut}}</td>
                                <td class="d-block d-md-flex"><a href="{{route('clients.show', compact('client'))}}"><button class="btn bg10 text-white">VISUALIZZA</button></a></td>
                                <td class="d-block d-md-flex"><a href="{{route('clients.edit', compact('client'))}}"><button class="btn bg30 text-white">MODIFICA</button></a></td>
                                <td class="d-block d-md-flex"><button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">CANCELLA</button></td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>   
       
            </div>
        </div>
 </div>
        

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-body">
          <form method="POST" action="{{route('clients.destroy', compact('client'))}}">
            @method('DELETE')
            @csrf
              <h5 class="text-center">Sei davvero sicuro di voler cancellare la prenotazione?</h5>
              <button type="submit" class="btn btn-danger mx-auto d-block mt-5">CANCELLA</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Chiudi</button>
        </div>
      </div>
    </div>
  </div>




@endsection