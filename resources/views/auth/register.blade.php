@extends('layouts.app')

@section('content')
<div class="container">
    <div style="height: 100%" class="row justify-content-center align-items-center">
        <div class="col-md-8">
        <div style="margin-top: 10%">
                    <h4 class="text-center">RealCapitalAssets</h4>




<div class="signup-form">
    <form method="POST" action="{{ route('register') }}">
        @csrf
		<h2>Register</h2>
        <p class="hint-text">Create your account. It's free and only takes a minute.</p>
        <div class="form-group">
			<div class="row">
                <div class="col"><input  type="text" class="form-control @error('fname') is-invalid @enderror" id="fname" name="fname" placeholder="First Name">
                    @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
                <div class="col"><input type="text" class="form-control @error('lname') is-invalid @enderror" id="lname" name="lname" placeholder="Last Name">
                    @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
			</div>
        </div>
        <div class="form-group">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email">
     @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username">
            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" placeholder="Country">
            @error('country')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

        <div class="form-group">
            <input type="number" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Phone">
            @error('phone')
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
            <input type="password" id="password-confirm" class="form-control" name="password_confirmation" placeholder="Confirm Password">
        </div>
        {{-- <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div> --}}
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">
                {{ __('Register') }}
            </button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a style="color:#000;" class="btn btn-link ml-2" href="/login">Log In</a></div>
</div>

                </div>
            </div>
        </div>
</div>
@endsection
