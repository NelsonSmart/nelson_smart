<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="{{ asset('assets/images/nes.png')}}" rel="icon" />
<title>NelsonSmart - Personal Portfolio</title>
<meta name="description" content="NelsonSmart is a personal Portfolio for freelance, Ojukwu Nelson Sopuruchukwu">
<meta name="author" content="https://github.com/NelsonSmart">
<meta name="robots" content="noindex" />

<!-- Web Fonts -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<body data-spy="scroll" data-target=".navbar" data-offset="70">

<!-- Document Wrapper   
=============================== -->
<div id="main-wrapper"> 
  <!-- Header -->
  @include('inc.header')
  <!-- Header End -->    
  
  <!-- Content
  ============================================= -->
 @yield('content')
  <!-- Content end --> 
  
  <!-- Footer
  ============================================= -->
 @include('inc.footer')
  <!-- Footer end --> 
  
</div>
<!-- Document Wrapper end  text-lg-left--> 

<!-- Back to Top
============================================= --> 
<a id="back-to-top" class="rounded-circle" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- JavaScript --> 
<script src="{{ asset('assets/vendors/jQuery/jquery.min.js')}}"></script> 
<script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script> 
<!-- Easing --> 
<script src="https://demo.harnishdesign.net/html/simone/vendor/jquery.easing/jquery.easing.min.js"></script> 
<!-- Appear --> 
<script src="https://demo.harnishdesign.net/html/simone/vendor/jquery.appear/jquery.appear.min.js"></script> 
<!-- Counter --> 
<script src="https://demo.harnishdesign.net/html/simone/vendor/jquery.countTo/jquery.countTo.min.js"></script> 
<!-- Parallax Bg --> 
<script src="https://demo.harnishdesign.net/html/simone/vendor/parallaxie/parallaxie.min.js"></script> 
<!-- Typed --> 
<script src="https://demo.harnishdesign.net/html/simone/vendor/typed/typed.min.js"></script> 
<!-- isotope Portfolio Filter --> 
<script src="https://demo.harnishdesign.net/html/simone/vendor/isotope/isotope.pkgd.min.js"></script> 
<!-- Owl Carousel --> 
<script src="{{ asset('assets/vendors/OwlCarousel2/owl.carousel.min.js')}}"></script> 

<!-- Magnific Popup --> 
<script src="{{ asset('assets/vendors/magnific-popup/js/magnific-popup.min.js')}}"></script> 
<!-- Custom Script --> 
<script src="{{ asset('assets/js/script.js')}}"></script>
</body>
</html>