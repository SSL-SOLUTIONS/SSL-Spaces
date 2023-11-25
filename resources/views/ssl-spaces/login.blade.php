@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="box-shadow: 0px 0px 10px 5px rgba(0,0,0,0.423);">
                <div class="card-header text-start">
                    <div>
                        <h3 style="text-align:center;" class="pt-2">
                            🔐 <span style="color: #2ca8dd;">Welcome</span> to the Login Page 🔐
                        </h3>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center">

                            <div class="col-md-10">
                                <label for="email" class="col-md-4 col-form-label" style="color: #1b3d6d;">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Registered Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">

                            <div class="col-md-10">
                                <label for="password" class="col-md-4 col-form-label" style="color: #1b3d6d;">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 px-3">
                            <div class="col-lg-6 text-center">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-lg-4" style="padding:20px 0 0 60px;">
                                <button type="submit" class="login-button">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-lg-8" style="padding:30px 0 0 0;">
                                <p>Don't have an account? <a href="{{url('register')}}">Sign Up now</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection