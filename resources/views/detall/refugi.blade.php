@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">

            <img src="{{asset('/imatges/'.$refugi->id.'.jpg')}}" class="card-img-top thumb-post" alt="...">
            @if ( Config::get('app.locale') == 'ca')
              <h2 class="titol t">Refugi {{$refugi->nom}}</h2>
            @else 
              <h2 class="titol t">{{__('Refugi', ['nom' => $refugi->nom])}}</h2>
            @endif
            
            <div class="alert alert-warning" role="alert">
              {{__('Alerta: la informació publicada en aquesta pàgina pot no ser certa')}}.
            </div>

            <h2 class="t">{{__('Detalls i serveis del refugi')}}</h2>

            <ul class="list-group list-group-flush">
              <li class="list-group-item"><img src="{{asset('/imatges/icons/mountain-solid.svg')}}" class="icona" alt="...">&nbsp;&nbsp;{{__('Altitud')}}: {{$refugi->altitud}}m</li>
              <li class="list-group-item"><img src="{{asset('/imatges/icons/user-shield-solid.svg')}}" class="icona" alt="...">&nbsp;&nbsp;{{__('Tipus de refugi')}}: {{$refugi->guardat == 0 ? __('Lliure') : __('Guardat')}}</li>
              <li class="list-group-item"><img src="{{asset('/imatges/icons/house-user-solid.svg')}}" class="icona" alt="...">&nbsp;&nbsp;{{__('Capacitat total')}}: {{$refugi->capacitat_total}} persones</li>
              <li class="list-group-item"><img src="{{asset('/imatges/icons/house-user-solid.svg')}}" class="icona" alt="...">&nbsp;&nbsp;{{__('Capacitat actual')}}: {{$refugi->capacitat_total}} persones</li>
              <li class="list-group-item"><img src="{{asset('/imatges/icons/phone-alt-solid.svg')}}" class="icona" alt="...">&nbsp;&nbsp;{{__('Telèfon')}}: +34 {{$refugi->telefon}}</li>
              <li class="list-group-item"><img src="{{asset('/imatges/icons/landmark-solid.svg')}}" class="icona" alt="...">&nbsp;&nbsp;{{__('Entitat')}}: {{$refugi->entitat->nom}}</li>
              <li class="list-group-item"><img src="{{asset('/imatges/icons/map-marker-solid.svg')}}" class="icona" alt="...">&nbsp;&nbsp;{{__('Municipi')}}: {{$refugi->municipi->nom}} ({{$refugi->municipi->comarca->nom}})</li>
              <li class="list-group-item"><img src="{{asset('/imatges/icons/wifi-solid.svg')}}" class="icona" alt="..."></i>&nbsp;&nbsp;{{__('Wifi')}}: {{$refugi->wifi == 0 ? __('No') : __('Sí')}}</li>
              <li class="list-group-item"><img src="{{asset('/imatges/icons/shower-solid.svg')}}" class="icona" alt="..."></i>&nbsp;&nbsp;{{__('Dutxa')}}: {{$refugi->dutxa == 0 ? __('No') : __('Sí')}}</li>
              <li class="list-group-item"><img src="{{asset('/imatges/icons/water-solid.svg')}}" class="icona" alt="...">&nbsp;&nbsp;{{__('Aigua calenta')}}: {{$refugi->aigua_calenta == 0 ? __('No') : __('Sí')}}</li>
              <li class="list-group-item"><img src="{{asset('/imatges/icons/bed-solid.svg')}}" class="icona" alt="...">&nbsp;&nbsp;{{__('Mantes')}}: {{$refugi->mantes == 0 ? __('No') : __('Sí')}}</li>
              <li class="list-group-item"><img src="{{asset('/imatges/icons/fire-solid.svg')}}" class="icona" alt="...">&nbsp;&nbsp;{{__('Calefacció')}}: {{$refugi->calefaccio == 0 ? __('No') : __('Sí')}}</li>
              <li class="list-group-item"><img src="{{asset('/imatges/icons/toilet-solid.svg')}}" class="icona" alt="...">&nbsp;&nbsp;{{__('Vàter')}}: {{$refugi->vater == 0 ? __('No') : __('Sí')}}</li>
            </ul>

        </div>
      </div>
  </div>
@endsection
