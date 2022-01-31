<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="icon" type="image/svg+xml" href="/favicon.svg"> -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>My Portfolio</title>

    {{-- Inertia --}}
    <script
        src="https://polyfill.io/v3/polyfill.min.js?features=smoothscroll,NodeList.prototype.forEach,Promise,Object.values,Object.assign"
        defer></script>

    {{-- My Portfolio --}}
    <script src="https://polyfill.io/v3/polyfill.min.js?features=String.prototype.startsWith" defer></script>

    <!-- Web Fonts -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}" />

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css')}}" />

    <script src="{{ mix('/js/app.js') }}" defer></script>
    @routes
</head>

<body class="side-header" data-spy="scroll" data-target=".navbar" data-offset="1">

    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader End -->

    @inertia

    <!-- JavaScript -->
    <script src="{{ asset('vendor/js/jquery.min.js')}}"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Bootstrap Bundle -->
    <script src="{{ asset('vendor/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Easing -->
    <script src="{{ asset('vendor/js/jquery.easing.min.js')}}"></script>
    <!-- Appear -->
    <script src="{{ asset('vendor/js/jquery.appear.min.js')}}"></script>
    <!-- Images Loaded -->
    <script src="{{ asset('vendor/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Counter -->
    <script src="{{ asset('vendor/js/jquery.countTo.min.js')}}"></script>
    <!-- Parallax Bg -->
    <script src="{{ asset('vendor/js/parallaxie.min.js')}}"></script>
    <!-- Typed -->
    <script src="{{ asset('vendor/js/typed.min.js')}}"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('vendor/js/owl.carousel.min.js')}}"></script>
    <!-- isotope Portfolio Filter -->
    <script src="{{ asset('vendor/js/isotope.pkgd.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('vendor/js/jquery.magnific-popup.min.js')}}"></script>

    <!-- Custom Script -->
    <script src="{{ asset('js/theme.js')}}"></script>

    <style type="text/css" data-typed-js-css="true">
      .typed-cursor{
        opacity: 1;
      }
      .typed-cursor.typed-cursor--blink{
        animation: typedjsBlink 0.7s infinite;
        -webkit-animation: typedjsBlink 0.7s infinite;
                animation: typedjsBlink 0.7s infinite;
      }
      @keyframes typedjsBlink{
        50% { opacity: 0.0; }
      }
      @-webkit-keyframes typedjsBlink{
        0% { opacity: 1; }
        50% { opacity: 0.0; }
        100% { opacity: 1; }
      }
    </style>    
</body>

</html>
