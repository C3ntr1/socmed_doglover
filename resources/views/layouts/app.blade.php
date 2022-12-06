<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Dog Lover</title>

    <link href="{{ asset('asset/templatemo_579_cyborg_gaming/vendor/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('asset/templatemo_579_cyborg_gaming/assets/css/fontawesome.css') }}">
    <link rel="stylesheet"
        href="{{ asset('asset/templatemo_579_cyborg_gaming/assets/css/templatemo-cyborg-gaming.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/templatemo_579_cyborg_gaming/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/templatemo_579_cyborg_gaming/assets/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <style>
        .item {
        transition: transform .2s; /* Animation */
        margin: 0 auto;
        }

        .item:hover {
        transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>

    @yield('page-style')
</head>

<body>


    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    @auth
    @include('layouts.components.topbar')
    @else
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @endauth

    <!-- ***** Header Area End ***** -->

    <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-content">
                @yield('content')
            </div>
          </div>
        </div>
    </div>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('asset/templatemo_579_cyborg_gaming/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('asset/templatemo_579_cyborg_gaming/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('asset/templatemo_579_cyborg_gaming/assets/js/isotope.min.js') }}"></script>
  <script src="{{ asset('asset/templatemo_579_cyborg_gaming/assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('asset/templatemo_579_cyborg_gaming/assets/js/tabs.js') }}"></script>
  <script src="{{ asset('asset/templatemo_579_cyborg_gaming/assets/js/popup.js') }}"></script>
  <script src="{{ asset('asset/templatemo_579_cyborg_gaming/assets/js/custom.js') }}"></script>

  @yield('page-script')

</body>

</html>
