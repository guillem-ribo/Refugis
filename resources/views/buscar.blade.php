@extends('layouts.app')

@section('content')
  <div class="container">
    <h2>{{__('Resultats de la cerca')}} "{{$text}}"</h2>
    <div class="row">
      
        @forelse ($refugis as $refugi)
          <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="{{asset('/imatges/'.$refugi->id.'.jpg')}}" class="card-img-top miniatura" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $refugi->nom }}</h5>
              <p class="card-title">{{ $refugi->municipi->nom }} ({{$refugi->municipi->comarca->nom }})</p>
              <a href="{{ route('detall.refugi', ['refugi' => $refugi]) }}" class="btn btn-outline-success">{{__('Més informació')}}</a>
            </div>
          </div>
          </div>

        @empty
          <p>{{__('No hi ha cap refugi que coincideixi amb la cerca')}} "{{$text}}".</p>
        @endforelse
      
    </div>
  </div>
@endsection


