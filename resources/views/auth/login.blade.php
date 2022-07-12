@extends("inc.auth")
@section("contect")

<!-- Sing in  Form -->
<section class="sign-in">
            <div class="container ">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('assets/images/nes.png')}}" alt="sing up image"></figure>
                        <a href="{{url('/')}}" class="signup-image-link font-bold-weight-100 text-8">{{env('APP_NAME')}}</a>
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Admin Login</h2>
                        <form method="POST"  action="{{ route('login') }}" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" value="{{old('email')}}" required autofocus/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>


@endsection