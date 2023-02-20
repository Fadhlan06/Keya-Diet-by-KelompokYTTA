{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="login" class="col-md-4 col-form-label text-md-end">{{ __('Email / Username') }}</label>

                            <div class="col-md-6">
                                <input id="login" name="login" type="text" class="form-control {{ $errors->has('username') || $errors->has('email') ? 'is-invalid' : '' }}"
                                 value="{{ old('username') ?: old('email') }}" required autofocus>

                                 @if ( $errors->has('username') || $errors->has('email'))
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                 </span>
                             @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!doctype html>
<html lang="en">
  <head>
  	<title>KEYA | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="{{ asset('frontend/dist/img/icon-keya.png') }}" type="image/png">
	<link rel="stylesheet" href="{{ asset('login/css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					 <img src="{{ asset('login/images/keyaa.png') }}" alt="Keya" class="brand-image img-circle elevation-3" style="width: .50">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">	
		      	</div>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      			<input id="login" name="login" type="text" class="form-control {{ $errors->has('username') || $errors->has('email') ? 'is-invalid' : '' }} rounded-left" 
                          placeholder="Email / Username" value="{{ old('username') ?: old('email') }}" required>

                          @if ( $errors->has('username') || $errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                            </span>
                         @endif
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror rounded-left"  placeholder="Password" required autocomplete="current-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
	            </div>
	            <div class="form-group d-flex align-items-center">
	            
								<div class="w-100 d-flex justify-content-center">
		            	<button type="submit" class="btn btn-danger rounded submit">Login</button>
	            	</div>
	            </div>
	            <div class="form-group mt-4">
								<div class="w-100 text-center">
									<p class="mb-1">Don't have an account? <a href="{{ route('register') }}">Daftar</a></p>
                                    @if (Route::has('password.request'))
                                    <p><a href="{{ route('password.request') }}">Lupa Password</a></p>
                                @endif
									
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('login/js/jquery.min.js') }}"></script>
  <script src="{{ asset('login/js/popper.js') }}"></script>
  <script src="{{ asset('login/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('login/js/main.js') }}"></script>

	</body>
</html>

