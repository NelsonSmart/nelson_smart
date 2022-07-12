<header id="header" class="sticky-top-slide"> 
    <!-- Navbar -->
    <nav class="primary-menu navbar navbar-expand-lg navbar-text-light bg-transparent border-bottom-0">
      <div class="">
        <div class="container-fluid position-relative row">

          <div class="col-auto col-lg-2"> 
            <!-- Logo --> 
            <a class="logo d-flex align-items-baseline" href="{{ url('/')}}" title="NelsonSmart"> <img src="{{asset('assets/images/nes.png')}}" width="20%"  alt="NelsonSmart_avaterLogo"> <h5 style = "color: lightgreen;"> NelsonSmart </h5></a> 
            <!-- Logo End --> 
          </div>
          <div class="col col-lg-8 navbar-accordion px-0">
            <button class="navbar-toggler ml-auto" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav" aria-expanded="false"><span></span><span></span><span></span></button>
            <div id="header-nav" class="collapse navbar-collapse justify-content-center">
              <ul class="navbar-nav">
       
                <li class="nav-item"><a class="nav-link @if(url('/') == url()->current())smooth-scroll @endif  active" href="@if(url('/') != url()->current()){{url('/')}}@else #home @endif">Home</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" 	href="#about">About</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">What I Do</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#resume">Resume</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
              <li class="nav-item"><a class="nav-link " href="{{ route('projects')}}">Projects</a></li>
              </ul>
            </div>
          </div>
          <div class="col-auto col-lg-2 d-flex justify-content-end pl-0 mr-n2">
            <ul class="social-icons social-icons-light mb-n1">
            <li class="social-icons-twitter"><a data-toggle="tooltip" href="https://twitter.com/teckb0t" target="_blank" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
        <li class="social-icons-facebook"><a data-toggle="tooltip" href="https://web.facebook.com/sopuruchukwu.nelson/" target="_blank" title="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
            <li class="social-icons-github"><a data-toggle="tooltip" href="http://www.github.com/NelsonSmart" target="_blank" title="" data-original-title="Github"><i class="fa fa-github"></i></a></li>
            <li class="social-icons-linkedin"><a data-toggle="tooltip" href="https://www.linkedin.com/in/nelson-ojukwu-848a801ab/" target="_blank" title="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>

        </div>
        
      </div>
    </nav>
    <!-- Navbar End --> 
  </header>