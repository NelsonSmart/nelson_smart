@extends('inc.layout') 
 
  @section('content')
   <!-- Content -->
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
    
    <!-- About
    ============================================= -->
    <section id="about" class="section">
      <div class="container"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">About Me</h2>
          <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">Know Me More<span class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        
        <div class="row">
          <div class="col-lg-8 text-center text-lg-left">
            <h2 class="text-7 font-weight-600 mb-3">I'm <span class="text-primary">Ojukwu Nelson Sopuruchukwu. </span> a Software Engineer</h2>
            <p>I strive for excellence and precision at all time,  contributing the best of my abilty and quota to improving organizational objective and achieving all goals set and target. I can help you build brand for your business at an affordable price. </p>
            <p>Delivering work within time and budget which meets client’s requirements. I love to write clean codes and passionate about learning.<p>
          </div>
          <div class="col-lg-4 mt-5 mt-lg-0">
            <div class="pl-4">
                <img src ="{{ asset('assets/images/nelson.jpg')}}" width = "300px" height = "330px">
            </div>
          </div>
        </div>
        <div class="brands-grid separator-border mt-5">
          <div class="row">
            <div class="col-6 col-md-3">
              <div class="featured-box text-center">
                <h4 class="text-12 text-muted mb-0"><span class="counter" data-from="100" data-to="4">4</span>+</h4>
                <p class="mb-0">Years Experiance</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="featured-box text-center">
                <h4 class="text-12 text-muted mb-0"><span class="counter" data-from="50" data-to="3">3</span>+</h4>
                <p class="mb-0">Happy Clients</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="featured-box text-center">
                <h4 class="text-12 text-muted mb-0"><span class="counter" data-from="20" data-to="3">3</span>+</h4>
                <p class="mb-0">Projects Done</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="featured-box text-center">
                <h4 class="text-12 text-muted mb-0"><span class="counter" data-from="1000" data-to="5">5</span></h4>
                <p class="mb-0">Get Awards</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About end --> 
    
    <!-- Services
    ============================================= -->
    <section id="services" class="section bg-light">
      <div class="container"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">Services</h2>
          <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">What I Do?<span class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        
        <div class="row">
          <div class="col-lg-11 mx-auto">
            <div class="row">
              
              <div class="col-md-6">
                <div class="featured-box style-3 mb-5">
                  <div class="featured-box-icon text-primary bg-white shadow-sm rounded"> <i class="fa fa-desktop"></i></div>
                  <h3>Web Design &amp; Develop</h3>
                  <p class="mb-0">I design & develop websites of any kind.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="featured-box style-3 mb-5 mb-md-0">
                  <div class="featured-box-icon text-primary bg-white shadow-sm rounded"> <i class="fa fa-bar-chart-o"></i> </div>
                  <h3>Business Analysis</h3>
                  <p class="mb-0">With the help of my Data Science skills using python lang &amp; microsoft excel.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="featured-box style-3 mb-0">
                  <div class="featured-box-icon text-primary bg-white shadow-sm rounded"> <i class="fa fa-bullhorn"></i> </div>
                  <h3>SEO Marketing</h3>
                  <p class="mb-0">Creating a good and quality websites, its actually a good way of ranking. Can help you market you business and reach to your dream customers.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services end --> 
    
    <!-- Resume
    ============================================= -->
    <section id="resume" class="section">
      <div class="container"> 
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">Summary</h2>
          <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">Resume<span class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        
        <div class="row"> 
          <!-- My Education -->
          <div class="col-md-6">
            <h2 class="text-6 font-weight-600 mb-4">My Education</h2>
            <div class="bg-white border rounded p-4 mb-4">
              <p class="badge badge-primary text-2 font-weight-400">2018- till date</p>
              <h3 class="text-5">Computer Science</h3>
              <p class="text-danger">Federal Polytechnic Nekede, Owerri Imo State</p>
              <p class="mb-0">I'm student of computer science, currently in my National Diploma Finals (ND2).</p>

            </div>
          </div>
          
          <!-- MY ACADEMIC QUALIFICATIONS  -->
          <div class="col-md-6">
            <h2 class="text-6 font-weight-600 mb-4">My Academic Qualifications </h2>
            <div class="bg-white border rounded p-4 mb-4">
              <p class="badge badge-primary text-2 font-weight-400">2020</p>
              <h3 class="text-5">IBM Academic Cloud Application Developer Certificate Examination</h3>
              <p class="text-danger">IBM</p>
              <p class="mb-0">Completed cloud application development using Node.js in IBM during the pandemic period.</p>
            </div>
            <div class="bg-white border rounded p-4 mb-4">
              <p class="badge badge-primary text-2 font-weight-400">2020</p>
              <h3 class="text-5">Udemy Certificate of Completion on Bootstrap & JQuery | Complete Html5 Course </h3>
              <p class="text-danger">UDEMY</p>
              <p class="mb-0">Completed a course on web development (front-end).</p>
            </div>
          </div>
        </div>
        
       </div>
        <div class="text-center mt-5"><a href="{{ asset('assets/CV/OJUKWU_NELSON_SOPURUCHUKWU_CV.pdf')}}" class="btn btn-outline-secondary rounded-pill shadow-none">Download CV <span class="ml-1"><i class="fa fa-download"></i></span></a></div>
      </div>
    </section>
    <!-- Resume end --> 
    
    <!-- Contact Me
    ============================================= -->
    <section id="contact" class="section bg-light">
      <div class="container">
        <!-- Heading -->
        <div class="position-relative d-flex text-center mb-5">
          <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">Contact</h2>
          <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">Get in Touch<span class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span> </p>
        </div>
        <!-- Heading end-->
        <div class="row">
          <div class="col-md-4 col-xl-3 order-1 order-md-0 text-center text-md-left mt-5 mt-md-0">
            <h2 class="mb-3 text-5 text-uppercase">Address</h2>
            <p class="text-3 mb-4">No 23 aggrey road<br>
              fegge, onitsha.<br>
              Anambra , Nigeria. </p>
            <p class="text-3 mb-1"><span class="text-primary text-4 mr-2"><i class="fa fa-phone"></i></span>(234) 903 346 1413</p>
            <p class="text-3 mb-1"><span class="text-primary text-4 mr-2"><i class="fa fa-fax"></i></span>(234) 810 896 5690</p>
            <p class="text-3 mb-4"><span class="text-primary text-4 mr-2"><i class="fa fa-envelope"></i></span><a href="mailto:nelsonsm@nelsonsmart.com">nelsonsm@nelsonsmart.com </a></p>
            <ul class="social-icons ml-md-n2 justify-content-center justify-content-md-start">
             <li class="social-icons-twitter"><a data-toggle="tooltip" href="https://twitter.com/teckb0t" target="_blank" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li class="social-icons-facebook"><a data-toggle="tooltip" href="https://web.facebook.com/sopuruchukwu.nelson/" target="_blank" title="" data-original-title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
              <li class="social-icons-github"><a data-toggle="tooltip" href="http://www.github.com/NelsonSmart" target="_blank" title="" data-original-title="Github"><i class="fa fa-github"></i></a></li>
              <li class="social-icons-linkedin"><a data-toggle="tooltip" href="https://www.linkedin.com/in/nelson-ojukwu-848a801ab/" target="_blank" title="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-8 col-xl-9 order-0 order-md-1">
            <h2 class="mb-3 text-5 text-uppercase text-center text-md-left">Contact</h2>
            
                 @if (count($errors) > 0)
                <div class="alert alert-danger">
                 <button type="button" class="close" data-dismiss="alert">×</button>
                 <ul>
                  @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                  @endforeach
                 </ul>
                </div>
               @endif
               @if ($message = Session::get('success'))
               <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ $message }}</strong>
               </div>
               @endif
		        <form  action="{{ url('/submit')}}" method="post">
              {{ csrf_field()}}
              <div class="row">
                <div class="col-xl-6">
                  <div class="form-group">
                    <input name="name" type="text" class="form-control" required placeholder="Name">
                  </div>
                </div>
                <div class="col-xl-6">
                  <div class="form-group">
                    <input name="email" type="email" class="form-control" required  placeholder="Email">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea name="message" class="form-control" rows="5" required placeholder="Tell us more about your needs........"></textarea>
              </div>
              <p class="text-center mt-4 mb-0">
			     <input  class="btn btn-primary rounded-pill d-inline-flex" type="submit"  name="send" value= "Send Message">
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Me end --> 
    
  </div>
  <!-- Content end --> 
  @endsection
 