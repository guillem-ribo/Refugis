@extends('layouts.app')

@section('content')

  <div class="container">
    <h2 class="t">{{__('Llistat de comarques')}}</h2>
    <div class="row">
      
        @forelse ($comarques as $comarca)
            <h2><span class="badge bg-secondary">{{$comarca->nom}}</span></h2>
            @php 
            $existeixRefugi = false
            @endphp

            @foreach ($refugis as $refugi)

                @if ($refugi->municipi->comarca == $comarca)

                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('/imatges/'.$refugi->id.'.jpg')}}" class="card-img-top miniatura" alt="...">
                            <div class="card-body">
                            <h5 class="card-title t">{{ $refugi->nom }}</h5>
                            <p class="card-title">{{ $refugi->municipi->nom }}</p>
                            <a href="{{ route('detall.refugi', ['refugi' => $refugi]) }}" class="btn btn-outline-success">{{__('Més informació')}}</a>
                            </div>
                        </div>
                    </div>

                    @php 
                    $existeixRefugi = true
                    @endphp
                
                @endif

            @endforeach

            @if ($existeixRefugi == false)
                @if ( Config::get('app.locale') == 'ca' || Config::get('app.locale') == 'es')
                <p>{{__('No hi ha cap refugi disponible a la comarca')}} {{$comarca->nom}}</p>
                @else 
                <p>{{__('No hi ha cap refugi disponible a la comarca', ['nom' => $comarca->nom])}}</p>
                @endif
                
            @endif

        @empty
          <p>{{__('No hi ha cap comarca disponible')}}.</p>
        @endforelse

      
    </div>
  </div>
@endsection

