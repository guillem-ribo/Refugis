<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  <script src="https://kit.fontawesome.com/d0f1b1b5ca.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="/favicon.ico" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{__('Refugis')}}</title>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">

  <!-- Styles -->

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="cos">
  <div id="app">

    <nav class="navbar navbar-expand-lg navbar-light bg-light justificat">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">{{__('REFUGIS')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">{{__('Inici')}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('llista') }}">{{__('Refugis')}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('llistacomarques') }}">{{__('Comarques')}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('llistaentitats') }}">{{__('Entitats')}}</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__('Idioma')}} ({{Config::get('app.locale')}})&nbsp;&nbsp;<img src="{{asset('/imatges/icons/globe-solid.svg')}}" class="icona" alt="...">
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{url('lang/ca')}}">Català</a></li>
                <li><a class="dropdown-item" href="{{url('lang/en')}}">English</a></li>
                <li><a class="dropdown-item" href="{{url('lang/es')}}">Español</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" action="{{ url('/buscar') }}" method="GET">
            <input name="consulta" class="form-control me-2" type="search" placeholder="{{__('Cercar per nom')}}" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">{{__('Cercar')}}</button>
          </form>
        </div>
      </div>
    </nav>
    

    <main class="py-4">
      @yield('content')
    </main>
  </div>

  <!-- Scripts -->

  <script src="{{ asset('js/app.js') }}" defer></script>
</body>

<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h3>{{__('Contacte')}}</h3>
        <ul>
          <li>UVIC-UCC Desenvolupament d'Entorns Web</li>
          <li>&nbsp;</li>
          <li><a href="mailto:guillem.ribo@uvic.cat">guillem.ribo@uvic.cat</a></li>
        </ul>
      </div>
      <div class="col-12 copyright">
        Copyright - Guillem Ribó © {{ now()->year }}
      </div>
    </div>

  </div>
  {{-- footer info --}}
</footer>

</html>
