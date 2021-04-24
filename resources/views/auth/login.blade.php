@extends('layouts.app')

@section('content')
<div class="container">
    <div style="height: 100%" class="row justify-content-center align-items-center">
        <div class="col-md-8">
        <div style="margin-top: 10%">
                    <h4 class="text-center">RealCapitalAssets</h4>

                                          <div class="signup-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <h2>LogIn</h2>
                                <p class="hint-text">Log into your account</p>

                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>


                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        {{ __('Login') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                </div>
                            </form>
                            <div class="text-center">Do not have an Account? <a style="color:#000;" class="btn btn-link ml-2" href="/register">{{ __('Sign Up?') }}</a></div>
                        </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endsection
{{-- @endsection --}}
