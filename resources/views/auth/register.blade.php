
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'RealCapitalAssets') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <link rel="stylesheet" href="{{ asset('css/plug/bootstrap.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('css/plug/fontAwesome.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('css/plug/font.css') }}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/plug/default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/plug/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/back/img/favicon.ico">
    <!-- Tweaks for older IEs-->
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>
  <body>
<div  class="container">
    <div class="mt-5" style="height: 100%; width; 100%; margin-top; 10%; display:flex; justify-content: center; align-items: center;">
        <div>
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
</body>
</html>
