@extends('layouts.app')
@section('style')
<style>
    body{
        background-image: linear-gradient(rgba(255,255,255,0.3), transparent),url('/media/loggedin.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    .wrapper{
     background-color: rgba(0,0,0,0.7);
   }
   
</style>
@endsection
@section('content')
<div class="container my-5 py-5"></div>
<div class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="wrapper">
                <div class="text-center text-white py-5 h2">{{ __('Dashboard') }}</div>

                <div class="my-5 text-center text10 pb-5 h1">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-5 py-5"></div>
@endsection
