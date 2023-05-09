@extends('layouts.app')

@section('content')

@php ($count = 0)

  <div class="container">
    <h2 class="t">{{__('Benvinguts a la pàgina de refugis de muntanya de Catalunya')}}</h2>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
      
      <div class="carousel-inner">

        @foreach ($refugis as $refugi)

          @if ($count == 0) 
            <div class="carousel-item active " data-bs-interval="3000">
              <a href="{{ route('detall.refugi', ['refugi' => $refugi]) }}"><img src="{{asset('/imatges/'.$refugi->id.'.jpg')}}" class="card-img-top img-carousel" alt="..."></a>
              <div class="carousel-caption d-none d-md-block">
                <h5 class="descripcio-carousel carousel-title t">{{ $refugi->nom }}</h5>
                <p class="descripcio-carousel carousel-desc">{{ $refugi->municipi->nom }} ({{ $refugi->municipi->comarca->nom }})</p>
              </div>
            </div>

            @php ($count++)

          @else {
            <div class="carousel-item" data-bs-interval="3000">
              <a href="{{ route('detall.refugi', ['refugi' => $refugi]) }}"><img src="{{asset('/imatges/'.$refugi->id.'.jpg')}}" class="card-img-top img-carousel" alt="..."></a>
              <div class="carousel-caption d-none d-md-block">
                <h5 class="descripcio-carousel carousel-title">{{ $refugi->nom }}</h5>
                <p class="descripcio-carousel carousel-desc">{{ $refugi->municipi->nom }} ({{ $refugi->municipi->comarca->nom }})</p>
              </div>
            </div>
          }

          @endif

        @endforeach

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="d-grid gap-2 col-3 mx-auto">

          <a href="{{ route('llista') }}" class="btn btn-success btn-lg">{{__('Explorar refugis')}}</a>

    </div>





    
  </div>
@endsection



