@extends('layouts.app')
<link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
            
            <h2>{{__('Ho sentim, no hem trobat el que buscaves. Intenta utilitzar les pestanyes de navegació o busca un refugi pel seu nom a la barra de cerca')}}.</h2> 
            <img src="{{asset('/imatges/error404.png')}}" class="img-normal" alt="...">
            <a href="https://storyset.com/online">Online illustrations by Storyset</a>

        </div>
      </div>
  </div>
@endsection
