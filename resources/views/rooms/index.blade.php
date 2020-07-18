@extends('layouts.app')
@section('style')
@endsection

@section('content')




<div class="container my-5 py-5">

<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">DESC</th>
        <th scope="col">TIPO</th>
        <th scope="col">IMG</th>
      </tr>
    </thead>
    <tbody>
    @foreach($rooms as $room)
      <tr>
        <th scope="row">{{$room->id}}</th>
        <td>{{$room->name}}</td>
        <td>{{$room->description}}</td>
        <td>{{$room->type}}</td>
        <td>{{$room->img}}</td>
        <td><a href="{{route('rooms.show',compact('room'))}}" class="btn btn-info">VISUALIZZA</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>

</div>





@endsection