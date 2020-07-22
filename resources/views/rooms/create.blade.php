@extends('layouts.app')
@section('style')
<style>
 
</style>
@endsection
@section('content')


<div class="container my-5 py-5">
<form method="POST" action="{{route('rooms.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group mt-4">
        <label for="validationTextarea" class="text-center">Nome</label>
        
        <input name="name" type="text" class="mx-auto d-block w-25" id="inputName" aria-describedby="emailHelp">
      </div>


    <div class="form-group mt-4">
      <label for="validationTextarea">Descrizione</label>
      <input name="description" class="mx-auto d-block w-25" id="validationTextarea" placeholder="" required type="text">
    </div>
  
    <div class="form-group mt-4">
      <label for="validationTextarea">Foto</label>
      <input name="img" class="mx-auto d-block" id="validationTextarea" placeholder="" type="file">
    </div>
    
    <div class="form-group mt-4">
      <label for="validationTextarea">Tipo</label>
      <input name="type" class="mx-auto d-block w-25" id="validationTextarea" placeholder="" required type="text">
    </div>

      <div>
         <button class="btn btn-outline-secondary mx-auto d-block" type="submit">Button</button>
      </div>
    
    
</form>
</div>









  @endsection