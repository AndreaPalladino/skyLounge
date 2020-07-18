@extends('layouts.app')
@section('style')
<style>
 
</style>
@endsection
@section('content')


<div class="container my-5 py-5">
<form method="POST" action="{{route('rooms.store')}}">
    @csrf

    <div class="form-group mt-4">
        <label for="validationTextarea">Nome</label>
        
        <input name="name" type="text" class=" form-control" id="inputName" aria-describedby="emailHelp">
      </div>


    <div class="form-group mt-4">
      <label for="validationTextarea">Descrizione</label>
      <textarea name="description" class="form-control" id="validationTextarea" placeholder="" required></textarea>
    </div>
  
    
  
    <div class="custom-file mb-3">
      <input name="img" type="file" class="custom-file-input" id="validatedCustomFile" required>
      <label class="custom-file-label" for="validatedCustomFile">Scegli un file...</label>
    </div>
  
  
    <div class="form-group mt-4">
      <label for="validationTextarea">Tipo</label>
      <textarea name="type" class="form-control" id="validationTextarea" placeholder="" required></textarea>
    </div>
      

  
    
     
      <div>
         <button class="btn btn-outline-secondary mx-auto" type="submit">Button</button>
      </div>
    
    
</form>
</div>









  @endsection