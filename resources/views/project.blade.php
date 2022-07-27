@extends('inc.layout')

@section('content')
  <!-- Content
  ============================================= -->
  <div id="content" role="main"> 
    
    <!-- Intro
    ============================================= -->
    <section id="home">
      <div class="hero-wrap">
        <div class="hero-mask opacity-8 bg-dark"></div>
        <div class="hero-bg parallax" style="position: absolute; z-index: 0; min-width: 100%; min-height: 100%; left: 0px; top: 0px; overflow: hidden; opacity: 1; background-image: none; transition-property: opacity; transition-duration: 1000ms; background-image:url('assets/images/backG.jpg');">
           </div>
        <div class="hero-content section d-flex fullscreen">
          <div class="container my-auto">
            <div class="row">
              <div class="col-12 text-center">
                <div class="typed-strings">
                 <p>PythonDev.</p>
                  <p>PhpDev.</p>
                  <p>Backend Engineer.</p>
                  <p>Bash Scripting.</p>
                  <p>LaravelDev.</p>
                  <p>Cyber Security.</p>
                  <p>I am a Freelancer.</p>
                </div>
                
                <p class="text-7 font-weight-500 text-white mb-2 mb-md-3 ">I'm Ojukwu Nelson S. <span class =" typed-cursor typed-cursor--blink"> |</span></p>
                <h2 class="text-16 font-weight-600 text-white mb-2 mb-md-3"><span class="typed"></span></h2>
                <p class="text-5 text-light mb-4">based in owerri, imo .</p>
			         	<a href="#contact" class="btn btn-outline-primary rounded-pill shadow-none smooth-scroll mt-2">Hire Me</a>
              </div>
            </div>
          </div>
          <a href="#about" class="scroll-down-arrow text-white smooth-scroll"><span class="animated"><i class="fa fa-chevron-down"></i></span></a> </div>
      </div>
    </section>
    <!-- Intro end --> 
    
    <!-- Services
    ============================================= -->
    <section id="services" class="section bg-light">
      <div class="container"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">Projects</h2>
          <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">Work done<span class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        
         <p class="mb-0 text-center">Still Working on Projects.</p>
        
      </div>
    </section>
    <!-- Services end --> 
    
    <!-- Contact Me end --> 
    
  </div>
  
 @endsection