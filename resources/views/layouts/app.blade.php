<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Cyborg - Awesome HTML5 Template</title>

    <link href="{{ asset('asset/templatemo_579_cyborg_gaming/vendor/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('asset/templatemo_579_cyborg_gaming/assets/css/fontawesome.css') }}">
    <link rel="stylesheet"
        href="{{ asset('asset/templatemo_579_cyborg_gaming/assets/css/templatemo-cyborg-gaming.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/templatemo_579_cyborg_gaming/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/templatemo_579_cyborg_gaming/assets/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
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
    @include('layouts.components.topbar')
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

</body>

</html>
