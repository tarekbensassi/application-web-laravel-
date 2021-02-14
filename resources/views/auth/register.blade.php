@extends('layouts.app')

@section('content')
<section class="contact-section">
    <div class="container">
        <div class="sec-title text-center mb-3 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
            <span class="title">
                {{ __('Register') }}</span>

            <div class="divider">
                <span class="fa fa-mortar-board"></span>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
                <div class="career-form p-5 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                    <div class="border-line"></div>
                    <h3 class="font-weight-bold color-orange">Inscrivez-vous</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                      

    
                           
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="exampleInputName">{{ __('Name') }}</label>
                                <input class="form-control  @error('name') is-invalid @enderror" id="name" name="name" placeholder="Entrer votre nom"
                                    type="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          
                        </div>
                       
                            <div class="form-row">
                                <div class="form-group col-md-8">
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
                                <div class="form-group col-md-8">
                                    <label for="exampleInputName">{{ __('Password') }}</label>
                                    <input class="form-control  @error('password') is-invalid @enderror" id="password" name="password" placeholder="Entrer votre password"
                                        type="password" value="{{ old('password') }}"  required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                              
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="exampleInputName">{{ __('Confirm Password') }}</label>
                                    <input class="form-control  @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Retaper le mot de passe"
                                        type="password" value="{{ old('password_confirmation') }}"  required autocomplete="new-password">
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                              
                            </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
