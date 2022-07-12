@extends("inc.auth")

@section('contect')

 <!-- Sign up form -->
 <section class="signup ">
            <div class="container ">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Admin Create</h2>
                        <form method="POST" class="register-form" action="{{ route('register') }}" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" value="{{old('name')}}" required autofocus/>
                            </div>
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Your Username" value="{{old('password')}}" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" value="{{old('email')}}" required/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required autocomplete="new-password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-password"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" id="re_password" placeholder="Repeat your password" required/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{ asset('assets/images/nes.png')}}" alt="sing up image"></figure>
                        <a href="{{url('login')}}" class="signup-image-link">tramsnoslen</a>
                    </div>
                </div>
            </div>
        </section>


@endsection