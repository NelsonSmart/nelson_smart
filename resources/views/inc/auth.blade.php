<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="icon" href="{{ asset('assets/images/nes.png')}}">

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('assetsfonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css')}}">

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
<body>

    <div class="main" >
       
       @yield('contect')
       
       
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