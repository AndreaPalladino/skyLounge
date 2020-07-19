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
                                <th class="bg10 text-white my-auto">ID</th>
                                <th class="bg10 text-white mx-auto">Nome</th>
                                <th class="bg10 text-white mx-auto">E-mail</th>
                                <th class="bg10 text-white mx-auto">Nr. di persone</th>
                                <th class="bg10 text-white mx-auto">Data CheckIn</th>
                                <th class="bg10 text-white mx-auto">Data CheckOut</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                            <tr>
                                <td class="bg10 text-white my-auto">{{$client->id}}</td>
                                <td>{{$client->name}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->number}}</td>
                                <td>{{$client->checkIn}}</td>
                                <td>{{$client->checkOut}}</td>
                                <td><a href=""><button class="btn bg10 text-white">VISUALIZZA</button></a></td>
                                <td><a href=""><button class="btn btn-info">MODIFICA</button></a></td>
                                <td>CANCELLA</td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>   
       
            </div>
        </div>
 </div>
        







@endsection