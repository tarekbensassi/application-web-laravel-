@extends('layouts.app')

@section('content')
<section class="contact-section">
    <div class="container">
        <div class="sec-title text-center mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
            <span class="title">
                Bienvenue</span>

            <div class="divider">
                <span class="fa fa-mortar-board"></span>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="career-form p-5 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                    <div class="border-line"></div>
                    <h3 class="font-weight-bold color-orange">S'authentifier</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                      

    
                           
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputName">{{ __('E-Mail Address') }}</label>
                                    <input class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Entrer votre Email"
                                        type="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                              
                            </div>

                       
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Password">{{ __('Password') }}</label>
                                <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="mot de passe"
                                    type="password" required autocomplete="current-password">
                                    
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>




                        <button class="btn theme-orange border-0" type="submit">  {{ __('Login') }}</button>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
