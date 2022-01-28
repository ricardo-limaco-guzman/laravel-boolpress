<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Boolpress') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <header>
    <!-- Navbar Admin -->
    <div class="_nav-bar">
      <div class="container-fluid d-flex justify-content-between align-items-center">

        <a href="/">
          <img src="/img/logo.png" alt="logo" class="_logo">
        </a>
        <ul>
          <li><a href="/">Home</a></li>

          <!-- Dropdown vecchio -->
          {{-- <li class="dropdown">
            <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Nome
            </a> --}}
            {{-- logout --}}
            {{-- <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item _hover-none" href="#">Logout</a>
              </li>
            </ul>
          </li> --}}


          {{-- dropdown prova --}}
          {{-- <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
          
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div> --}}
          

          @guest
          <li class="">
            <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>

          @if (Route::has('register'))
          <li class="">
            <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif

          <!-- Dropdown -->
          @else
          <li class="dropdown">
            <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            {{-- logout --}}
            <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item _hover-none" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                  @csrf
                </form>
              </li>
            </ul>
          </li>
          @endguest



        </ul>
      </div>
    </div>

  </header>





  {{-- <nav class=" navbar-expand-md ">
    <div class="container">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif

          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right d-block" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav> --}}

  <main class="py-4">
    @yield('content')
  </main>

</body>

</html>