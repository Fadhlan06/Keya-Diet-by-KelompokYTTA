{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
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
  	<title>Lupa Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                  <form method="POST" action="{{ route('password.email') }}">
                    @csrf
							<center><label>Reset Password</label></center>
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-envelope"></span></div>
		      			<input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror rounded-left" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
		      		</div>
	            <div class="form-group d-flex align-items-center">
	            
								<div class="w-100 d-flex justify-content-center">
                                    <a href="{{ route('login') }}" class="btn btn-danger rounded submit">Kembali</a>
		              &nbsp
		            	<button type="submit" class="btn btn-danger rounded submit">Reset</button>
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

