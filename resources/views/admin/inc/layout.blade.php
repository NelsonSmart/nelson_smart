<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWIND CSS -->
    <link href="{{ asset('assets/css/tailwind.css')}}" rel="stylesheet">
    <!-- ALPINE JS -->
    <script src="{{ asset('assets/js/alpine.js')}}" defer></script>
    <link rel="icon" href="{{ asset('assets/images/nes.png')}}">

    <title>Admin - {{ env('APP_NAME')}}</title>

     <!-- Stylesheet
============================== -->
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap/bootstrap.min.css')}}" />
<!-- Font Awesome Icon -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/font-awesome/css/all.min.css')}}" />
<!-- Owl Carousel -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/OwlCarousel2/owl.carousel.min.css')}}" />
<!-- Magnific Popup -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/magnific-popup/css/magnific-popup.min.css')}}" />
<!-- Custom Stylesheet -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}" />

</head>
<body class="antialiased bg-gray-100">
    <div class="flex relative" x-data="{navOpen: false}">
        <!-- NAV -->
        @include('admin.inc.sidebar')
        <!-- END OF NAV -->
        <main class="flex-1 h-screen overflow-y-scroll overflow-x-hidden">
            <div class="md:hidden justify-between items-center bg-black text-white flex">
                <h1 class="text-2xl font-bold px-4">{{env('APP_NAME')}}</h1>
                <button @click="navOpen = !navOpen" class="btn p-4 focus:outline-none hover:bg-gray-800">
                    <svg class="w-6 h-6 fill-current" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
          <!-- PAGE CONTENT -->
          @yield('content')

          <!-- footer------->
          @include('inc.footer')
        </main>
        
    </div>

     <!-- JavaScript --> 
<script src="{{ asset('assets/vendors/jQuery/jquery.min.js')}}"></script> 
<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script> 
<!-- Owl Carousel --> 
<script src="{{ asset('assets/vendors/OwlCarousel2/owl.carousel.min.js')}}"></script> 

<!-- Magnific Popup --> 
<script src="{{ asset('assets/vendors/magnific-popup/js/magnific-popup.min.js')}}"></script> 
<!-- Custom Script --> 
<script src="{{ asset('assets/js/script.js')}}"></script>

    <!-- JS -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
</body>
</html>